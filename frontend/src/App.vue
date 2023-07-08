<template>

  <v-app>
    <v-main>
      <div id="app">
        <router-view/>
      </div>
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
 #app {
  display: flex;
  height: 100vh;
  justify-content: center;
  align-items: center;
 }
</style>