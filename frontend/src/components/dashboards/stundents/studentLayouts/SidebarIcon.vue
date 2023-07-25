<template>
  <v-list nav dense>
    <v-list-item-group>
      <v-list-item><h1>Dashboard</h1></v-list-item>
      <v-list-item prepend-icon="mdi-account-box" :to="'/StudentDetail'">
          Profile
      </v-list-item>

      <v-list-item prepend-icon="mdi-heart-box" :to="{ path: '/favoritePage' }">
          Favorite
      </v-list-item>

      <v-list-item prepend-icon="mdi-map-marker-account" :to="{ path: '/map' }">
          My location
      </v-list-item>

      <v-list-item prepend-icon="mdi-logout" @click="logOut">
          LogOut
      </v-list-item>
    </v-list-item-group>
  </v-list>
</template>
<script>
import { eraseCookie } from "@/stores/cookie.js";
import axios from "@/stores/axiosHttp";
export default {
  setup() {},
  methods:{
    async logOut() {

      try {
        await axios.post("/auth/logout")
        .then(() => {
          eraseCookie("myToken")
          eraseCookie("myId")
          this.$router.push("/");
        });
      } catch (error) {
        console.log(error);
      }
    },
  }
}
</script>
<style scoped>
</style>