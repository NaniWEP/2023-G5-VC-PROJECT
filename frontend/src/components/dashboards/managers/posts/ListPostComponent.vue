<template>
  <div id="body">
    <dashboard-component></dashboard-component>
    <v-card class="ml-15 mt-1 mr-8 bg-grey-lighten-2">
      <h1 class="text-light-black-accent-4 ml-10">Post</h1>
      <div class="d-flex align-center flex-column bg-grey-lighten-4 pa-2 mb-1">
        <v-btn-toggle v-model="toggle">
          <v-btn color="indigo-darken-1">WORKSHOP</v-btn>
          <v-btn color="indigo-darken-1">UNIVERSITY</v-btn>
        </v-btn-toggle>
      </div>
    </v-card>
    <v-container v-if="toggle">
      <div class="d-flex mt-5 mb-10">
        <post-university-component ></post-university-component>
      </div>
      <div class="header">
        <th style="width: 200px" class="text-center">Id</th>
        <th style="width: 210px" class="text-center">Title</th>
        <th style="width: 250px" class="text-center">Description</th>
        <th style="width: 190px" class="text-center">Date</th>
      </div>
      <v-card
        v-for="university of 4" :key="university" class="ml-15 mr-8 mt-4" height="70px">
        <div class="mt-5 d-flex">
          <th style="width: 90px">2</th>
          <th style="width: 300px">RUPP</th>
          <th style="width: 190px">We will show you</th>
          <th style="width: 220px">26/07/2023</th>
          <div class="action">
            <v-btn @click="updateCard" class="mr-4 text-white" color="#3737e5">Edit</v-btn>
            <v-btn @click="removeCard" color="red">Delete</v-btn>
          </div>
        </div>
      </v-card>
    </v-container>
    
    <v-container v-else>
      <div class="d-flex mt-5 mb-10">
        <workshop-form-post-component></workshop-form-post-component>
      </div>
      <div class="header">
        <th style="width: 200px" class="text-center">Id</th>
        <th style="width: 500px" class="text-center">Name</th>
        <th style="width: 200px" class="text-center">Created</th>
      </div>
      <v-card
        v-for="workshop of 4" :key="workshop" class="ml-15 mr-8 mt-4" height="70px">
        <div class="mt-5 d-flex">
          <th style="width: 90px">1</th>
          <th style="width: 600px">PNC</th>
          <th style="width: 100px">13/07/2023</th>
          <div class="action">
            <v-btn class="mr-4 text-white" color="#3737e5">Edit</v-btn>
            <v-btn color="red">Delete</v-btn>
          </div>
        </div>
      </v-card>
    </v-container>
  </div>
</template>

<script>
import DashboardComponent from "../DashboardView.vue";
import PostUniversityComponent from './PostUniversityComponent.vue';
import WorkshopFormPostComponent from './WorkshopFormPostComponent.vue';

export default {
  components: {
    DashboardComponent,
    PostUniversityComponent,
    WorkshopFormPostComponent
  },
    data: () => ({
        toggle: null,
    }),
    methods: {
        removeCard() {
             console.log("thana: update");
        },
        updateCard(){
            console.log("thana: update");
        }
  },
};
</script>

<style scoped>
#body {
  display: flex;
  flex-direction: column;
  width: 100%;
  height: 100vh;
}
.contain {
  margin-left: 50%;
}
.header {
  margin-top: 2%;
}
.action {
  margin-left: 90px;
}
</style>