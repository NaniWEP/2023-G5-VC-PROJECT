<template>
  <v-container v-if="user !== null" class="container">
    <SideNavBar></SideNavBar>
    <v-row>
      <v-col cols="12" md="3">
        <v-card class="elevation-2">
          <v-card-title class="justify-center">
            <v-img
              class="profile_img"
              :src="user.picture"
              alt="student dp"
            />
            <h3 class="text-center">{{ user.first_name + " " +user.last_name }}</h3>
          </v-card-title>
        </v-card>
      </v-col>
      <v-col cols="12" md="8">
        <v-card class="elevation-2">
          <v-card-title class="justify-center">
            <h3 class="mb-0"><v-icon>mdi-account</v-icon>My Information</h3>
          </v-card-title>
          <v-card-text>
            <v-simple-table>
              <v-container>
                <v-row>
                  <v-col cols="12" sm="6">
                    <v-text-field
                      required
                      v-model="user.first_name"
                    ></v-text-field>
                  </v-col>
                  <v-col cols="12" sm="6">
                    <v-text-field
                      required
                      v-model="user.last_name"
                    ></v-text-field>
                  </v-col>
                  <v-col cols="12" sm="6">
                    <v-autocomplete
                      :items="['Male', 'Female']"
                      label="Gender*"
                      v-model="user.gender"
                    ></v-autocomplete>
                  </v-col>
                  <v-col cols="12" sm="6">
                    <v-text-field
                      label="Date of birth*"
                      type="date"
                      required
                      v-model="user.date_of_birth"
                    ></v-text-field>
                  </v-col>
                  <v-col cols="12" sm="6">
                    <v-text-field
                      label="Email*"
                      required
                      v-model="user.email"
                    ></v-text-field>
                  </v-col>
                  <v-col cols="12" sm="6">
                    <v-autocomplete
                      label="Province*"
                       :items="[
                       'KampongThom',
                       'KampongCham',
                       'PreyVeag',
                       'KosKong',
                       'BatdomBong',
                       'BunteayMeanjey',
                       'Kompot',
                       'Stung Treang',
                       'SeamReap',
                       ]"
                      required
                      v-model="user.province"
                    ></v-autocomplete>
                  </v-col>
                  <v-btn prepend-icon="mdi-content-save-edit" class="saveBtn" variant="outlined" @click="updateUser">Save</v-btn>            
                </v-row>
              </v-container>
            </v-simple-table>
          </v-card-text>
        </v-card>
        <v-card class="elevation-2 mt-4">
          <v-card-title class="justify-center">
            <h3 class="mb-0">
              <v-icon>mdi-information</v-icon>Other Information
            </h3>
          </v-card-title>
          <v-card-text>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
              enim ad minim veniam, quis nostrud exercitation ullamco laboris
              nisi ut aliquip ex ea commodo consequat.
            </p>
          </v-card-text>
        </v-card>
      </v-col>
    </v-row>
  </v-container>
</template>

<script>
import axios from "@/stores/axiosHttp";
import SideNavBar from "../studentLayouts/SideNavBar.vue";
export default {
  data(){
    return{     
        user: {},
      }
    },                 
  components: {
    SideNavBar,
  },
  methods:{
    getUser(){
      axios
      .get(`/auth/getUser`)
      .then((response) => {
        console.log(response.data.data);
        this.user = response.data.data;
      })
      .catch((error) => {
        console.log(error);
      });
    },
    updateUser(){
      console.log(this.user.date_of_birth)
      axios
      .put(`/auth/update/`+ this.user.id, this.user)
      .then((response)=>{
        console.log(response.data);
      })
      .catch((error)=>{
        console.log(error);
      })
    }
  },
  show(){
  },
  onMounted(){
  },
  mounted(){
    this.getUser()
  },
  created(){
  }

};
</script>

<style scoped>
h2,
p {
  text-align: center;
}

.profile {
  display: flex;
  justify-content: center;
  margin-top: 3%;
}
img {
  border-radius: 50%;
  width: 10%;
}
.text-center {
  background-color: #d4dcdd;
  margin-top: 1%;
  padding: 10px;
  font-size: large;
}

.v-card-text {
  margin-top: 16px;
  padding: 30px;
  background-color: #cdd3cd;
  box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.2);
  border-radius: 10px;
}

.v-card {
  box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);
  padding: 30px;
  border-radius: 10px;
  border: 2px solid #3737e5;
}

.text-center {
  background-color: #3737e5;
  color: white;
  border-radius: 5px;
}

.profile_img {
  border: 3px solid #3737e5;
  border-radius: 50%;
  padding: 24px;
}

table {
  border-collapse: collapse;
  width: 100%;
  max-width: 600px;
  margin: 0 auto;
  font-family: Arial, sans-serif;
  font-size: 16px;
}

th,
td {
  padding: 9px;
  text-align: left;
  width: 2%;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

tr:hover {
  background-color: #ddd;
}

.text-right {
  text-align: right;
}

.saveBtn{
  outline: 1px solid #3737e5;
  color: #3737e5;
}
.saveBtn:hover{
  background-color: #304ffe;
  color : #ffff;
  transition: 800ms;
  outline: 1px solid #304ffe;
}
</style>