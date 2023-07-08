import { createRouter, createWebHistory } from "vue-router";
import ProfileDetail from "../views/student_profile/DetailPage.vue";
import FavoritePage from "../views/student_profile/FavoritePage.vue";

const routes = [
  {
    path: "/detailPage",
    name: "detailPage",
    component: ProfileDetail,
  },
  {
    path: "/favoritePage",
    name: "favoritePage",
    component: FavoritePage,
  },
];

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
});

export default router;
