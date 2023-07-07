import { createApp } from 'vue'
import App from './App.vue'
import router from './router'

import 'vuetify/styles'
import { createVuetify } from 'vuetify'
import * as components from 'vuetify/components'
import * as directives from 'vuetify/directives'

const vuetify = createVuetify({
    components,
    directives,
  })
  
  // Create the Vue app instance
  const app = createApp(App)
  
  // Mount the app and router
  app.use(router).use(vuetify).mount('#app')
  

// createApp(App).use(router).mount('#app')

// import Vue from "vue";
// import App from "./App.vue";
// import Vuelidate from 'vuelidate'

// Vue.config.productionTip = false;
// Vue.use(Vuelidate)

// new Vue({
//   render: h => h(App)
// }).$mount("#app");
