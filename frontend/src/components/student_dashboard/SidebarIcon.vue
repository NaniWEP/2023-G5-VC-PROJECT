<template>
  <v-list nav dense>
    <v-list-item-group>
      <v-list-item :to="'/detailPage'">
        <v-list-item-icon>
          <v-icon size="32" color="black" icon="mdi-account"></v-icon> 
             <span style="color: black;">Doeur Diet</span>
        </v-list-item-icon>
      </v-list-item>

      <v-list-item :to="{ path: '/favoritePage' }">
        <v-list-item-icon>
          <v-icon size="32" color="black">mdi-heart</v-icon>
           <span style="color: black;">Favorite</span>
        </v-list-item-icon>
      </v-list-item>

      <v-list-item :to="{ path: '/map' }">
        <v-list-item-icon>
          <v-icon size="32" color="black">mdi-map</v-icon>
           <span style="color: black;">Map</span>
        </v-list-item-icon>
      </v-list-item>

      <v-list-item :to="{ path: '/logOut' }">
        <v-list-item-icon>
          <v-icon size="32" color="black">mdi-logout</v-icon>
           <span style="color: black;">Sign out</span>
        </v-list-item-icon>
      </v-list-item>
    </v-list-item-group>
  </v-list>
</template>

<style scoped>
</style>