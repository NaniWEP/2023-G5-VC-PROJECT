<template>
<v-main class="loginMain">
    <LoginPage></LoginPage>
  </v-main>
</template>

<script>
import LoginPage from '../../components/logins/LoginPageComponent.vue'
export default { 
  components: {
      LoginPage
  }
}
</script>

<style scoped>
.loginMain{
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background: url("../../assets/login/World Map.svg");
}
</style>