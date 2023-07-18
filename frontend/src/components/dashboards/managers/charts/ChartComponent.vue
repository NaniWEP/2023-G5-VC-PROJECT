<template>
  <div id="body">
    <dashboard-component-vue></dashboard-component-vue>
    <v-card>
      <div id="chart">
        <apexchart
          type="bar"
          height="350"
          :options="chartOptions"
          :series="series"
        ></apexchart>
        <h1>hi</h1>
      </div>
    </v-card>
  </div>
</template>

<script>
import DashboardComponentVue from "../DashboardView.vue";
export default {
  components: {
    DashboardComponentVue,
  },
};
</script>

<style scoped>
  #body {
  display: flex;
  flex-direction: column;
  width: 100%;
  height: 100vh;
}
</style>