<template>
  <section>
    <v-navigation-drawer v-model="showDrawer" fixed bottom temporary>
      <v-list nav dense>
        <v-list-item><h1>Dashboard</h1></v-list-item>
        <v-list-item-group v-model="tab">
          <v-list-item
            prepend-icon="mdi-account-box"
            :to="'/StudentDetail'"
            active-class="bgColor"
            value="profile"
          >
            Profile
          </v-list-item>

          <v-list-item
            prepend-icon="mdi-heart-box"
            :to="{ path: '/favoritePage' }"
            active-class="bgColor"
          >
            Favorite
          </v-list-item>

          <v-list-item
            prepend-icon="mdi-ticket"
            :to="{ path: '/ticket' }"
            active-class="bgColor"
          >
            Ticket
          </v-list-item>

          <v-list-item
            prepend-icon="mdi-map-marker-account"
            :to="{ path: '/map' }"
            active-class="bgColor"
          >
            My location
          </v-list-item>

          <v-list-item
            prepend-icon="mdi-logout"
            @click="logOut"
            active-class="bgColor"
          >
            LogOut
          </v-list-item>
        </v-list-item-group>
      </v-list>
    </v-navigation-drawer>

    <v-app-bar app class="navbar" dark>
      <v-app-bar-nav-icon
        @click.stop="showDrawer = !showDrawer"
      ></v-app-bar-nav-icon>

      <v-toolbar-title class="navbar-title"
        >Knowledge and Opportunity</v-toolbar-title
      >

      <v-spacer></v-spacer>

      <v-btn prepend-icon="mdi-home-circle" class="homeBtn" to="/">
        Back Home
      </v-btn>
    </v-app-bar>
  </section>
</template>
<script>
import { eraseCookie } from "@/stores/cookie.js";
import { googleLogout } from "vue3-google-login";
import axios from "@/stores/axiosHttp";
export default {
  data() {
    return {
      tab: null,
      showDrawer: false,
    };
  },
  setup() {},
  methods: {
    async logOut() {
      googleLogout();
      try {
        await axios.post("/auth/logout").then(() => {
          eraseCookie("myToken");
          eraseCookie("myId");
          this.$router.push("/");
        });
      } catch (error) {
        console.log(error);
      }
    },
  },
};
</script>
<style scoped>
.bgColor {
  color: #ffff;
  background-color: #3737e5;
}
.navbar {
  height: 60px;
}

.navbar-title {
  font-size: 24px;
  margin-left: 20px;
}
.homeBtn{
  outline: 1px solid #3737e5;
  background-color: #304ffe;
  color: #ffff;
}
</style>
