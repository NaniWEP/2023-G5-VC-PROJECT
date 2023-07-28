<template>
  <v-container v-if="user !== null" class="container">
    <SideNavBar></SideNavBar>
    <v-row>
      <v-col cols="12" md="12">
        <v-card class="elevation-2">
          <v-card-title class="justify-center">
            <h3>Basic Information</h3>
          </v-card-title>
          <v-simple-table>
            <v-container class="cardColor">
              <v-card-title class="justify-center">
                <v-img
                  v-if="user.picture != null"
                  class="profile_img"
                  :src="user.picture"
                  alt="student dp"
                  width="200"
                  height="200"
                />
                <v-img
                  v-else
                  class="profile_img"
                  src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp"
                  alt="student dp"
                  width="200"
                  height="200"
                />
              </v-card-title>
              <v-row>
                <v-col cols="12" sm="4">
                  <v-file-input
                    bg-color="white"
                    prepend-inner-icon="mdi-file-arrow-left-right-outline"
                    variant="outlined"
                    label="Change you Profile"
                    required
                  ></v-file-input>
                </v-col>
                <v-col cols="12" sm="4">
                  <v-text-field
                    bg-color="white"
                    prepend-inner-icon="mdi-account-check"
                    variant="outlined"
                    label="First name"
                    required
                    v-model="user.first_name"
                  ></v-text-field>
                </v-col>
                <v-col cols="12" sm="4">
                  <v-text-field
                    bg-color="white"
                    prepend-inner-icon="mdi-account-check"
                    variant="outlined"
                    label="Last name"
                    required
                    v-model="user.last_name"
                  ></v-text-field>
                </v-col>
                <v-col cols="12" sm="6">
                  <v-autocomplete
                    bg-color="white"
                    prepend-inner-icon="mdi-gender-male-female"
                    variant="outlined"
                    :items="['Male', 'Female']"
                    label="Gender*"
                    v-model="user.gender"
                  ></v-autocomplete>
                </v-col>
                <v-col cols="12" sm="6">
                  <v-text-field
                    bg-color="white"
                    prepend-inner-icon="mdi-calendar-range"
                    variant="outlined"
                    label="Date of birth*"
                    type="date"
                    required
                    v-model="user.date_of_birth"
                  ></v-text-field>
                </v-col>
                <v-col cols="12" sm="6">
                  <v-text-field
                    bg-color="white"
                    prepend-inner-icon="mdi-email-check-outline"
                    variant="outlined"
                    label="Email*"
                    required
                    v-model="user.email"
                  ></v-text-field>
                </v-col>
                <v-col cols="12" sm="6">
                  <v-autocomplete
                    bg-color="white"
                    prepend-inner-icon="mdi-home-city-outline"
                    variant="outlined"
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
                <v-btn
                  prepend-icon="mdi-content-save-edit"
                  class="saveBtn"
                  variant="outlined"
                  @click="updateUser"
                  >Save Change</v-btn>
              </v-row>
            </v-container>
          </v-simple-table>
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
import SideNavBar from "../SidebarIcon.vue";
import Swal from "sweetalert2";
export default {
  data() {
    return {
      user: {},
      image: "",
    };
  },
  components: {
    SideNavBar,
  },
  methods: {
    getUser() {
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
      console.log(this.user.gender)
      axios
      .put(`/auth/update/`+ this.user.id, this.user)
      .then((response)=>{
        console.log(response.data);
        this.alertFavorite("success", response.data.massage);
      })
      .catch((error)=>{
        console.log(error);
      })
    },
    alertFavorite(icon, message) {
      const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 2000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.addEventListener("mouseenter", Swal.stopTimer);
          toast.addEventListener("mouseleave", Swal.resumeTimer);
        },
      });

      Toast.fire({
        icon: icon,
        title: message,
      });
    },
    onFileChange(event) {
      var file = event.target.files[0].name;
      console.log(event.target.files[0]);
      var form = new FormData();
      form.append("file", file);
      axios.post("auth/profilePicture", form).then((response) => {
        this.image = response.data;
      });
    },
  },
  show() {},
  onMounted() {},
  mounted() {
    this.getUser();
  },
};
</script>

<style scoped>
h2,
p {
  text-align: center;
}

.v-card {
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.15),
    inset 1px 0 0 rgba(255, 255, 255, 0.15);
  padding: 30px;
  border-radius: 5px;
  background-color: #eeee;
}
.profile_img {
  border-radius: 50%;
  margin-left: 40px;
}

.saveBtn {
  background-color: #304ffe;
  color: #ffff;
  padding: 10px;
}

.title {
  color: white;
}

.cardColor {
  background-color: #ffff;
  padding: 5%;
  border-radius: 5px;
}
</style>
