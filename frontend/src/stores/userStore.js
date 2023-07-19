import { defineStore } from 'pinia'
import axios from "@/stores/axiosHttp";

export const useUserStore = defineStore('user', {
  state: () => ({
    users: [],
    error: null
  }),
  actions: {
    async getUser() {
      try {
        await axios.get('/auth/getUser')
        .then((response) => {
          this.users = response.data.data
        })
      }catch{
        this.error = error.response.data.message;
      }
    }
  }
});
