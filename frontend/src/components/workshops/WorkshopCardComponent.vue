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
          <v-card max-width="400px" class="mx-auto my-12 card">
            <v-img
              src="https://cdn.vuetifyjs.com/images/cards/sunshine.jpg"
              height="250px"
              width="100%"
              cover
            ></v-img>
            <v-card-item>
              <v-card-title>{{ workshop.name }}</v-card-title>

              <v-card-subtitle>
                <span class="me-1">{{ workshop.location }}</span>

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

                <div class="ms-4 text-subtitle-1"><v-icon color="#3737e5">mdi-ticket-percent-outline</v-icon> • {{ workshop.variable_ticket }} tickets</div>
              </v-row>
            </v-card-text>
            <v-divider class="mx-4 mb-1"></v-divider>


            <div class="px-4">
              <v-chip-group v-model="selection">
                <v-chip>{{formatDate(workshop.date)}}</v-chip>

                <v-chip>{{ workshop.time }}pm</v-chip>
              </v-chip-group>
            </div>
            <v-card-actions class="my-2">
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
                :style="getIconStyle(workshop.id)"
                variant="outlined"
                prepend-icon="mdi-heart-outline"
              >
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
import dayjs from "dayjs";

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
    formatDate(dateString) {
      const date = dayjs(dateString);
      // Then specify how you want your dates to be formatted
      return date.format(" dddd-D/MMMM/YYYY");
    },
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
        color: this.favorites.includes(id) ? "red" : "#3737e5",
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
.faovrite {
  background-color: #304ffe;
  color: #fff;
  transition: 800ms;
  outline: 1px solid #304ffe;
}

.card{
  height: 100%;
  background: #e7e7e7ee;
  box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
}

.card:hover {
    transition: 1000ms;
    box-shadow: 0 24px 36px rgba(0,0,0,0.11),
    0 24px 46px var(--box-shadow-color);
}
</style>