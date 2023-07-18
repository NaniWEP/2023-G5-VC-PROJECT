<template>
  <section>
    <v-navigation-drawer v-model="showDrawer" fixed bottom temporary>
      <app-nav></app-nav>
    </v-navigation-drawer>

    <v-app-bar app class="navbar" dark>
      <v-app-bar-nav-icon
        @click.stop="showDrawer = !showDrawer"
      ></v-app-bar-nav-icon>

      <v-toolbar-title class="navbar-title"
        >Knowledge and Opportunity</v-toolbar-title
      >

      <v-spacer></v-spacer>

      <v-btn icon>
        <v-icon>mdi-home</v-icon>
      </v-btn>
    </v-app-bar>
  </section>
</template>

<script>
import sidebarIcon from "./SchoolSidebarIcon.vue";
export default {
  name: "App",
  components: {
    "app-nav": sidebarIcon,
  },
  data() {
    return {
      showDrawer: true,
    };
  },
};
</script>

<style scoped>
.navbar {
  height: 60px;
}

.navbar-title {
  font-size: 24px;
  margin-left: 20px;
}
</style>
