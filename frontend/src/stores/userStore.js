import { defineStore} from 'pinia';
import { ref } from 'vue';
import axios from "@/stores/axiosHttp";

export const useUserStore = defineStore('user', {
  state: () => ({
    users: ref(null),
    error: null
  }),
  actions: {
    async getUser() {
      try {
        await axios.get('/auth/getUser')
        .then((response) => {
          this.users = response.data.data
          console.log("This is: ", this.users)
        })
      }catch(error){
        this.error = error;
      }
    }
  }
});
