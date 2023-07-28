<template>
  <v-container class="container">
    <SideNavBar></SideNavBar>
    <v-row>
      <v-col cols="12" md="12">
        <v-card class="elevation-2 card">
          <v-card-title class="justify-center">
            <h3 class="mb-0">Your Favorite</h3>
          </v-card-title>

          <v-tabs
            v-model="tab"
            class="tabBtn mb-8"
            align-tabs="center"
            fixed-tabs
            style="width: 50%"
          >
            <v-tab value="university" class="subBtn">Major</v-tab>
            <v-tab value="workshop" class="subBtn">Workshop</v-tab>
          </v-tabs>

          <v-window v-model="tab">
            <v-window-item
              v-if="favoriteListOfUniversity != null"
              value="university"
            >
              <div
                v-for="universityList in favoriteListOfUniversity"
                :key="universityList"
                class="main-card"
              >
                  <article class="article my-4">
                    <img
                      src="https://www.kgpraigarh.ac.in/images/web_img/workshop1.png"
                      alt=""
                      width="100"
                      height="100"
                    />

                    <div class="article_text_column">
                      <h4>{{ universityList.university.title }}</h4>
                      <p>
                        <span style="font-weight: bold">Date:</span>
                        {{
                          formatDate(universityList.university.major.apply_date)
                        }}
                      </p>
                      <p>
                        <span style="font-weight: bold">Location:</span>
                        {{ universityList.university.major.price }} $
                      </p>
                    </div>
                    <div class="btnAction">
                      <v-btn class="seemoreBtn">See more</v-btn>
                      <v-btn class="unFavoriteBtn" prepend-icon="mdi-heart-broken"
                        >Unfaorite</v-btn
                      >
                    </div>
                  </article>
              </div>
            </v-window-item>
            <v-window-item v-else class="university" value="university">
              <h1>
                <v-icon>mdi-robot-vacuum-alert</v-icon> Didn't find your
                favorite major
              </h1>
            </v-window-item>

            <v-window-item
              v-if="favoriteListOfWorkshop != null"
              value="workshop"
              class="favorite"
            >
              <div
                v-for="workshopList in favoriteListOfWorkshop"
                :key="workshopList"
                class="main-card"
              >
                <article class="article my-4">
                  <img
                    src="https://www.kgpraigarh.ac.in/images/web_img/workshop1.png"
                    alt=""
                    width="100"
                    height="100"
                  />

                  <div class="article_text_column">
                    <h4>{{ workshopList.workshop.name }}</h4>
                    <p>
                      <span style="font-weight: bold">Date:</span>
                      {{ formatDate(workshopList.workshop.date) }}
                    </p>
                    <p>
                      <span style="font-weight: bold">Location:</span>
                      {{ workshopList.workshop.location }}
                    </p>
                  </div>
                  <div class="btnAction">
                    <v-btn class="seemoreBtn">See more</v-btn>
                    <v-btn class="unFavoriteBtn" prepend-icon="mdi-heart-broken"
                      >Unfaorite</v-btn
                    >
                  </div>
                </article>
              </div>
            </v-window-item>
            <v-window-item v-else class="university" value="workshop">
              <h1>
                <v-icon>mdi-robot-vacuum-alert</v-icon> Didn't find your
                favorite Workshop
              </h1>
            </v-window-item>
          </v-window>
        </v-card>
      </v-col>
    </v-row>
  </v-container>
</template>

<script>
import SideNavBar from "../SidebarIcon.vue";
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
.card {
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.15),
    inset 1px 0 0 rgba(255, 255, 255, 0.15);
  padding: 30px;
  border-radius: 5px;
  background-color: #eeee;
}
.article {
  display: flex;
  justify-content: space-around;
  background: #ffff;
  align-items: center;
  height: 120px;
  border-radius: 10px;
}
.article:hover {
  transform: translateY(-5px) scale(1.005) translateZ(0);
  transition: 1000ms;
  box-shadow: 0 24px 36px rgba(0, 0, 0, 0.11),
    0 24px 46px var(--box-shadow-color);
}
.name {
  border-radius: 5px;
}
.subBtn {
  border-radius: 5px;
  outline: 2px solid #000000;
  font-style: bold;
}
.subBtn:active {
  background: #3737e5;
}
.university {
  margin-top: 100px;
  display: flex;
  justify-content: center;
  color: #3737e5;
}

.seemoreBtn {
  color: white;
  background: #3737e5;
  margin: 2px;
}

.unFavoriteBtn {
  color: white;
  background: red;
}
</style>
