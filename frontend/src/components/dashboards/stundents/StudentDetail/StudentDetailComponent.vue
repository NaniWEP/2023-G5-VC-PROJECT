<template>
  <v-container class="container">
    <SideNavBar></SideNavBar>
    <v-row>
      <v-col cols="12" md="3">
        <v-card class="elevation-2">
          <v-card-title class="justify-center">
            <v-img
              class="profile_img"
              src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp"
              alt="student dp"
            />
            <h3 class="text-center">Doeur Diet</h3>
          </v-card-title>
          <v-card-text>
            <p class="mb-0">
              <strong class="pr-1">Student ID:</strong>321000001
            </p>
            <p class="mb-0"><strong class="pr-1">Class:</strong>4</p>
            <p class="mb-0"><strong class="pr-1">Section:</strong>A</p>
          </v-card-text>
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
                      label="firstName*"
                      required
                      v-model="firstname"
                    ></v-text-field>
                  </v-col>
                  <v-col cols="12" sm="6">
                    <v-text-field
                      label="LastName*"
                      required
                      v-model="lastname"
                    ></v-text-field>
                  </v-col>
                  <v-col cols="12" sm="6">
                    <v-autocomplete
                      :items="['M', 'F']"
                      label="Gender*"
                      v-model="gender"
                    ></v-autocomplete>
                  </v-col>
                  <v-col cols="12" sm="6">
                    <v-text-field
                      label="Date of birth*"
                      type="date"
                      required
                      v-model="dateOfBirth"
                    ></v-text-field>
                  </v-col>
                  <v-col cols="12" sm="6">
                    <v-text-field
                      label="Email*"
                      required
                      v-model="gmail"
                    ></v-text-field>
                  </v-col>
                  <v-col cols="12" sm="6">
                    <v-text-field
                      label="Phone number*"
                      type="number"
                      required
                      v-model="phoneNumber"
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
                      v-model="province"
                    ></v-autocomplete>
                  </v-col>
                  <v-col cols="12" sm="6">
                    <v-text-field label="Image*" type="file" required></v-text-field>
                  </v-col>
                  <v-btn color="#3737e5" variant="text" @click="Save">Save</v-btn>            
                </v-row>
              </v-container>
            </v-simple-table>
            <dialog-form></dialog-form>
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
// import DialogForm from "./DialogFormComponent.vue";
import SideNavBar from "../studentLayouts/SideNavBar.vue";
export default {
  components: {
    SideNavBar,
    // DialogForm,
  },
  data(){
    return{     
      users:[
      {
        id:1,
        firstname:"Thana",
        lastname:"Chhoeun",
        gender:"Male",
        dateOfBirth:"1-1-1111",
        gmail:"thana@gmail.com",
        phoneNumber:"094839243",
        province:"KPT"
      }
      ],
    }
  },

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
  border: 2px solid #64dd17;
}

.text-center {
  background-color: #64dd17;
}

.profile_img {
  border: 3px solid #64dd17;
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
</style>