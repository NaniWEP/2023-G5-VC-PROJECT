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
          <v-card class="mx-auto my-12 card" max-width="400">
            <v-img
            :src="major.image" alt="major Image"
              height="200px"
              cover
            ></v-img>
            <v-card-item>
              <v-card-title><v-icon>mdi-school-outline</v-icon> : {{ major.major.title }}</v-card-title>
              <v-card-title>UNIVERSITY : {{ major.major.university.name }}</v-card-title>

              <v-card-subtitle>
                <span class="me-1">{{ major.major.year_duration }}years</span>

                <v-icon
                  color="error"
                  icon="mdi-fire-circle"
                  size="small"
                ></v-icon>
              </v-card-subtitle>
            </v-card-item>
            <v-card-text>
              <v-row align="center" class="mx-0">
                <v-rating
                  :model-value="0"
                  color="#3737e5"
                  density="compact"
                  half-increments
                  readonly
                  size="small"
                ></v-rating>

                <div class="ms-4 text-subtitle-1">
                  ${{ major.major.price }} /per year
                </div>
              </v-row>
            </v-card-text>
            <v-divider class="mx-4 mb-1"></v-divider>
            <v-card-title>START APPLY</v-card-title>
            <div class="px-4">
              <v-chip-group v-model="selection">
                <v-chip>{{ formatDate(major.major.apply_date) }}</v-chip>
              </v-chip-group>
            </div>

            <v-card-actions>
              <v-btn
                :to="`/majorPostDetail/${major.id}`"
                class="actionBtn"
                variant="outlined"
              >
                See more
              </v-btn>
              <v-btn
                class="actionBtn"
                prepend-icon="mdi-heart-outline"
                @click="toggleFavorite(major.id)"
                :style="getIconStyle(major.id)"
                align-tabs="center"
                variant="outlined"
              >
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
import dayjs from "dayjs"
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
    formatDate(dateString) {
      const date = dayjs(dateString);
      // Then specify how you want your dates to be formatted
      return date.format(" dddd-D/MMMM/YYYY");
    },
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
            console.log(response.data.message);
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
        color: this.favorites.includes(id) ? "red" : "#3737e5", // update the icon color based on the favorite status
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

.card{
  height: 100%;
  background: #e7e7e7ee;
  box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
}

.card:hover {
  transition: 500ms;
  background: #ededed;
  box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
}
</style>
