<template>
  <section>
    <v-navigation-drawer v-model="showDrawer" fixed bottom temporary>
      <v-list nav dense>
        <div class="d-flex">
          <v-avatar><v-img src="../../assets/logo.png"></v-img></v-avatar>
          <v-list-item><h1>Dashboard</h1></v-list-item>
        </div>
        <v-list-item-group v-model="tab">
          <v-list-item
            :to="{ path: '/user' }"
            prepend-icon="mdi-account-box"
            title="Profile"
            value="users"
          ></v-list-item>
          <v-list-item
            :to="{ path: '/apply' }"
            prepend-icon="mdi-bookmark-outline"
            title="Applying"
            value="Applying"
          ></v-list-item>
          <v-list-item
            :to="{ path: '/post' }"
            prepend-icon="mdi-post"
            title="Post"
            value="Post"
          ></v-list-item>
          <v-list-item
            :to="{ path: '/chart' }"
            prepend-icon="mdi-chart-line"
            title="Chart"
            value="Chart"
          ></v-list-item>
          <v-list-item
            :to="{ path: '/expiration' }"
            prepend-icon="mdi-alert-circle"
            title="Expired Date"
            value="Expired Date"
          ></v-list-item>
          <v-list-item :to="{ path: '/logOut' }">
            <v-list-item-icon>
              <v-icon size="32">mdi-logout</v-icon>
              <span>Sign out</span>
            </v-list-item-icon>
          </v-list-item>
        </v-list-item-group>
      </v-list>
    </v-navigation-drawer>

    <v-app-bar app class="navbar" dark>
      <v-app-bar-nav-icon
        @click.stop="showDrawer = !showDrawer"
      ></v-app-bar-nav-icon>
      <v-avatar><v-img src="../../assets/logo.png"></v-img></v-avatar>
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

export default {
  name: "App",
  components: {
  
  },
  data() {
    return {
      showDrawer: false,
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
.homeBtn {
  outline: 1px solid #3737e5;
  background-color: #304ffe;
  color: #ffff;
}
</style>

