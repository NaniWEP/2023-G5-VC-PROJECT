<template>
    <v-layout>
      <v-navigation-drawer class="bg-black"
        expand-on-hover
        rail
      >
        <v-list-item class="mt-8 ml-12 font-weight-bold text-h1 text-green-accent-3"
          title="Dashboard" size="large">
        </v-list-item>
        <hr class="boder">
        <v-list border="light-green-accent-4">
          <v-list-item :to="{ path: '/user' }" prepend-icon="mdi-account-multiple-outline" title="Users" value="users"></v-list-item>
          <v-list-item :to="{ path: '/apply' }" prepend-icon="mdi-bookmark-outline" title="Applying" value="Applying"></v-list-item>
          <v-list-item :to="{ path: '/post' }" prepend-icon="mdi-post" title="Post" value="Post"></v-list-item>
          <v-list-item :to="{ path: '/major' }" prepend-icon="mdi-clipboard-check" title="Major" value="Major"></v-list-item>
          <v-list-item :to="{ path: '/chart' }" prepend-icon="mdi-chart-line" title="Chart" value="Chart"></v-list-item>
          <v-list-item :to="{ path: '/expiration' }" prepend-icon="mdi-alert-circle" title="Expired Date" value="Expired Date"></v-list-item>
          <v-list-item prepend-icon="mdi-account-minus" title="Sign Out" value="Sign Out"></v-list-item>
        </v-list>
      </v-navigation-drawer>
    </v-layout>

</template>

<script>
import '@mdi/font/css/materialdesignicons.css'
export default {
  
}
</script>

<style scoped>
  .main{
    margin-left: 18%;
    height: 620px;
  }
  .boder{
    margin: 10px 10px 0px 10px; 
    border: 1px rgb(17, 224, 17) solid;
  }
</style>

