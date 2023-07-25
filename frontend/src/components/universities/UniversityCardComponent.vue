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
          <v-card class="mx-auto" max-width="450">
            <v-img
              src="https://cdn.vuetifyjs.com/images/cards/sunshine.jpg"
              height="200px"
              cover
            ></v-img>

            <v-card-title> {{ university.name }}</v-card-title>

            <v-card-subtitle>{{ university.description }}</v-card-subtitle>

            <v-card-actions>
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