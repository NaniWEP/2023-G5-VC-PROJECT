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
import NavbarComponent from '../../components/layouts/NavbarComponent.vue';
import BannerComponent from '../../components/layouts/BannerComponent.vue';
import ContentComponent from '../../components/homes/ContentComponent.vue';
import FooterComponent from '../../components/layouts/FooterComponent.vue';

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