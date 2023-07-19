<template>
  <v-app>
    <v-main>
      <MajorChart />
      <PopularMajorCardComponent />
    </v-main>
  </v-app>
</template>
<script>
import MajorChart from "./popularMajor/MajorChartComponent.vue";
import PopularMajorCardComponent from "./popularMajor/PopularMajorCardComponent.vue";
export default({

  components: {
    MajorChart,
    PopularMajorCardComponent
  },
});
</script>