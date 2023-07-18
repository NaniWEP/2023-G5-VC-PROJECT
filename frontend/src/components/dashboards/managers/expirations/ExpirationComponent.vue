<template>
  <div id="body">
    <dashboard-component-vue></dashboard-component-vue>
    <v-card class="bg-grey-lighten-2 p-6 title">
      <h1 class="text-light-green-accent-4">Expired Date</h1>
      <div class="d-flex align-center flex-column bg-grey-lighten-4 pa-6">
        <v-btn-toggle color="primary" v-model="toggle">
          <v-btn color="success">UNIVERSITY</v-btn>
          <v-btn color="success">WORK SHOP</v-btn>
        </v-btn-toggle>
      </div>
    </v-card>
    <v-container v-if="!toggle">
      <v-table>
        <thead>
          <tr>
            <th style="width: 100px" class="text-left">Id</th>
            <th style="width: 200px" class="text-left">Name</th>
            <th style="width: 500px" class="text-left">descrition</th>
            <th style="width: 200px" class="text-left">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="(work, index) of workshopExpired" :key="index">
            <td>{{ work.id }}</td>
            <td>{{ work.name }}</td>
            <td>{{ work.description }}</td>
            <td>
              <v-btn class="mr-4" color="success">Edit</v-btn>
              <v-btn color="red">Delete</v-btn>
            </td>
          </tr>
        </tbody>
      </v-table>
    </v-container>
    <v-container v-else>
      <v-table>
        <thead>
          <tr>
            <th style="width: 100px" class="text-center">Id</th>
            <th style="width: 500px" class="text-center">Name</th>
            <th style="width: 200px" class="text-center">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="item of 5" :key="item">
            <td>{{ item }}</td>
            <td>I love you doeur</td>
            <td>
              <v-btn class="mr-4" color="success">Edit</v-btn>
              <v-btn color="red">Delete</v-btn>
            </td>
          </tr>
        </tbody>
      </v-table>
    </v-container>
  </div>
</template>

<script>
import DashboardComponentVue from "../DashboardView.vue";
import axios from "axios";
// import { onMounted, ref } from "vue";
// let workshops = [];
export default {
  components: {
    DashboardComponentVue,
  },
  data: () => ({
    toggle: null,
    // users: [],
    workshopExpired: [],
  }),
  methods: {
    display() {},
    // getExpiredWorkshop() {

    //   axios
    //     .get("/getexpiredworkshop")
    //     .then(function (response) {
    //       // Do something with the response data
    //       workshops = response.data.data;
    //       this.workshopExpired = workshops;
    //       console.log(workshops);
    //     })
    //     .catch(function (error) {
    //       console.log(error);
    //     });
    // },
    getExpiredWorkshop() {
      axios
        .get("/getexpiredworkshop")
        .then((response) => {
          // Do something with the response data
          this.workshopExpired = response.data.data;
          console.log(this.workshopExpired);
        })
        .catch((error) => {
          console.log(error);
        });
    },
  },
  created() {
    this.getExpiredWorkshop();
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
</style>