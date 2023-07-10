<template>
  <!-- <LoginPage/> -->
  <dashboard-component>/
    <router-view/>
  </dashboard-component>

</template>

<script>
// import LoginPage from './components/Login/LoginPage.vue'
import DashboardComponent from "./components/Dashboard/DashboardComponent.vue";
export default {
  components:{
    // LoginPage,
    DashboardComponent
  },
}
</script>

<style>

</style>
