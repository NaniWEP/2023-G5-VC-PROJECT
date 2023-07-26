<template>
  <v-container id="{{id}}" class="container">
    <v-row>
      <v-col cols="12" md="5">
        <v-card class="elevation-2 card">
          <v-btn class="ma-2" color="red-darken-1" to="/universityPage">
            <v-icon start icon="mdi-arrow-left"></v-icon>
            Back
          </v-btn>

          <v-card-title class="justify-center">
            <v-img
              class="profile_img card"
              src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp"
              alt="student dp"
            />
            <h4 class="text-center">{{ workshopPost.name }}</h4>
          </v-card-title>
        </v-card>
      </v-col>
      <v-col cols="12" md="7">
        <v-card class="elevation-2 card">
          <v-card-title class="justify-center">
            <h3 class="mb-0">
              <v-icon>mdi-information</v-icon>General Information About Workshop
            </h3>
          </v-card-title>
          <v-card-text>
            <v-simple-table>
              <tbody>
                <tr>
                  <td>Title</td>
                  <td class="text-right">:</td>
                  <td>{{ workshopPost.name }}</td>
                </tr>
                <tr>
                  <td>Date</td>
                  <td class="text-right">:</td>
                  <td>{{ formatDate(workshopPost.date) }}</td>
                </tr>
                <tr>
                  <td>Time start</td>
                  <td class="text-right">:</td>
                  <td>{{ workshopPost.time }}</td>
                </tr>
                <tr>
                  <td>Organizer</td>
                  <td class="text-right">:</td>
                  <td>{{ workshopPost.organizer }}</td>
                </tr>
                <tr>
                  <td>Location</td>
                  <td class="text-right">:</td>
                  <td>{{ workshopPost.location }}</td>
                </tr>
                <tr>
                  <td>More information</td>
                  <td class="text-right">:</td>
                  <td>{{ workshopPost.contact }}</td>
                </tr>
              </tbody>
            </v-simple-table>
          </v-card-text>
        </v-card>
        <v-row justify="end">
          <v-dialog v-model="dialog" persistent width="1080">
            <template v-slot:activator="{ props }">
              <v-btn class="actionBtn" style="border:2px solid #3737e5" v-bind="props" prepend-icon="mdi-ticket"> register </v-btn>
            </template>
            <v-card class="dialong" style="border-top:20px solid #3737e5">
              <v-card-title>
                <span class="text-h5">Register for workshop</span>
              </v-card-title>
              <v-card-text>
                <v-container>
                  <v-row>
                    <v-col cols="12" sm="10" md="6">
                      <v-text-field
                        label="First Name *"
                        hint="Please enter your first name"
                        required
                      ></v-text-field>
                    </v-col>
                    <v-col cols="12" sm="10" md="6">
                      <v-text-field
                        label="Last Name *"
                        hint="Please enter your last name"
                      ></v-text-field>
                    </v-col>
                    <v-col cols="12">
                      <v-text-field 
                      label="Email*" 
                      hint="Please enter your email"
                      required></v-text-field>
                    </v-col>
                    <v-col cols="12">
                      <v-text-field
                      label="Phone number *"
                      hint="Please enter your phone number"
                      required
                      ></v-text-field>
                    </v-col>
                    <v-col cols="12" sm="6">
                      <v-select
                        :items="['0-17', '18-29', '30-54', '54+']"
                        label="Age *"
                        required
                      ></v-select>
                    </v-col>
                    <v-col cols="12" sm="6">
                      <v-select
                        :items="['MALE', 'FEMALE']"
                        label="Gender *"
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
                  @click="dialog = false"
                >
                  register
                </v-btn>
              </v-card-actions>
            </v-card>
          </v-dialog>
        </v-row>
      </v-col>
    </v-row>
  </v-container>
</template>
<script>
import axios from "@/stores/axiosHttp";
import dayjs from "dayjs";
export default {
  name: "UniversityDetail",
  data() {
    return {
      workshopPost: {},
      dialog: false,
    };
  },
  props: ["id"],
  components: {},
  methods: {
    formatDate(dateString) {
      const date = dayjs(dateString);
      // Then specify how you want your dates to be formatted
      return date.format("D dddd, MMMM, YYYY");
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

.card {
  box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);
  margin-bottom: 24px;
  background-color: #ffff;
  border: 2px solid #3737e5;
  padding: 30px;
  border-radius: 5px;
}
.profile_img {
  border: 1px solid #3737e5;
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

.dialong{
  box-shadow: 0px 2px 4px rgba(52, 7, 255, 0.2);
  margin-bottom: 24px;
  background-color: #ffff;
  padding-left: 40px;
  padding-right: 40px;
  padding-bottom: 20px;
  border-radius: 5px;
}

.actionBtn:hover {
  background-color: #3737e5;
  color: #fff;
  transition: 800ms;
  outline: 1px solid #3737e5;
}
.actionBtn {
  padding: 0 20px;
  color: #3737e5;
}
</style>
