import { createApp } from "vue";
import App from "./App.vue";
import router from "./router";
import "@mdi/font/css/materialdesignicons.css";
import "vuetify/dist/vuetify.min.css";

import "vuetify/styles";
import { createVuetify } from "vuetify";
import * as components from "vuetify/components";
import * as directives from "vuetify/directives";

// Create the Vuetify instance
const vuetify = createVuetify({
  components,
  directives,
});

// Create the Vue app instance
const app = createApp(App);

// Mount the app and router
app.use(router).use(vuetify).mount("#app");
