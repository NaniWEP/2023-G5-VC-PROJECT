import { createApp } from 'vue'
import { createPinia } from 'pinia'
import App from './App.vue'
import router from './router'
import vuetify from './plugins/vuetify'
import { loadFonts } from './plugins/webfontloader'
import vue3GoogleLogin from 'vue3-google-login'

const CLIENT_ID = '110348301474-54g460mkh1q5846sqrcp687oudgt4rvi.apps.googleusercontent.com'
const pinia = createPinia()
loadFonts()

const app = createApp(App)

app.use(vue3GoogleLogin, {
  clientId: CLIENT_ID,
})
app.use(pinia)
app.use(router)
app.use(vuetify)
app.mount('#app')
