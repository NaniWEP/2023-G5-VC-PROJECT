<template>
  <v-app>
    <NavbarView />
    <v-main>
      <ContentView />
    </v-main>
    <FooterView />
  </v-app>
</template>

<script>
import { defineComponent } from 'vue';
import NavbarView from '../components/NavbarView.vue';
import ContentView from '../components/ContentView.vue';
import FooterView from '../components/FooterView.vue';
// Components

export default defineComponent({
  name: 'HomeView',

  components: {
    NavbarView,
    ContentView,
    FooterView,
},
});
</script>
