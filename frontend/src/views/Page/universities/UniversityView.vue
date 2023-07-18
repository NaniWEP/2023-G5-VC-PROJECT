<template>
  <v-app>
  <NavbarComponent />
    <BannerComponent />
    <v-main>
      <UniversityComponent />
    </v-main>
    <FooterComponent />
  </v-app>
</template>
<script>
import { defineComponent } from 'vue';
import NavbarComponent from '../../../components/layouts/NavbarComponent.vue';
import BannerComponent from '../../../components/layouts/BannerComponent.vue';
import UniversityComponent from '../../../components/universities/UniversityComponent.vue';
import FooterComponent from '../../../components/layouts/FooterComponent.vue';

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