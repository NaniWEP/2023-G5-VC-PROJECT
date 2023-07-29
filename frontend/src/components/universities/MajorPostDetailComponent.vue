
<template>
  <section>
    <navbar-component/>
  <v-container id="{{id}}" class="container">
    <div class="title">
      <h1>{{ major.title }}</h1>
      <h3>
        <v-dialog v-model="dialog" persistent width="1080">
          <template v-slot:activator="{ props }">
            <div>
              <v-btn class="actionBtn" v-bind="props" @click="showForm">
                Apply Now
                <v-icon>mdi-fast-forward</v-icon>
              </v-btn>
            </div>
          </template>
          <v-card class="dialong">
            <v-card-title>
              <span class="text-h4">Register for Major</span>
            </v-card-title>
            <v-card-text>
              <v-container class="cardColor">
                <v-row>
                  <v-col cols="12" sm="10" md="4">
                    <v-text-field
                      bg-color="white"
                      prepend-inner-icon="mdi-rename-outline"
                      variant="outlined"
                      label="First name"
                      required
                      hint="Please enter your first name"
                      v-model="firstName"
                    ></v-text-field>
                  </v-col>
                  <v-col cols="12" sm="10" md="4">
                    <v-text-field
                      bg-color="white"
                      prepend-inner-icon="mdi-rename-outline"
                      variant="outlined"
                      label="Last name"
                      required
                      hint="Please enter your last name"
                      v-model="lastName"
                    ></v-text-field>
                  </v-col>
                  <v-col cols="12" sm="6" md="4">
                    <v-select
                      bg-color="white"
                      prepend-inner-icon="mdi-school"
                      variant="outlined"
                      :items="['Do not have', 'High School Diploma']"
                      label="Degree"
                      v-model="degree"
                      required
                    ></v-select>
                  </v-col>
                  <v-col cols="12" sm="6" md="4">
                    <v-select
                      bg-color="white"
                      prepend-inner-icon="mdi-account-check"
                      variant="outlined"
                      :items="['MALE', 'FEMALE']"
                      label="Gender *"
                      v-model="gender"
                      required
                    ></v-select>
                  </v-col>
                  <v-col cols="12" sm="6" md="4">
                    <v-text-field
                      bg-color="white"
                      prepend-inner-icon="mdi-map-marker-radius"
                      variant="outlined"
                      label="Place Of Birth"
                      required
                      hint="Please enter your Place of birth"
                      v-model="originLocation"
                    ></v-text-field>
                  </v-col>
                  <v-col cols="12" sm="6" md="4">
                    <v-text-field
                      bg-color="white"
                      prepend-inner-icon="mdi-map-marker-radius"
                      variant="outlined"
                      label="Current Location"
                      required
                      hint="Please enter your current location"
                      v-model="residenceLocation"
                    ></v-text-field>
                  </v-col>
                  <v-col cols="12" md="6">
                    <v-text-field
                      bg-color="white"
                      prepend-inner-icon="mdi-email-edit-outline"
                      variant="outlined"
                      label="Email*"
                      :rules="emailRules"
                      hint="Please enter your email"
                      v-model="email"
                      required
                    ></v-text-field>
                  </v-col>
                  <v-col cols="12" md="6">
                    <v-text-field
                      bg-color="white"
                      prepend-inner-icon="mdi-phone-dial-outline"
                      variant="outlined"
                      label="Phone number *"
                      hint="Please enter your phone number"
                      v-model="phoneNumber"
                      required
                    ></v-text-field>
                  </v-col>
                </v-row>
              </v-container>
              <small>*You need to complete all information.</small>
            </v-card-text>
            <v-card-actions>
              <v-spacer></v-spacer>
              <v-btn
                class="actionBtn"
                prepend-icon="mdi-close-box-outline"
                variant="outlined"
                @click="dialog = false"
              >
                Close
              </v-btn>
              <v-btn
                class="actionBtn"
                prepend-icon="mdi-fast-forward"
                variant="outlined"
                @click="registerWorkshop"
              >
                register
              </v-btn>
            </v-card-actions>
          </v-card>
        </v-dialog>
      </h3>
    </div>
    <v-row>
      <v-col cols="12" md="5">
        <v-card class="elevation-2 card">
          <v-card-title class="justify-center">
            <h3 class="mb-0">Information about major</h3>
          </v-card-title>
          <v-card-text>
            <v-simple-table>
              <tbody>
                  <tr>
                    <td class="bold">
                      <v-icon>mdi-currency-usd</v-icon> Price
                    </td>
                    <td class="text-right">:</td>
                    <td>{{ major.price }}$ /per year</td>
                  </tr>
                  <tr>
                    <td class="bold">
                      <v-icon>mdi-calendar-range</v-icon> Start apply
                    </td>
                    <td class="text-right">:</td>
                    <td>{{ formatDate(major.apply_date) }}</td>
                  </tr>
                  <tr>
                    <td class="bold">
                      <v-icon>mdi-calendar-range</v-icon> Date start sesion
                    </td>
                    <td class="text-right">:</td>
                    <td>{{ formatDate(major.start_date) }}</td>
                  </tr>
                  <tr>
                    <td class="bold">
                      <v-icon>mdi-playlist-star</v-icon> Duration
                    </td>
                    <td class="text-right">:</td>
                    <td>{{ major.year_duration +"years / " + major.month_duration +" month"}}</td>
                  </tr>
                </tbody>
            </v-simple-table>
          </v-card-text>
        </v-card>
      </v-col>
      <v-col cols="12" md="7">
        <v-card class="elevation-2 card">
          <v-card-title class="justify-center">
            <h3 class="mb-0">Information about university</h3>
          </v-card-title>
          <v-card-text>
            <v-simple-table>
              <tbody>
                  <tr>
                    <td class="bold">
                      <v-icon>mdi-city-variant-outline</v-icon> University
                    </td>
                    <td class="text-right">:</td>
                    <td>{{ university.name }}</td>
                  </tr>
                  <tr>
                    <td class="bold">
                      <v-icon>mdi-email-arrow-left-outline</v-icon> Contact email
                    </td>
                    <td class="text-right">:</td>
                    <td>{{ university.email }}</td>
                  </tr>
                  <tr>
                    <td class="bold">
                      <v-icon>mdi-phone-check-outline</v-icon> Contact phone
                    </td>
                    <td class="text-right">:</td>
                    <td>{{ university.phone }}</td>
                  </tr>
                  <tr>
                    <td class="bold">
                      <v-icon>mdi-web-box</v-icon> Website
                    </td>
                    <td class="text-right">:</td>
                    <td>{{ university.website }}</td>
                  </tr>
                </tbody>
            </v-simple-table>
          </v-card-text>
        </v-card>
      </v-col>
      <v-col cols="12" md="12">
        <v-card class="elevation-2">
          <v-card-title class="justify-center">
            <h3 class="mb-0">Announcement Description</h3>
          </v-card-title>
          <v-card-text>
            <v-simple-table>
              <p>{{ major.description }}</p>
            </v-simple-table>
          </v-card-text>
        </v-card>
      </v-col>
    </v-row>
  </v-container>
  <footer-component/>
</section>
</template>
<script>
import axios from "@/stores/axiosHttp";
import dayjs from "dayjs";
import Swal from "sweetalert2";
import NavbarComponent from "../layouts/NavbarComponent.vue";
import FooterComponent from "../layouts/FooterComponent.vue";
export default {
  name: "MajorDetail",
  props: ["id"],
  components: {
    NavbarComponent,
    FooterComponent
  },
  data() {
    return {
      majorPost: {},
      major: {},
      university: {},
      firstName: "",
      lastName: "",
      email: "",
      phoneNumber: "",
      degree: "",
      gender: "",
      originLocation: "",
      residenceLocation: "",
      dialog: false,
      emailRules: [
        (v) =>
          /^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+$/.test(v) ||
          "E-mail must be valid",
      ],
    };
  },
  methods: {
    formatDate(dateString) {
      const date = dayjs(dateString);
      // Then specify how you want your dates to be formatted
      return date.format("dddd D/ MMMM/ YYYY");
    },
    async registerWorkshop() {
      try {
        if (
          this.email !== "" &&
          this.phoneNumber !== "" &&
          this.gender !== "" &&
          this.firstName !== "" &&
          this.lastName !== "" &&
          this.originLocation !== "" &&
          this.residenceLocation !== "" &&
          this.degree !== ""
        ) {
          if (this.degree === "Do not have") {
            this.degree = false;
          } else {
            this.degree = true;
          }
          await axios
            .post("/auth/universityApplication", {
              first_name: this.firstName,
              last_name: this.lastName,
              email: this.email,
              phone_number: this.phoneNumber,
              gender: this.gender,
              university_post_id: this.id,
              origin_location: this.originLocation,
              residence_location: this.residenceLocation,
              degree: this.degree,
            })
            .then((response) => {
              this.dialog = false;
              this.alertFavorite("success", response.data.message);
              console.log(response.data);
            })
            .catch((error) => {
              console.log(error.response.data.message);
              this.alertFavorite("info", error.response.data.message);
            });
        } else {
          this.alertFavorite("info", "You need to complete all filde");
        }
      } catch (error) {
        console.log(error);
      }
      this.email = "";
      this.phoneNumber = "";
      this.gender = "";
      this.firstName = "";
      this.lastName = "";
      this.originLocation = "";
      this.residenceLocation = "";
      this.degree = "";
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
    showForm() {
      this.dialog = true;
    },
  },
  mounted() {
    axios
      .get(`/university/majorPostDetail/${this.id}`)
      .then((response) => {
        console.log(response);
        this.majorPost = response.data.data;
        this.major = this.majorPost.major;
        this.university = this.major.university;
        console.log(this.university);
      })
      .catch((error) => {
        console.log(error);
      });
  },
};
</script>

<style scoped>
.v-card-text {
  box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.2);
  border-radius: 10px;
}

.card {
  box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);
  margin-bottom: 24px;
  background-color: #ffff;
  border-radius: 5px;
  width: 100%;
}
th,
td {
  padding: 9px;
  text-align: left;
  width: 1%;
}
.title {
  background-color: #3737e5;
  padding: 10px;
  margin-bottom: 10px;
  display: flex;
  justify-content: space-between;
  color: #ffff;
}
.justify-center {
  background-color: #3737e5;
  color: white;
  padding: 10px;
}
p {
  text-align: center;
  margin-top : 10px
}
.bold{
  font-weight: bold;
}
.dialong{
  padding: 20px;
}

.actionBtn{
  background: #ffff;
  color: #3737e5;
}
</style>