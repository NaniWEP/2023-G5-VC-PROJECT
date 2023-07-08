import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import vuetify from './plugins/vuetify'
import { loadFonts } from './plugins/webfontloader'


loadFonts()

createApp(App)
  .use(router)
  .use(vuetify)
  .mount('#app')










// import 'vuetify/styles'
// import { createVuetify } from 'vuetify'
// import * as components from 'vuetify/components'
// import * as directives from 'vuetify/directives'
// //  loadFonts()
// const vuetify = createVuetify({
//     components,
//     directives,
//   })
  
//   // Create the Vue app instance
//   const app = createApp(App)
  
//   // Mount the app and router
//   app.use(router).use(vuetify).mount('#app')
