
<template>
  <v-container id="{{id}}" class="container">
    <v-row>
      <v-col cols="12" md="5">
        <v-card class="elevation-2">
          <v-btn class="ma-2" color="red-darken-1" to="/universityPage">
            <v-icon start icon="mdi-arrow-left"></v-icon>
            Back
          </v-btn>
          <v-card-title>
            <v-img
              class="profile_img"
              src="https://images.unsplash.com/photo-1562774053-701939374585?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8Y29sbGVnZSUyMGNhbXB1c3xlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80"
              alt="student dp"
            />
            <h4 class="text-center">{{university.name}}</h4>
          </v-card-title>
        </v-card>
      </v-col>
      <v-col cols="12" md="7">
        <v-card class="elevation-2">
          <v-card-title class="justify-center">
            <h3 class="mb-0">
              <v-icon>mdi-account</v-icon>General Information About University
            </h3>
          </v-card-title>
          <v-card-text>
            <v-simple-table>
              <tbody>
                <tr>
                  <td>Username</td>
                  <td class="text-right">:</td>
                  <td>{{university.name}}</td>
                </tr>
                <tr>
                  <td>Contact By Email</td>
                  <td class="text-right">:</td>
                  <td>{{university.email}}</td>
                </tr>
                <tr>
                  <td>Phone Number</td>
                  <td class="text-right">:</td>
                  <td>{{university.phone}}</td>
                </tr>
                <tr>
                  <td>Province/City</td>
                  <td class="text-right">:</td>
                  <td>{{university.province}}</td>
                </tr>
                <tr>
                  <td>Location</td>
                  <td class="text-right">:</td>
                  <td>{{university.location}}</td>
                </tr>
                <tr>
                  <td>Website</td>
                  <td class="text-right">:</td>
                  <td>{{university.website}}</td>
                </tr>
              </tbody>
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
              {{university.description}}
            </p>
          </v-card-text>
        </v-card>
      </v-col>
    </v-row>
  </v-container>
</template>
<script>
import axios from "@/stores/axiosHttp";
export default {
  name: "UniversityDetail",
  data(){
    return{
      university: {}
    }
  },
  props: ["id"],
  components: {
  },
  mounted(){
    axios
    .get(`/university/university/${this.id}`)
    .then(response => {
      this.university = response.data.data;
        console.log(response.data.data)
    })
    .catch(error => {
      console.log(error);
    });
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
.text-center {
  background-color: #3737e5;
  color: #ffff;
  margin-top: 1%;
  padding: 10px;
}

.v-card-text {
  margin-top: 16px;
  padding: 30px;
  background-color: #ffff;
  box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.2);
  border-radius: 10px;
}

.v-card {
  box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);
  margin-bottom: 24px;
  background-color: #ffff;
   border: 2px solid #3737e5;
  padding: 30px;
  border-radius: 4px;
}
.profile_img {
  border-radius: 2%;
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

.justify-center {
  background-color: #3737e5;
  color: white;
  padding: 10px;
}
</style>