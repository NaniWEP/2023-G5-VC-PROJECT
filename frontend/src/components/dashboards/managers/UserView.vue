<template>
  <section>
    <DashboardComponent></DashboardComponent>
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
                  v-if="image != null"
                  class="profile_img"
                  :src="image"
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
                <v-col cols="12" sm="4" d-flex>
                  <v-file-input
                    bg-color="white"
                    prepend-inner-icon="mdi-file-arrow-left-right-outline"
                    variant="outlined"
                    label="Change you Profile"
                    required
                    :hint="uploading"
                    @change="uploadImage"
                  >
                  </v-file-input>
                </v-col>
                <v-col cols="12" sm="4">
                  <v-text-field
                    bg-color="white"
                    prepend-inner-icon="mdi-account-check"
                    variant="outlined"
                    label="First name"
                    required
                    v-model="firstName"
                  ></v-text-field>
                </v-col>
                <v-col cols="12" sm="4">
                  <v-text-field
                    bg-color="white"
                    prepend-inner-icon="mdi-account-check"
                    variant="outlined"
                    label="Last name"
                    required
                    v-model="lastName"
                  ></v-text-field>
                </v-col>
                <v-col cols="12" sm="6">
                  <v-autocomplete
                    bg-color="white"
                    prepend-inner-icon="mdi-gender-male-female"
                    variant="outlined"
                    :items="['Male', 'Female']"
                    label="Gender*"
                    v-model="gender"
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
                    v-model="dateOfBirth"
                  ></v-text-field>
                </v-col>
                <v-col cols="12" sm="6">
                  <v-text-field
                    bg-color="white"
                    prepend-inner-icon="mdi-email-check-outline"
                    variant="outlined"
                    label="Email*"
                    required
                    v-model="email"
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
                    v-model="province"
                  ></v-autocomplete>
                </v-col>
                <v-btn
                  prepend-icon="mdi-content-save-edit"
                  class="saveBtn"
                  variant="outlined"
                  @click="updateUser"
                  >Save Change
                  </v-btn
                >
              </v-row>
            </v-container>
          </v-simple-table>
        </v-card>
      </v-col>
    </v-row>
  </section>
</template>
<script>
import axios from "@/stores/axiosHttp";
import Swal from "sweetalert2";
import DashboardComponent from "./DashboardView.vue"
import { storage } from "@/firebase.js";
import {
  uploadBytesResumable,
  getDownloadURL,
  ref as storageReference,
} from "firebase/storage";
import { ref } from "vue";
export default {
  name: "UniversityDetail",
  setup() {
    const uploadImageFile = ref(null);
    const downloadImageFile = ref(null);
    const randomText = ref(null);
    const downloading = ref(false)


    async function uploadImage(event) {
      randomText.value =  Math.random().toString(36).slice(2)
      let fileImage = event.target.files[0];
      const storageRef = storageReference(storage, `images/${randomText.value}-${fileImage.name}`);
      const uploadFile = uploadBytesResumable(storageRef, fileImage);
      uploadFile.on(
        "state_changed",
        (snapshot) => {
          const progress =
            (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
          console.log(`Upload is ${progress}% done`);
        },
        (error) => {
          console.log(error);
        },
        async () => {
          uploadImageFile.value = uploadFile;
          const url = await getDownloadURL(storageRef);
          downloadImageFile.value = url;
          downloading.value = true;

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
        icon: "success",
        title: "Upload image successful",
      });
        }
      );
    }
    return {
    uploadImage,
    downloadImageFile,
    downloading,
    }
  },
  data(){
    return{
      user: null,
      firstName : null,
      image : null,
      lastName: null,
      gender: null,
      dateOfBirth: null,
      email: null,
      province: null,
    }
  },
  components: {
    DashboardComponent
  },
  methods:{
    async getUser() {
      await axios
        .get(`/auth/getUser`)
        .then((response) => {
          console.log(response.data.data);
          this.user = response.data.data;
          this.image = this.user.profile_image;
          this.firstName = this.user.first_name;
          this.lastName = this.user.last_name;
          this.gender = this.user.gender;
          this.dateOfBirth = this.user.date_of_birth;
          this.email = this.user.email;
          this.province = this.user.province;
        })
        .catch((error) => {
          console.log(error);
        });
    },
    updateUser() {
      this.user.picture = this.downloadImageFile
      axios
        .put(`/auth/update/` + this.user.id, this.user)
        .then((response) => {
          console.log(response.data);
          this.user = response.data.data;
          this.image = this.user.profile_image;
          this.firstName = this.user.first_name;
          this.lastName = this.user.last_name;
          this.gender = this.user.gender;
          this.dateOfBirth = this.user.date_of_birth;
          this.email = this.user.email;
          this.province = this.user.province;
          this.alertFavorite("success", response.data.massage);
        })
        .catch((error) => {
          console.log(error);
        });
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
  },
  mounted() {
    this.getUser();
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
  background-color: #d8d8d8;
  padding: 30px;
  border-radius: 4px;
}
.profile_img {
  border: 5px solid #3737e5;
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