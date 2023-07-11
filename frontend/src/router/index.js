import { createRouter, createWebHistory } from 'vue-router'
import UserView from "../views/Dashboard/UserView.vue"
import ApplyView from "../views/Dashboard/ApplyView.vue"
import ChartView from "../views/Dashboard/ChartView.vue"
import PostView from "../views/Dashboard/PostView.vue"
import MajorView from "../views/Dashboard/MajorView.vue"
import ExpirationView from "../views/Dashboard/ExpirationView.vue"
import DashboardView from "../views/Dashboard/DashboardView.vue"


const routes = [
  { path: '/dashbaord', component: DashboardView  },
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

