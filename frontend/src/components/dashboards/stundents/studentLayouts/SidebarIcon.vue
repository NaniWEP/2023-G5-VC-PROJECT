<template>
  <v-list nav dense>
    <v-list-item-group>
      <v-list-item :to="'/StudentDetail'">
        <v-list-item-icon>
          <v-icon size="32" icon="mdi-account"></v-icon>
          <span>Doeur Diet</span>
        </v-list-item-icon>
      </v-list-item>

      <v-list-item :to="{ path: '/favoritePage' }">
        <v-list-item-icon>
          <v-icon size="32">mdi-heart</v-icon>
          <span>Favorite</span>
        </v-list-item-icon>
      </v-list-item>

      <v-list-item :to="{ path: '/map' }">
        <v-list-item-icon>
          <v-icon size="32">mdi-map</v-icon>
          <span>Map</span>
        </v-list-item-icon>
      </v-list-item>

      <v-list-item :to="{ path: '/logOu' }">
        <v-list-item-icon>
          <v-icon size="32">mdi-logout</v-icon>
          <span>Sign out</span>
        </v-list-item-icon>
      </v-list-item>
    </v-list-item-group>
  </v-list>
</template>

<style scoped>
</style>