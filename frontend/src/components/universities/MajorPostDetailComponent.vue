
<template>
  <v-container class="container">
    <div class="title">
      <h1>{{ major.title }}</h1>
      <h3>
        <router-link to="/">
          Apply Now
          <v-icon>mdi-fast-forward</v-icon>
        </router-link>
      </h3>
    </div>
    <v-row>
      <v-col cols="12" md="5">
        <v-card class="elevation-2">
          <v-btn class="ma-2" color="red-darken-1" to="/universityPage">
            <v-icon start icon="mdi-arrow-left"></v-icon>
            Back
          </v-btn>

          <v-card-title class="justify-center">
            <h3 class="mb-0">Information about major</h3>
          </v-card-title>
          <v-card-text>
            <v-simple-table>
              <ul>
                <li>
                  <p>Major price :{{ major.price }} $</p>
                </li>
                <li>
                  <p>Apply date :{{ major.apply_date }}</p>
                </li>
                <li>
                  <p>Start date :{{ major.start_date }}</p>
                </li>
                <li>
                  <p>Duration:{{ major.month_duration }} month</p>
                </li>
              </ul>
            </v-simple-table>
          </v-card-text>
        </v-card>
      </v-col>
      <v-col cols="12" md="7">
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
        <v-card class="elevation-2">
          <v-card-title class="justify-center">
            <h3 class="mb-0">Information about university</h3>
          </v-card-title>
          <v-card-text>
            <v-simple-table>
              <ul>
                <li>
                  <p>University :{{ university.name }}</p>
                </li>
                <li>
                  <p>Email :{{ university.email }}</p>
                </li>
                <li>
                  <p>Website :{{ university.website }}</p>
                </li>
                <li>
                  <p>Phone :{{ university.phone }}</p>
                </li>
              </ul>
            </v-simple-table>
          </v-card-text>
        </v-card>
      </v-col>
    </v-row>
  </v-container>
</template>
<script>
import axios from "@/stores/axiosHttp";
export default {
  name: "MajorDetail",
  props: ["id"],
  components: {},
  data() {
    return {
      majorPost: {},
      major: {},
      university: {},
    };
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

.title {
  background-color: #ffff;
  border: 3px solid #3737e5;
  padding: 10px;
  margin-bottom: 10px;
  display: flex;
  justify-content: space-between;
}
.justify-center {
  background-color: #3737e5;
  color: white;
  padding: 10px;
}
p {
  font-size: large;
}
</style>