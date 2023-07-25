<template>
  <div class="d-flex flex-column">
    <v-row>
      <v-col
        v-for="(major, index) in majors"
        :key="index"
        :id="major.id"
        class="d-flex justift-center align-center"
        cols="4"
      >
        <v-list style="width: 100%">
          <v-card class="mx-auto" max-width="450">
            <v-img
              src="https://cdn.vuetifyjs.com/images/cards/sunshine.jpg"
              height="200px"
              cover
            ></v-img>

            <v-card-title> {{ major.title }}</v-card-title>

            <v-card-subtitle>{{ major.description }}</v-card-subtitle>

            <v-card-actions>
              <v-btn
                :to="`/majorPostDetail/${major.id}`"
                class="actionBtn"
                variant="outlined"
              >
                See more
              </v-btn>
              <v-btn style="color: #304ffe; padding: 0 20px" 
              @click="toggleFavorite(major.id)"
              variant="text">
                <v-icon
                  align-tabs="center"
                  :style="getIconStyle(major.id)"
                  icon="mdi-heart"
                ></v-icon>
                FAVORITE
              </v-btn>
            </v-card-actions>
          </v-card>
        </v-list>
      </v-col>
    </v-row>
  </div>
</template>

<script>
import axios from "../../stores/axiosHttp";
import Swal from "sweetalert2";

export default {
  props: ["majors"],
  data() {
    return {
      favorites: [],
    };
  },
  mounted() {
    axios
      .get("auth/university/getListOfFavrite")
      .then((response) => {
        this.favorites = response.data.data.map(
          (favorite) => favorite.university_post_id
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
          .delete(`auth/university/favoriteUniversityPost/${id}`)
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
          .post("auth/university/favoriteUniversityPost", {
            university_post_id: id,
          })
          .then((response) => {
            if (response.data.success) {
              this.favorites.push(id); // add the post to favorites
              this.alertFavorite('success', "Post added to favorites");
            }
            this.alertFavorite("success", response.data.message);
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
        color: this.favorites.includes(id) ? "red" : "black", // update the icon color based on the favorite status
      });
    },
  },
};
</script>
<style scoped>
.actionBtn:hover{
  background-color: #304ffe;
  color : #fff;
  transition: 800ms;
  outline: 1px solid #304ffe;
}
.actionBtn{
  padding: 0 20px;
  color: #304ffe;
}
</style>