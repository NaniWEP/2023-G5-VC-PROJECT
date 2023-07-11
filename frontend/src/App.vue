<template>
  <v-app>
    <v-main class="main">
      <router-view/>
    </v-main>
  </v-app>
</template>

<script>

export default {
  name: 'App',

  data: () => ({
    //
  }),
}
</script>
<style scoped>

#app{
  background-color: #000000;
}
.main{
  display: flex;
  justify-content: center;
  align-items: center;

}

</style>
