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
              width="200"
              height="180"
            />
            <h3 class="text-center name">{{ user.first_name + user.last_name }}</h3>
          </v-card-title>
        </v-card>
      </v-col>
      <v-col cols="12" md="8">
        <v-card class="elevation-2">
          <v-card-title class="justify-center">
            <h3 class="mb-0"><v-icon>mdi-heart</v-icon>My favorite</h3>
          </v-card-title>

          <v-tabs v-model="tab" class="bg-white d-flex justify-space-between">
            <v-tab value="university">Major</v-tab>
            <v-tab value="workshop">Workshop</v-tab>
          </v-tabs>

          <v-window v-model="tab">
            <v-window-item v-if="favoriteListOfUniversity != null" value="university">
              <div class="title">
                <h3>University</h3>
              </div>

              <div
                v-for="universityList in favoriteListOfUniversity"
                :key="universityList"
                class="main-card"
              >
                <article class="article">
                  <!-- <img :src="slide.img" alt="Slide Image" /> -->
                  <img
                    src="https://img.freepik.com/free-photo/harvard-university-cambridge-usa_1268-14363.jpg"
                    alt=""
                  />
                  <div class="article_text_column">
                    <h2>{{ universityList.university.title }}</h2>
                    <p>{{ universityList.university.description }}</p>
                    <p>
                      <span style="font-weight: bold"
                        >Major:
                        {{ universityList.university.major.title }}
                      </span>
                    </p>
                    <p>
                      <span style="font-weight: bold">Apply date:</span>
                      {{ formatDate(universityList.university.major.apply_date) }}
                    </p>
                    <p>
                      <span style="font-weight: bold">Sart date study:</span>
                      {{ formatDate(universityList.university.major.start_date) }}
                    </p>
                    <p>
                      <span style="font-weight: bold">Duration:</span>
                      {{ universityList.university.major.month_duration }} month
                    </p>
                    <p>
                      <span style="font-weight: bold">$Price:</span>
                      {{ universityList.university.major.price }} $
                    </p>
                  </div>
                </article>
              </div>
            </v-window-item>
            <v-window-item v-else value="university">
              <h3>You don't have add university</h3>
            </v-window-item>

            <v-window-item v-if="favoriteListOfWorkshop != null" value="workshop" class="favorite">
              <div class="title">
                <h3>Workshop</h3>
              </div>
              <div
                v-for="workshopList in favoriteListOfWorkshop"
                :key="workshopList"
                class="main-card"
              >
                <article class="article">
                  <!-- <img :src="slide.img" alt="Slide Image" /> -->

                  <img
                    src="https://www.kgpraigarh.ac.in/images/web_img/workshop1.png"
                    alt=""
                  />

                  <div class="article_text_column">
                    <h2>{{ workshopList.workshop.name }}</h2>
                    <p>{{ workshopList.workshop.description }}</p>
                    <p>
                      <span style="font-weight: bold">Date:</span>
                      {{ formatDate(workshopList.workshop.date) }}
                    </p>
                    <p>
                      <span style="font-weight: bold">Time:</span>
                      {{ workshopList.workshop.time }}
                    </p>
                    <p>
                      <span style="font-weight: bold">Location:</span>
                      {{ workshopList.workshop.location }}
                    </p>
                    <p>
                      <span style="font-weight: bold">Organizer:</span>
                      {{ workshopList.workshop.organizer }}
                    </p>
                    <p>
                      <span style="font-weight: bold">Contact: </span>
                      {{ workshopList.workshop.contact }}
                    </p>
                  </div>
                </article>
              </div>
            </v-window-item>
            <v-window-item v-else value="workshop">
              <h3>You don't have add university</h3>
            </v-window-item>
          </v-window>
        </v-card>
        <v-card class="elevation-2 mt-4">
          <v-card-title class="justify-center">
            <h3 class="mb-0">
              <v-icon>mdi-information</v-icon>Other Information
            </h3>
          </v-card-title>
          <v-card-text>
            <p>
              Knowledge sharpens our skills like reasoning and problem-solving.
              A strong base of knowledge helps brains function more smoothly and
              effectively. We become smarter with the power of knowledge and
              solve problems more easily. * Everyday Life- Knowledge is
              important and useful in day to day events.
            </p>
          </v-card-text>
        </v-card>
      </v-col>
    </v-row>
  </v-container>
</template>

<script>
import SideNavBar from "../studentLayouts/SideNavBar.vue";
import axios from "@/stores/axiosHttp";
import dayjs from "dayjs";
export default {
  components: {
    SideNavBar,
  },
  data() {
    return {
      tab: null,
      favoriteListOfWorkshop: null,
      favoriteListOfUniversity: null,
      user: {},
    };
  },
  created() {
    this.getFavoriteUniversity();
    this.getFavoriteWorkshop();
  },
  mounted() {
    this.getUser();
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
    getFavoriteWorkshop() {
      axios
        .get("auth/workshop/getListOfFavrite")
        .then((response) => {
          this.favoriteListOfWorkshop = response.data.data;
        })
        .catch((error) => {
          console.log(error.message);
        });
    },
    formatDate(dateString) {
      const date = dayjs(dateString);
      // Then specify how you want your dates to be formatted
      return date.format("D dddd, MMMM, YYYY");
    },
    getFavoriteUniversity() {
      axios
        .get("auth/university/getListOfFavrite")
        .then((response) => {
          this.favoriteListOfUniversity = response.data.data;
          console.log(this.favoriteListOfUniversity);
        })
        .catch((error) => {
          console.log(error.message);
        });
    },
  },
};
</script>

<style scoped>
.profile {
  display: flex;
  justify-content: center;
  margin-top: 3%;
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
  background-color: #cdd3cd;
  box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.2);
  border-radius: 10px;
}

.v-card {
  box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);
  margin-bottom: 24px;
  border: 2px solid #3737e5;
  padding: 30px;
  border-radius: 4px;
}

.profile_img {
  border: 3px solid #3737e5;
  border-radius: 50%;
  padding: 24px;
}

.text-right {
  text-align: right;
}

.article img {
  width: 45%;
  height: 30%;
}
.article {
  display: flex;
}

.article_text_column {
  padding: 9px;
}
.title {
  margin-right: 50%;
  text-align: center;
  margin-top: 2%;
  color: white;
  border-radius: 5px;
}

.main-card {
  background-color: #cdd3cd;
  border:solid 1px #3737e5;
  margin: 9px;
  padding: 10px;
  border-radius: 3px;
  box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.2);
}
.title,
.text-center {
  background-color: #3737e5;
  color: white;
  border-radius: 3px;
}

.name{
  border-radius: 5px;
}

</style>