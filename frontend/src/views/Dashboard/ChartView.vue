<template>
<dashboard-component-vue></dashboard-component-vue>
    <v-card>
        <div id="chart">
            <apexchart type="bar" height="350" :options="chartOptions" :series="series"></apexchart>
            <h1>hi</h1>
        </div>
    </v-card>
</template>

<script>
import DashboardComponentVue from '@/components/Dashboard/DashboardComponent.vue'
export default {
  components:{
    DashboardComponentVue
  }
}
</script>

<style>

</style>