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
      <v-btn elevation="2" class="mr-2 navButtom" to="/login" elevated
        >SignIn</v-btn
      >
      <v-btn elevation="2" class="navButtom" to="/register" elevated
        >SingUp</v-btn
      >
    </v-list>
  </v-app-bar>
</template>

<script>
export default {
  name: "navbarView",
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
