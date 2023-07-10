import { createRouter, createWebHistory } from 'vue-router'
import UserView from "../views/UserView.vue"
import ApplyView from "../views/ApplyView.vue"
import ChartView from "../views/ChartView.vue"
import PostView from "../views/PostView.vue"
import MajorView from "../views/MajorView.vue"
import ExpirationView from "../views/ExpirationView.vue"


const routes = [
  { path: '/user', component: UserView  },
  { path: '/apply', component: ApplyView  },
  { path: '/chart', component: ChartView  },
  { path: '/Post', component: PostView  },
  { path: '/Major', component: MajorView  },
  { path: '/Expiration', component: ExpirationView  },   
  
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router

