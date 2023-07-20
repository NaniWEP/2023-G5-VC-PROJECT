<template>
  <v-app-bar
    style="padding: 0px 20px"
    app
    color="white"
    light
    elevation="6"
    elevate-on-scroll
  >
    <v-avatar><v-img src="../../assets/logo.png"></v-img></v-avatar>
    <v-toolbar-title> KNOWLEDGE AND OPPORTUNITY </v-toolbar-title>
    <v-spacer />
    <v-list class="d-flex align-center">
      <v-list-item
        v-for="(item, index) in [
          { title: 'HOME', route: '/' },
          { title: 'UNIVERSITY', route: 'universityPage' },
          { title: 'WORKSHOP', route: 'workshopPage' },
          { title: 'ABOUT', route: 'aboutPage' },
        ]"
        :key="index"
        :to="item.route"
        class="mr-2 nav"
      >
        <v-list-item-title style="cursor: pointer">{{
          item.title
        }}</v-list-item-title>
      </v-list-item>
      <v-btn
        v-if="isLoggedIn == false"
        elevation="2"
        class="mr-2 navButtom"
        to="/login"
        elevated
        >SignIn</v-btn
      >
      <v-btn
        v-if="isLoggedIn == false"
        elevation="2"
        class="navButtom"
        to="/register"
        elevated
        >SingUp</v-btn
      >
      <v-btn
        v-if="isLoggedIn == true"
        elevation="2"
        class="navButtom"
        @click="signOut"
        elevated
        >SingOut</v-btn
      >
    </v-list>
    <router-link to="/studentDetail" v-if="isLoggedIn == true"
      ><v-avatar size="65"
        ><v-img src="../../assets/user.png"></v-img>
        <v-tooltip activator="parent" location="bottom"
          >Profile
        </v-tooltip></v-avatar
      ></router-link
    >
  </v-app-bar>
</template>

<script>
import { getCookie, eraseCookie } from "@/stores/cookie.js";
import axios from "@/stores/axiosHttp";
export default {
  name: "navbarView",
  data() {
    return {
      isLoggedIn: false,
    };
  },
  methods: {
    getUserId() {
      let userId = getCookie("myId");
      if (userId) {
        this.isLoggedIn = true;
      }
    },
    async signOut() {
    this.isLoggedIn = false;
    const token = getCookie('myToken')
          console.log("Token here: " + token)

      try {
        await axios.post("/auth/logout")
        .then((repsonse) => {
          eraseCookie("myToken")
          eraseCookie("myId")
          console.log(repsonse)
        });
        console.log("Log out is work");
      } catch (error) {
        console.log(error.response);
      }
    },
  },
  created() {
    this.getUserId();
  },
};
</script>

<style scoped>
.nav:hover {
  background: #3737e5;
  color: #ffffff;
  transition: 800ms;
}
.navButtom {
  background-color: #3737e5;
  color: #ffffff;
}
.navButtom:hover {
  background: #ffffff;
  color: #000000;
  transition: 800ms;
}
</style>
