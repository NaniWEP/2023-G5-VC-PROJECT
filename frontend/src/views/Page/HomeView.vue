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
import NavbarComponent from '../../components/Layout/NavbarComponent.vue';
import ContentComponent from '../../components/HomePage/ContentComponent.vue';
import FooterComponent from '../../components/Layout/FooterComponent.vue';
import BannerComponent from '../../components/Layout/BannerComponent.vue';

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