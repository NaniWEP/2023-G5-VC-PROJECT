<template>
  <div id="body">
    <RegisterPage></RegisterPage>
  </div>
</template>
<script>
import RegisterPage from "../../../components/registers/RegisterComponent.vue";
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