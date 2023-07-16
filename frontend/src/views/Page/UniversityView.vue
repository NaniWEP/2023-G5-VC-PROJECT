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
import NavbarComponent from '../../components/Layout/NavbarComponent.vue';
import UniversityComponent from '../../components/UniversityPage/UniversityComponent.vue';
import FooterComponent from '../../components/Layout/FooterComponent.vue';
import BannerComponent from '../../components/Layout/BannerComponent.vue';

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