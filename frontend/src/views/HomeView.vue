<template>
  <v-app>
  <NavbarComponent />
    <BannerComponent />
    <v-main>
      <ContentComponent />
    </v-main>
    <FooterComponent />
  </v-app>
</template>

<script>
import { defineComponent } from 'vue';
import NavbarComponent from '../components/NavbarComponent.vue';
import ContentComponent from '../components/ContentComponent.vue';
import FooterComponent from '../components/FooterComponent.vue';
import BannerComponent from '../components/BannerComponent.vue';

export default defineComponent({
  name: 'HomeView',

  components: {
    NavbarComponent,
    ContentComponent,
    FooterComponent,
    BannerComponent
},
});
</script>