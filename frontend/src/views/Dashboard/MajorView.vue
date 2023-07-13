<template>
<div id="body">
<dashboard-component></dashboard-component>
  <v-card class="ml-15 mt-5 mr-8 mb-3 bg-grey-lighten-2 p-10">
    <h1>hello</h1>
  </v-card>
</div>
</template>

<script>
import DashboardComponent from '@/components/Dashboard/DashboardComponent.vue'
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