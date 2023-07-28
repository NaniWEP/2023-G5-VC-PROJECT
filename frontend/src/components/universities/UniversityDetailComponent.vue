
<template>
  <section>
    <navbar-component />
    <v-container id="{{id}}" class="container">
      <v-row>
        <v-col cols="12" md="12">
          <v-card-title>
            <v-img
              class="profile_img"
              :src="university.image" alt="university Image"
              width="100%"
              height="500"
              cover
            />
          </v-card-title>
        </v-col>
        <v-col cols="12" md="12">
          <v-card class="elevation-2 card">
            <v-card-title class="justify-center">
              <h3 class="mb-0">
                <v-icon>mdi-account</v-icon>General Information About University
              </h3>
            </v-card-title>
            <v-card-text>
              <v-simple-table>
                <tbody>
                  <tr>
                    <td class="bold">
                      <v-icon>mdi-home-city-outline</v-icon> University's name
                    </td>
                    <td class="text-right">:</td>
                    <td>{{ university.name }}</td>
                  </tr>
                  <tr>
                    <td class="bold">
                      <v-icon>mdi-email-check-outline</v-icon> Contact By Email
                    </td>
                    <td class="text-right">:</td>
                    <td>{{ university.email }}</td>
                  </tr>
                  <tr>
                    <td class="bold">
                      <v-icon>mdi-phone-check-outline</v-icon> Phone Number
                    </td>
                    <td class="text-right">:</td>
                    <td>{{ university.phone }}</td>
                  </tr>
                  <tr>
                    <td class="bold">
                      <v-icon>mdi-home-city-outline</v-icon> Province/City
                    </td>
                    <td class="text-right">:</td>
                    <td>{{ university.province }}</td>
                  </tr>
                  <tr>
                    <td class="bold">
                      <v-icon>mdi-map-marker-radius</v-icon> Location
                    </td>
                    <td class="text-right">:</td>
                    <td>{{ university.location }}</td>
                  </tr>
                  <tr>
                    <td class="bold"><v-icon>mdi-web-box</v-icon> Website</td>
                    <td class="text-right">:</td>
                    <td>{{ university.website }}</td>
                  </tr>
                </tbody>
              </v-simple-table>
            </v-card-text>
          </v-card>
          <v-card class="elevation-2 mt-4 card">
            <v-card-title class="justify-center">
              <h3 class="mb-0">
                <v-icon>mdi-information</v-icon>Other Information
              </h3>
            </v-card-title>
            <v-card-text>
              <p>
                {{ university.description }}
              </p>
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
import NavbarComponent from "../layouts/NavbarComponent.vue";
import FooterComponent from "../layouts/FooterComponent.vue";
export default {
  name: "UniversityDetail",
  data() {
    return {
      university: {},
    };
  },
  props: ["id"],
  components: {
    NavbarComponent,
    FooterComponent
  },
  mounted() {
    axios
      .get(`/university/university/${this.id}`)
      .then((response) => {
        this.university = response.data.data;
        console.log(response.data.data);
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
  padding: 30px;
  border-radius: 4px;
}

th,
td {
  padding: 9px;
  text-align: left;
  width: 1%;
}
.text-right {
  text-align: right;
}

.justify-center {
  background-color: #3737e5;
  color: white;
  padding: 10px;
  border-radius: 5px;
}
.bold {
  font-weight: bold;
}
</style>