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
            <h3 class="mb-0">
              <v-icon>mdi-account</v-icon>General Information
            </h3>
          </v-card-title>
          <v-card-text>
            <v-simple-table>
              <tbody>
                <tr>
                  <td>Username</td>
                  <td class="text-right">:</td>
                  <td>Doeur Diet</td>
                </tr>
                <tr>
                  <td>Gender</td>
                  <td class="text-right">:</td>
                  <td>Male</td>
                </tr>
                <tr>
                  <td>DateOfBirth</td>
                  <td class="text-right">:</td>
                  <td>Jan/12/2002</td>
                </tr>
                <tr>
                  <td>Email</td>
                  <td class="text-right">:</td>
                  <td>doeur.diet@gmail.com</td>
                </tr>
                <tr>
                  <td>Phone number</td>
                  <td class="text-right">:</td>
                  <td>08876555</td>
                </tr>
                <tr>
                  <td>Province</td>
                  <td class="text-right">:</td>
                  <td>Siem Reap</td>
                </tr>
              </tbody>
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
import DialogForm from "../../components/student_dashboard/DialogForm.vue";
import SideNavBar from "../../components/student_dashboard/SideNavBar.vue";
export default {
  components: {
    SideNavBar,
    DialogForm,
  },
  data: () => ({}),
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
  background-color: #afc4c7;
  margin-top: 1%;
  padding: 10px;
  font-size: large;
}

.v-card-text {
  margin-top: 16px;
  padding: 30px;
  background-color: #cecaca;
  box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.2);
  border-radius: 10px;
}

.v-card {
  box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);
  margin-bottom: 24px;
  background-color: #b2b4a8;
  padding: 30px;
  border-radius: 4px;
}

body {
  background-color: #e6e6e6;
}

.profile_img {
  border: 5px solid #1ba699;
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

.container {
  background-color: #1ba699;
}
</style>