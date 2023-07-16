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
// import DialogForm from "./DialogForm.vue";
import SideNavBar from "./SchoolLyout/Sidenavbar.vue";
export default {
  components: {
    SideNavBar,
  },
  data: () => ({}),
};
</script>
