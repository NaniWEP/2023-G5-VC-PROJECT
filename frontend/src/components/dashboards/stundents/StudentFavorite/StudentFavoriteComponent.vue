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
              width="200"
              height="180"
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
            <h3 class="mb-0"><v-icon>mdi-heart</v-icon>My favorite</h3>
          </v-card-title>

          <v-tabs v-model="tab" class="bg-white">
            <v-tab value="university">University</v-tab>
            <v-tab value="major">Major</v-tab>
            <v-tab value="workshop">Workshop</v-tab>
          </v-tabs>

          <v-window v-model="tab">
            <v-window-item value="university">
              <div class="title">
                <h3>University</h3>
              </div>

              <div v-for="slide in slides" :key="slide" class="main-card">
                <article class="article">
                  <img :src="slide.img" alt="Slide Image" />
                  <div class="article_text_column">
                    <h2>{{ slide.title }}</h2>
                    <p>{{ slide.description }}</p>
                  </div>
                </article>
              </div>
            </v-window-item>

            <v-window-item value="major">
              <div class="title">
                <h3>Major</h3>
              </div>
              <div v-for="slide in slides" :key="slide" class="main-card">
                <article class="article">
                  <img :src="slide.img" alt="Slide Image" />
                  <div class="article_text_column">
                    <h2>{{ slide.title }}</h2>
                    <p>{{ slide.description }}</p>
                  </div>
                </article>
              </div>
            </v-window-item>

            <v-window-item value="workshop">
              <div class="title">
                <h3>Workshop</h3>
              </div>
              <div v-for="slide in slides" :key="slide" class="main-card">
                <article class="article">
                  <img :src="slide.img" alt="Slide Image" />
                  <div class="article_text_column">
                    <h2>{{ slide.title }}</h2>
                    <p>{{ slide.description }}</p>
                  </div>
                </article>
              </div>
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
import SideNavBar from "../studentLayouts/SideNavBar.vue";
import axios from "@/stores/axiosHttp";
export default {
  components: {
    SideNavBar,
  },
  data() {
    return {
      tab: null,
      favoriteList:'',
      slides: [
        {
          title: "PNC",
          img: "https://img2.storyblok.com/fit-in/1200x630/f/64062/1600x900/0ecd62f24b/cambridge-uni.jpeg",
          description:
            "This image has an aspect ratio of 3/2. But when the text is longer, the image grows too, overriding its aspect ratio. Cool!",
        },
        {
          title: "Siem Reap",
          img: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTeZgcmGE7iRIZJaekxDGQTyzutH-qkh_S5cNZvZdPrXXg_dDqfNbWZxq8hiwkvyNarjaE&usqp=CAU",
          description:
            "This image has an aspect ratio of 3/2. But when the text is longer, the image grows too, overriding its aspect ratio. Cool!",
        },
        {
          title: "Siem Reap",
          img: "https://mekong.edu.kh/wp-content/uploads/2022/04/DSC_0334.jpg",
          description:
            "This image has an aspect ratio of 3/2. But when the text is longer, the image grows too, overriding its aspect ratio. Cool!",
        },
      ],
    };
  },
  created(){
    this.getFavorite();
  },
  methods:{
    getFavorite(){
      axios.post("auth/workshop/favoriteList")
      .then(response=>{
        this.favoriteList = response.data
        console.log(response.data)
      })
      .catch(error=>{
        console.log(error.message)
      })
    }
  }
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
  background-color: #cecaca;
  box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.2);
  border-radius: 10px;
}

.v-card {
  box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);
  margin-bottom: 24px;
  border: 2px solid #64dd17;
  padding: 30px;
  border-radius: 4px;
}

.profile_img {
  border: 3px solid #64dd17;
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

img {
  width: 35%;
}

.article {
  display: flex;
  padding: 5px;
}

.article_text_column {
  padding: 9px;
}
.title {
  background-color: #64dd17;
  margin-right: 50%;
  text-align: center;
  margin-top: 2%;
}

.main-card {
  background-color: #b8beb6;
  margin: 8px;
  padding: 10px;
  border-radius: 3px;
  box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.2);
}
.text-center {
  background-color: #64dd17;
}
</style>