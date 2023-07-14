<template>
  <div id="body">
    <RegisterPage></RegisterPage>
  </div>
</template>
<script>
import RegisterPage from "../../components/Register/RegisterPage.vue";
export default {
  components: {
    RegisterPage,
  },
};
</script>
<style scoped>
#body {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
}
</style>