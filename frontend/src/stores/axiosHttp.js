import axios from 'axios'
import { getCookie } from "@/stores/cookie.js";

const axiosHttp = axios.create({
  baseURL: process.env.VUE_APP_API_URL
})

axiosHttp.interceptors.request.use(
    (config) => {
      // const token = localStorage.getItem('myToken');
      const token = getCookie('myToken')
      console.log(token)
      if (token) {
         config.headers.Authorization = `Bearer ${token}`
        } else {
            // Do something... Usually logout user.
            console.log("path");
        }
        config.headers["Content-Type"] = "application/json"
      return config
    }
)

export default axiosHttp