<template>
  <div class="d-flex flex-column">
    <v-row>
      <v-col
        v-for="(university, index) in universities"
        :key="index"
        class="d-flex justift-center align-center"
        cols="4"
      >
        <v-list style="width: 100%">
          <v-card class="mx-auto my-12 card" max-width="500">
            <v-img
             :src="university.image" alt="university Image"
              height="200px"
              cover
            ></v-img>
            <v-card-item>
              <v-card-title>{{ university.name }}</v-card-title>

              <v-card-subtitle>
                <span class="me-1">{{ university.location }}</span>

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
                  <v-icon color="#3737e5">mdi-map-marker-down</v-icon> •
                  {{ university.province }}
                </div>
              </v-row>
            </v-card-text>
            <v-divider class="mx-4 mb-1"></v-divider>
            <v-card-actions class="my-2">
              <v-btn
                class="actionBtn"
                :to="`/universityDetail/${university.id}`"
                :id="$route.params.index"
                variant="outlined"
              >
                See more
              </v-btn>
              <v-btn
                :id="$route.params.index"
                prepend-icon="mdi-heart-outline"
                class="actionBtn"
                variant="outlined"
                @click="alertFavorite"
              >
                favorite
              </v-btn>
            </v-card-actions>
          </v-card>
        </v-list>
      </v-col>
    </v-row>
  </div>
</template>
<script>
//
// Resource: https://sweetalert2.github.io/#examples
//
import Swal from "sweetalert2";
export default {
  props: ["universities"],
  methods: {
    alertFavorite() {
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
        icon: "success",
        title: "Save successfully",
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
