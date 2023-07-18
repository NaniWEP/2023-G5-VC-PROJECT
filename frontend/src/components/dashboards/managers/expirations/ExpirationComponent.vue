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
    <v-container v-if="toggle">
      <v-table>
        <thead>
          <tr>
            <th style="width: 100px" class="text-center">Id</th>
            <th style="width: 100px" class="text-center">Name</th>
            <th style="width: 400px" class="text-center">descrition</th>
            <th style="width: 100px" class="text-center">date</th>
            <th style="width: 300px" class="text-center">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="(work, index) of workshopPostExpired" :key="index">
            <td>{{ work.id }}</td>
            <td>{{ work.name }}</td>
            <td>{{ work.description }}</td>
            <td>{{ work.date }}</td>
            <td class="d-flex align-center justify-center">
              <v-btn class="mr-4 w-25" color="success">Edit</v-btn>
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
            <th style="width: 100px" class="text-center">Name</th>
            <th style="width: 400px" class="text-center">descrition</th>
            <th style="width: 100px" class="text-center">date</th>
            <th style="width: 300px" class="text-center">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="(post, index) of universityPostExpired" :key="index">
            <td>{{ post.id }}</td>
            <td>{{ post.title }}</td>
            <td>{{ post.description }}</td>
            <td>{{ post.date }}</td>
            <td class="d-flex align-center justify-center">
              <v-btn class="mr-4 w-25" color="success">Edit</v-btn>
              <v-btn color="red">Delete</v-btn>
            </td>
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
</style>