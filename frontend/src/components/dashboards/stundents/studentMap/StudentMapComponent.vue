<template>
  <v-container class="container">
    <SideNavBar></SideNavBar>
    <main>
      <MapComponent />
    </main>
  </v-container>
</template>

<script>
import SideNavBar from "../studentLayouts/SideNavBar.vue";
import MapComponent from "./MapComponent.vue";

export default {
  components: {
    SideNavBar,
    MapComponent,
  },
  data() {
    return {
      tab: null,
    };
  },
  methods: {},
};
</script>

<style scoped>
.container {
  width: 100%;
}
main {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 90vh;
}
</style>