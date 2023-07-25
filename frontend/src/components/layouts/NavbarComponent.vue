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
        prepend-icon="mdi-login"
        v-if="isLoggedIn == false"
        elevation="2"
        class="mr-2 navButtom"
        to="/login"
        elevated
        >Login</v-btn
      >
      <v-btn
        prepend-icon="mdi-account-plus-outline"
        v-if="isLoggedIn == false"
        elevation="2"
        class="navButtom"
        to="/register"
        elevated
        >Register</v-btn
        > 
      </v-list>
    <div class="text-center">
      <v-menu
      open-on-hover
      >
      <template v-slot:activator="{ props }">
          <v-avatar size="65" v-if="isLoggedIn == true"
            v-bind="props"
            ><v-img src="../../assets/user.png"></v-img>
            </v-avatar>
      </template>
      
      <v-list>
        
        <v-list-item to="/studentDetail">
            <v-list-item-title class="pfBtn"><v-icon>mdi-account-check</v-icon> Your Profile</v-list-item-title>
        </v-list-item>
        <v-list-item
          @click="logOut">
          <v-list-item-title class="pfBtn"><v-icon>mdi-logout</v-icon>LogOut</v-list-item-title>
        </v-list-item>
      </v-list>
    </v-menu>
  </div>
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
    async logOut() {
    this.isLoggedIn = false;
      try {
        await axios.post("/auth/logout")
        .then(() => {
          eraseCookie("myToken")
          eraseCookie("myId")
        });
      } catch (error) {
        console.log(error);
      }
    },
  },
  created() {
    this.getUserId();
  },
};
</script>

<style scoped>
.nav{
  border-radius: 5px;
}
.nav:hover {
  background: #3737e5;
  color: #ffffff;
  transition: 800ms;
}
.navButtom {
  background-color: #3737e5;
  color: #ffffff;
  border-radius: 5px;
}
.navButtom:hover {
  background: #ffffff;
  color: #000000;
  transition: 800ms;
}
.pfBtn{
  cursor: pointer;
  padding: 8px;
  border-radius: 5px;
}
.pfBtn:hover{
  background: #3737e5;
  color : #FFFFFF;
  transition: 800ms;
}
</style>
