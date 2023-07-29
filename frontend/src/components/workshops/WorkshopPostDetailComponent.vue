<template>
  <section>
    <NavbarComponent />
    <v-container id="{{id}}" class="container">
      <v-row>
        <v-col cols="12" md="12">
          <v-card class="elevation-2 card">
            <h1 class="mb-4">
              <v-icon>mdi-information-outline</v-icon>General Information
              AboutWorkshop
            </h1>
            <v-card-title class="justify-center">
              <v-img
                :src="workshopPost.images"
                alt="student dp"
                width="100%"
                height="500px"
              />
              <h4 class="title text-center">{{ workshopPost.name }}</h4>
            </v-card-title>
            <v-card-title class="justify-center"> </v-card-title>
            <v-card-text>
              <v-simple-table>
                <tbody>
                  <tr>
                    <td class="bold">
                      <v-icon>mdi-alpha-m-circle-outline</v-icon> Workshop Title
                    </td>
                    <td class="text-right">:</td>
                    <td>{{ workshopPost.name }}</td>
                  </tr>
                  <tr>
                    <td class="bold">
                      <v-icon>mdi-calendar-range</v-icon> Start date
                    </td>
                    <td class="text-right">:</td>
                    <td>{{ formatDate(workshopPost.date) }}</td>
                  </tr>
                  <tr>
                    <td class="bold">
                      <v-icon>mdi-clipboard-text-clock</v-icon> Time start
                    </td>
                    <td class="text-right">:</td>
                    <td>{{ workshopPost.time }}</td>
                  </tr>
                  <tr>
                    <td class="bold">
                      <v-icon>mdi-account-group</v-icon> Organizer
                    </td>
                    <td class="text-right">:</td>
                    <td>{{ workshopPost.organizer }}</td>
                  </tr>
                  <tr>
                    <td class="bold">
                      <v-icon>mdi-map-marker-outline</v-icon> Location
                    </td>
                    <td class="text-right">:</td>
                    <td>{{ workshopPost.location }}</td>
                  </tr>
                  <tr>
                    <td class="bold">
                      <v-icon>mdi-information-variant-circle-outline</v-icon>
                      Contact By
                    </td>
                    <td class="text-right">:</td>
                    <td>{{ workshopPost.contact }}</td>
                  </tr>
                </tbody>
              </v-simple-table>
            </v-card-text>
            <v-row justify="end">
              <v-dialog v-model="dialog" persistent width="1080">
                <template v-slot:activator="{ props }">
                  <v-btn
                    class="actionBtn"
                    style="margin-right: 20px"
                    v-bind="props"
                    prepend-icon="mdi-ticket"
                  >
                    register
                  </v-btn>
                </template>
                <v-card class="dialong" style="border-top: 40px solid #3737e5">
                  <v-card-title>
                    <span class="text-h4">Register for workshop</span>
                  </v-card-title>
                  <v-card-text>
                    <v-container class="cardColor">
                      <v-row>
                        <v-col cols="12" sm="10" md="6">
                          <v-text-field
                            bg-color="white"
                            prepend-inner-icon="mdi-rename-outline"
                            variant="outlined"
                            label="First name"
                            required
                            v-model="firstName"
                          ></v-text-field>
                        </v-col>
                        <v-col cols="12" sm="10" md="6">
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
                        <v-col cols="12">
                          <v-text-field
                            bg-color="white"
                            prepend-inner-icon="mdi-email-edit-outline"
                            variant="outlined"
                            label="Email*"
                            hint="Please enter your email"
                            v-model="email"
                            required
                          ></v-text-field>
                        </v-col>
                        <v-col cols="12">
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
                        <v-col cols="12" sm="6">
                          <v-select
                            bg-color="white"
                            prepend-inner-icon="mdi-alien-outline"
                            variant="outlined"
                            :items="['0-17', '18-29', '30-54', '54+']"
                            label="Age *"
                            v-model="age"
                            required
                          ></v-select>
                        </v-col>
                        <v-col cols="12" sm="6">
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
                      prepend-icon="mdi-ticket-confirmation"
                      variant="outlined"
                      @click="registerWorkshop"
                    >
                      register
                    </v-btn>
                  </v-card-actions>
                </v-card>
              </v-dialog>
            </v-row>
          </v-card>
        </v-col>
      </v-row>
    </v-container>
    <FooterComponent />
  </section>
</template>
<script>
import axios from "@/stores/axiosHttp";
import dayjs from "dayjs";
import Swal from "sweetalert2";
import NavbarComponent from "../layouts/NavbarComponent.vue";
import FooterComponent from "../layouts/FooterComponent.vue";
export default {
  name: "UniversityDetail",
  data() {
    return {
      workshopPost: {},
      dialog: false,
      firstName: "",
      lastName: "",
      email: "",
      phoneNumber: "",
      age: "",
      gender: "",
    };
  },
  props: ["id"],
  components: {
    NavbarComponent,
    FooterComponent,
  },
  methods: {
    formatDate(dateString) {
      const date = dayjs(dateString);
      // Then specify how you want your dates to be formatted
      return date.format("D dddd, MMMM, YYYY");
    },
    async registerWorkshop() {
      try {
        if (
          this.email !== "" &&
          this.phoneNumber !== "" &&
          this.gender !== ""
        ) {
          await axios
            .post("/auth/registerWorkshop", {
              name: this.firstName + this.lastName,
              email: this.email,
              phone_number: this.phoneNumber,
              age: this.age,
              gender: this.gender,
              workshop_id: this.workshopPost.id,
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
        }else{
          this.alertFavorite("info", 'You need to complete all filde');
        }
      } catch (error) {
        console.log(error);
      }
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
    axios
      .get(`/workshop/workshopDetail/${this.id}`)
      .then((response) => {
        this.workshopPost = response.data.data;
        console.log(this.workshopPost);
      })
      .catch((error) => {
        console.log(error);
      });
  },
};
</script>

<style scoped>
.title {
  background-color: #3737e5;
  color: #ffff;
  margin-top: 1%;
  padding: 10px;
  border-radius: 5px;
}

.card {
  box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);
  margin-bottom: 24px;
  background-color: #ffff;
  padding: 30px;
  border-radius: 5px;
  height: 100%;
}

td {
  padding: 9px;
  text-align: left;
}
.bold {
  font-size: 15px;
  padding-right: 100px;
  font-weight: bold;
}
.dialong {
  box-shadow: 0px 2px 4px rgba(52, 7, 255, 0.2);
  margin-bottom: 24px;
  background-color: #ffff;
  padding-left: 40px;
  padding-right: 40px;
  padding-bottom: 20px;
  border-radius: 5px;
}
.actionBtn {
  background-color: #3737e5;
  color: #fff;
  transition: 800ms;
  outline: 1px solid #3737e5;
}
.cardColor{
  background-color: #ffff;
}
</style>
