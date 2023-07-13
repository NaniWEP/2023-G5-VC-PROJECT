<template>
  <div id="body">
    <dashboard-component></dashboard-component>
    <v-card class="ml-15 mt-1 mr-8 mb-3 bg-grey-lighten-2 p-10">   
        <h1 class="text-light-green-accent-4 ml-10">Post</h1>
    </v-card>
    <div class="d-flex ml-15 mr-8">
        <v-btn class="mt-5" color="blue-darken-2">+ add</v-btn>
        <v-row class="contain">
            <v-col sm="5">
              <v-text-field
                  placeholder="Title"
                  variant="underlined"
              ></v-text-field>
            </v-col>
            <v-col sm="5">
              <v-text-field
                  placeholder="Created"
                  variant="underlined"
              ></v-text-field>
            </v-col>
        </v-row>
        <v-btn class="mt-5" color="success">search</v-btn>
        <v-icon icon="fa:fas fa-search"></v-icon>
    </div>
    <tr class="header">
      <th style="width: 200px;" class="text-center">Id</th>
      <th style="width: 500px;" class="text-center">Name</th>
      <th style="width: 200px;" class="text-center">Created</th>
    </tr>
    <v-card v-for="Avata of 4" :key="Avata" class="ml-15 mt-3 mr-8 mb-3" height="70px">
      <div class="mt-5 d-flex">
        <th style="width: 90px;">1</th>
        <th style="width: 600px;">Avata</th>
        <th style="width: 100px;">13/07/2023</th>
        <div class="action">
          <v-btn class="mr-5" color="success">Edit</v-btn>
          <v-btn color="red">Delete</v-btn>
        </div>
      </div>
    </v-card>
  </div>
</template>

<script>
import DashboardComponent from "@/components/Dashboard/DashboardComponent.vue";
export default {
  components: { DashboardComponent },
};
</script>

<style scoped>
  #body {
  display: flex;
  flex-direction: column;
  width: 100%;
  height: 100vh;
}

.contain{
  margin-left: 50%;
}

.header{
  margin-top: 5%;
}

.action{
  margin-left: 130px;
}
</style>