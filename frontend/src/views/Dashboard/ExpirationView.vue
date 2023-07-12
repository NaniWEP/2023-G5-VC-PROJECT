<template>
  <dashboard-component-vue></dashboard-component-vue>
  <v-card class="bg-grey-lighten-2 p-6 title">
    <h1 class="text-light-green-accent-4 ">Expired Date</h1>
    <div class="d-flex align-center flex-column bg-grey-lighten-4 pa-6">
      <v-btn-toggle color="primary" v-model="toggle">
        <v-btn color="success">UNIVERSITY</v-btn>
        <v-btn color="success">WORK SHOP</v-btn>
      </v-btn-toggle>
    </div>
  </v-card>
  <v-container v-if="!toggle">
    <v-table 
    
    >
      <thead>
        <tr >
          <th style="width: 100px;" class="text-center">Id</th>
          <th style="width: 500px;" class="text-center">Name</th>
          <th style="width: 200px;" class="text-center">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="item of 5" :key="item">
          <td>{{ item }}</td>
          <td>Law</td>
          <td>
            <v-btn class="mr-4" color="success">Edit</v-btn>
            <v-btn color="red">Delete</v-btn>
          </td>
        </tr>
      </tbody>
    </v-table>
  </v-container>
  <v-container v-else>
    <v-table >
      <thead>
        <tr>
          <th style="width: 100px;" class="text-center">Id</th>
          <th style="width: 500px;" class="text-center">Name</th>
          <th style="width: 200px;" class="text-center">Action</th>
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
</template>

<script>
import DashboardComponentVue from "@/components/Dashboard/DashboardComponent.vue";
export default {
  components: {
    DashboardComponentVue,
  },
  data: () => ({
    toggle: null,
  }),
};
</script>

<style scoped>
.title {
  margin-left: 60px;
}
</style>