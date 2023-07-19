<template>
  <v-app>
    <NavbarComponent />
    <v-main>
      <MajorChart />
    </v-main>
    <PopularMajorCardComponent />
    <FooterComponent />
  </v-app>
</template>
<script>
import { defineComponent } from "vue";
import NavbarComponent from "../../../components/layouts/NavbarComponent.vue";
import MajorChart from "../../../components/homes/MajorChartComponent.vue";
import PopularMajorCardComponent from "../../../components/homes/PopularMajorCardComponent.vue";
import FooterComponent from "../../../components/layouts/FooterComponent.vue";

export default defineComponent({
  name: "HomeView",

  components: {
    NavbarComponent,
    MajorChart,
    FooterComponent,
    PopularMajorCardComponent
  },
});
</script>