<template>
  <div class="d-flex flex-column">
    <v-row>
      <v-col
        v-for="(workshop, index) of workshops"
        :key="index"
        :id="workshop.id"
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

            <v-card-title> {{ workshop.name }}</v-card-title>

            <v-card-subtitle>{{ workshops.description }}</v-card-subtitle>

            <v-card-actions>
              <v-btn
                :to="`workshopDetail/${workshop.id}`"
                :id="$route.params.index"
                class="actionBtn"
                variant="outlined"
              >
                See more
              </v-btn>
              <v-btn
                v-if="isFavorite"
                @click="saveFavorite(workshop.id)"
                prepend-icon="mdi-heart-outline"
                variant="outlined"
                style="color: #fffff;background-color: #304FFE ;padding: 0 20px"
              >
                Add to Favorites
              </v-btn>
              <v-btn
                v-else
                @click="saveFavorite(workshop.id)"
                prepend-icon="mdi-heart-outline"
                class="actionBtn"
                variant="outlined"
              >
                Favorited
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
import axios from "@/stores/axiosHttp";
import Swal from "sweetalert2";
export default {
  props: ["workshops"],
  data() {
    return {
      isFavorite: false,
    };
  },
  methods: {
    toggleFavorite(id) {
      const favoriteStatus = this.favorites[id];
      console.log(id);
      if (favoriteStatus) {
        axios
          .delete(`auth/university/favoriteUniversityPost/${this.datas}`)
          .then((response) => {
            console.log(response.data);
            this.favorites[id] = false; // update the favorite status to false
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
            this.datas = response.data.data.id;
            this.favorites[id] = true; // update the favorite status to true
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
        color: this.favorites[id] ? "red" : "black", // update the icon color based on the favorite status
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