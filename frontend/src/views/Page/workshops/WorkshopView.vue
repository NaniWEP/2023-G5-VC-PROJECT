<template>
  <v-app>
  <NavbarComponent />
    <BannerComponent />
    <v-main>
      <WorkshopComponent />
    </v-main>
    <FooterComponent />
  </v-app>
</template>
<script>
import { defineComponent } from 'vue';
import NavbarComponent from '../../../components/layouts/NavbarComponent.vue';
import BannerComponent from '../../../components/layouts/BannerComponent.vue';
import WorkshopComponent from '../../../components/workshops/WorkshopComponent.vue';
import FooterComponent from '../../../components/layouts/FooterComponent.vue';

export default defineComponent({
  name: 'HomeView',

  components: {
    NavbarComponent,
    BannerComponent,
    WorkshopComponent,
    FooterComponent,
},
});
</script>