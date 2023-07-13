import { createApp } from 'vue'
// import axios from 'axios'
import App from './App.vue'
import router from './router'
import vuetify from './plugins/vuetify'
import { loadFonts } from './plugins/webfontloader'
import axios from 'axios'

axios.defaults.baseURL = 'http://localhost:8000/api/';

loadFonts()

createApp(App)
  // .use(axios)
  .use(router)
  .use(vuetify)
  .mount('#app')
