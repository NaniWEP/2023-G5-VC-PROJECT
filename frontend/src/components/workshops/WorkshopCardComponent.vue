<template>
  <div class="d-flex flex-column">
    <v-row>
      <v-col
        v-for="workshop in workshops"
        :key="workshop.id"
        :id="workshop.id"
        class="d-flex justify-center align-center"
        cols="4"
      >
        <v-list style="width: 100%">
          <v-card class="mx-auto" max-width="450">
            <v-img
              src="https://cdn.vuetifyjs.com/images/cards/sunshine.jpg"
              height="200px"
              cover
            ></v-img>

            <v-card-title> {{ workshop.name }}</v-card-title>

            <v-card-subtitle>{{ workshop.description }}</v-card-subtitle>

            <v-card-actions>
              <v-btn
                :to="`workshop/workshopDetail/${workshop.id}`"
                class="actionBtn"
                variant="outlined"
              >
                See more
              </v-btn>
              <v-btn
                style="padding: 0 20px"
                @click="toggleFavorite(workshop.id)"
                variant="text"
              >
                <v-icon
                  align-tabs="center"
                  :style="getIconStyle(workshop.id)"
                  icon="mdi-heart"
                ></v-icon>
                FAVORITE
              </v-btn>
            </v-card-actions>
          </v-card>
        </v-list>
      </v-col>
    </v-row>
    <v-pagination :length="4" rounded="circle" class="mb-8"></v-pagination>
  </div>
</template>

<script>
import axios from "../../stores/axiosHttp";
import Swal from "sweetalert2";

export default {
  props: ["workshops"],
  data() {
    return {
      favorites: [],
    };
  },
  mounted() {
    axios
      .get("auth/workshop/getListOfFavrite")
      .then((response) => {
        this.favorites = response.data.data.map(
          (favorite) => favorite.workshop_post_id
        );
      })
      .catch((error) => {
        console.log(error.message);
      });
  },
  methods: {
    toggleFavorite(id) {
      const index = this.favorites.indexOf(id);
      if (index !== -1) {
        axios
          .delete(`auth/workshop/favoriteWorkshopPost/${id}`)
          .then((response) => {
            console.log(response.data);
            this.favorites.splice(index, 1); // remove the post from favorites
            this.alertFavorite("info", "Post removed from favorites");
          })
          .catch((error) => {
            console.log(error.message);
          });
      } else {
        axios
          .post("auth/workshop/favoriteWorkshopPost", {
            workshop_post_id: id,
          })
          .then((response) => {
            if (response.data.success) {
              this.favorites.push(id);
              this.alertFavorite("success", "Post added to favorites");
            }
            console.log(response.data.message);
            this.alertFavorite("success", "Post added to favorites");
          })
          .catch((error) => {
            console.log(error.message);
          });
      }
    },
    alertFavorite(icon, message) {
      const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 2000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.addEventListener("mouseenter", Swal.stopTimer);
          toast.addEventListener("mouseleave", Swal.resumeTimer);
        },
      });

      Toast.fire({
        icon: icon,
        title: message,
      });
    },
  },
  computed: {
    getIconStyle() {
      return (id) => ({
        color: this.favorites.includes(id) ? "red" : "black",
      });
    },
  },
};
</script>

<style scoped>
.actionBtn:hover {
  background-color: #304ffe;
  color: #fff;
  transition: 800ms;
  outline: 1px solid #304ffe;
}
.actionBtn {
  padding: 0 20px;
  color: #304ffe;
}
</style>