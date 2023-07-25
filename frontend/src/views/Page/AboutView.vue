<template>
  <section>
    <AboutComponent />
    <p>{{userStore.users.first_name}}</p>
    <p>{{userStore.users.last_name}}</p>
    <p>{{userStore.users.email}}</p>
  </section>
</template>
<script>
import AboutComponent from "../../components/abouts/AboutComponent.vue";
import {useUserStore} from "../../stores/userStore";
export default {
  setup() {
    const userStore = useUserStore();
    userStore.getUser()
    return {
      userStore,
    };
  },
  name: "AboutPage",
  components: {
    AboutComponent,
  },
};
</script>
