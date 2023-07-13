<template>
<div id="body">
  <dashboard-component-vue></dashboard-component-vue>
  <v-card class="ml-15 mt-5 mr-8 mb-3 bg-grey-lighten-2">
    <div>
      <h1 class="text-light-green-accent-4 ml-10 mt-5">Appling List</h1>            
    </div>
    <hr>
  </v-card>
</div>
</template>

<script>
import DashboardComponentVue from '@/components/Dashboard/DashboardComponent.vue'
export default {
  components:{
    DashboardComponentVue
  }
}
</script>

<style scoped>
#body {
  display: flex;
  flex-direction: column;
  width: 100%;
  height: 100vh;
}
</style>