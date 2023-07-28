<template>
  <div id="body">
    <dashboard-component-vue></dashboard-component-vue>
    <v-card class="ml-10 mt-1 mr-8 bg-grey-lighten-2">
      <h1 class="text-light-black-accent-4 ml-10">Expired Date</h1>
      <div class="d-flex align-center flex-column bg-grey-lighten-4 pa-6">
        <v-btn-toggle color="primary" v-model="toggle">
          <v-btn color="indigo-darken-1">WORKSHOP</v-btn>
          <v-btn color="indigo-darken-1">UNIVERSITY</v-btn>
        </v-btn-toggle>
      </div>
    </v-card>
    <v-container v-if="toggle">
      <v-table class="table bg-grey-lighten-2">
        <thead>
          <tr>
            <th style="width: 100px" class="text-left">Id</th>
            <th style="width: 200px" class="text-left">Name</th>
            <th style="width: 100px" class="text-left">Exprite Date</th>
          </tr>
        </thead>
        <tbody class="bg-grey-lighten-4">
          <tr v-for="(work, index) of workshopPostExpired" :key="index">
            <td>{{ work.id }}</td>
            <td>{{ work.name }}</td>
            <td>{{ work.date }}</td>
          </tr>
        </tbody>
      </v-table>
    </v-container>
    <v-container v-else>
      <v-table class="table bg-grey-lighten-2" >
        <thead>
          <tr>
            <th style="width: 100px" class="text-left">Id</th>
            <th style="width: 200px" class="text-left">Name</th>
            <th style="width: 100px" class="text-left">Exprite Date</th>
          </tr>
        </thead>
        <tbody class="bg-grey-lighten-4">
          <tr v-for="(post, index) of universityPostExpired" :key="index">
            <td>{{ post.id }}</td>
            <td>{{ post.title }}</td>
            <td>{{ post.date }}</td>
          </tr>
        </tbody>
      </v-table>
    </v-container>
  </div>
</template>

<script>
import DashboardComponentVue from "../../DashboardComponent.vue";
import axios from "@/stores/axiosHttp";
export default {
  components: {
    DashboardComponentVue,
  },
  data: () => ({
    toggle: null,
    // users: [],
    workshopPostExpired: [],
    universityPostExpired: [],
  }),
  methods: {
    getExpiredWorkshopPost() {
      axios
        .get("/workshop/expirepost")
        .then((response) => {
          this.workshopPostExpired = response.data.data;
        })
        .catch((error) => {
          console.log(error);
        });
    },
    getExpiredUniversityPost() {
      axios
        .get("/university/expirepost")
        .then((response) => {
          this.universityPostExpired = response.data.data;
          console.log(this.universityPostExpired);
        })
        .catch((error) => {
          console.log(error);
        });
    },
  },
  created() {
    this.getExpiredUniversityPost();
    this.getExpiredWorkshopPost();
  },
};
</script>

<style scoped>
.title {
  margin-left: 60px;
}
#body {
  display: flex;
  flex-direction: column;
  width: 100%;
  height: 100vh;
}
.table {
  background-color: 	#C0C0C0;
  border-radius: 5px;
}
</style>