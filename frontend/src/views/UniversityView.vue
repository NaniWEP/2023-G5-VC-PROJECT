<template>
  <NavbarComponent />
  <v-app>
    <BannerComponent />
    <v-main>
      <UniversityComponent />
    </v-main>
    <FooterComponent />
  </v-app>
</template>
<script>
import { defineComponent } from 'vue';
import NavbarComponent from '../components/NavbarComponent.vue';
import UniversityComponent from '../components/UniversityComponent.vue';
import FooterComponent from '../components/FooterComponent.vue';
import BannerComponent from '../components/BannerComponent.vue';

export default defineComponent({
  name: 'HomeView',

  components: {
    NavbarComponent,
    UniversityComponent,
    FooterComponent,
    BannerComponent
},
});
</script>