<template>
<div id="body">
<dashboard-component></dashboard-component>
  <v-card class="ml-10 mt-1 mr-8 bg-grey-lighten-2">
    <h1 class="text-light-black-accent-4 ml-10">Major</h1>
  </v-card>
</div>
</template>

<script>
import DashboardComponent from '../DashboardView.vue'
export default {
  components: { DashboardComponent },

}
</script>

<style>
 #body {
  display: flex;
  flex-direction: column;
  width: 100%;
  height: 100vh;
}
</style>