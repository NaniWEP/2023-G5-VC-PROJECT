<template>
  <v-app>
  <NavbarComponent />
    <v-main>
      <AboutComponent />
    </v-main>
    <FooterComponent />
  </v-app>
</template>

<script>
import { defineComponent } from 'vue';
import NavbarComponent from '../../../src/components/layouts/NavbarComponent.vue';
import AboutComponent from '../../components/abouts/AboutComponent.vue';
import FooterComponent from '../../components/layouts/FooterComponent.vue';

export default defineComponent({
  name: 'HomeView',

  components: {
    NavbarComponent,
    AboutComponent,
    FooterComponent,
},
});
</script>