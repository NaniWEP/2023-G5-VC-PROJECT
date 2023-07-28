<template>
  <div id="body">
    <dashboard-component></dashboard-component>
    <v-card class="ml-15 mt-1 mr-8 bg-grey-lighten-2">
      <h1 class="text-light-black-accent-4 ml-10">workshop</h1>
      <div class="d-flex align-center flex-column bg-grey-lighten-4 pa-2 mb-1">
        <v-btn-toggle v-model="toggle">
          <v-btn color="indigo-darken-1">WORKSHOP</v-btn>
          <v-btn color="indigo-darken-1">UNIVERSITY</v-btn>
        </v-btn-toggle>
      </div>
    </v-card>
    <v-container v-if="toggle">
      <div class="d-flex mt-5 mb-10">
        <post-university-component
          @university="add_cards"
        ></post-university-component>
      </div>
      <v-table>
        <thead>
          <tr>
            <th style="width: 100px" class="text-center">Id</th>
            <th style="width: 100px" class="text-center">title</th>
            <th style="width: 400px" class="text-center">descrition</th>
            <th style="width: 100px" class="text-center">year_duration</th>
            <th style="width: 100px" class="text-center">month_duration</th>
            <th style="width: 100px" class="text-center">apply_date</th>
            <th style="width: 100px" class="text-center">start_date</th>
            <th style="width: 100px" class="text-center">price</th>
            <th style="width: 300px" class="text-center">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="(university, index) of universities" :key="index">
            <td>{{ index }}</td>
            <td>{{ university.name }}</td>
            <td>{{ university.description }}</td>
            <td>{{ university.year_duration }}</td>
            <td>{{ university.month_duration }}</td>
            <td>{{ university.apply_date}}</td>
            <td>{{ university.start_date }}</td>
            <td>{{ university.price }}</td>
            <td class="d-flex align-center justify-center">
              <edit-post-university-component></edit-post-university-component>
              <v-btn @click="removeCard(index)" color="red">Delete</v-btn>
            </td>
          </tr>
        </tbody>
      </v-table>    
    </v-container>

    <v-container v-else>
      <div class="d-flex mt-5 mb-10">
        <workshop-form-post-component 
        @workshop="add_tables">
        </workshop-form-post-component>
      </div>
      <v-table>
        <thead>
          <tr>
            <th style="width: 100px" class="text-center">Id</th>
            <th style="width: 100px" class="text-center">name</th>
            <th style="width: 300px" class="text-center">descrition</th>
            <th style="width: 100px" class="text-center">date</th>
            <th style="width: 100px" class="text-center">time</th>
            <th style="width: 200px" class="text-center">location</th>
            <th style="width: 100px" class="text-center">organizer</th>
            <th style="width: 150px" class="text-center">contact</th>
            <th style="width: 300px" class="text-center">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="(workshop, index) of workshops" :key="index">
            <td>{{ index }}</td>
            <td>{{ workshop.name }}</td>
            <td>{{ workshop.description }}</td>
            <td>{{ workshop.date }}</td>
            <td>{{ workshop.time }}</td>
            <td>{{ workshop.location }}</td>
            <td>{{ workshop.organizer }}</td>
            <td>{{ workshop.contact }}</td>
            <td class="d-flex align-center justify-center">
              <v-btn class="mr-4 w-25 text-white" color="#3737e5">Edit</v-btn>
              <v-btn @click="removetable(index)" color="red">Delete</v-btn>
            </td>
          </tr>
        </tbody>
      </v-table>
    </v-container>
  </div>
</template>

<script>
import DashboardComponent from "../DashboardView.vue";
import EditPostUniversityComponent from "./EditPostUniversity.vue";
import WorkshopFormPostComponent from "./WorkshopFormPostComponent.vue";
import PostUniversityComponent from './PostUniversityComponent.vue';
export default {
  components: {
    DashboardComponent,
    WorkshopFormPostComponent,
    EditPostUniversityComponent,
    PostUniversityComponent
  },
  data() {
    return {
      toggle: null,
      universities: [],
      workshops:[]
    };
  },
  
  methods: {
  //  =========================Universityuniversity==================== 
    add_cards(university) {
      console.log(university);
      this.universities.push(university);
      console.log(this.universities);
    },
    removeCard(index) {
      this.universities.splice(index, 1);
      console.log(this.universities);
    },
    updateCard() {
      console.log("thana: update");
    },
// ===============================Workshopuniversity====================
    add_tables(workshop) {
      console.log(workshop);
      this.workshops.push(workshop);
      console.log(this.universities);
    },
    removetable(index){
      this.workshops.splice(index, 1);
      console.log(this.workshops);
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

</style>