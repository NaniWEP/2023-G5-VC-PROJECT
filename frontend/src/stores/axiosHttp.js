import axios from 'axios'
import { getCookie } from "@/stores/cookie.js";
import { decrypt } from "@/stores/decrypt";

const axiosHttp = axios.create({
  baseURL: process.env.VUE_APP_API_URL
})

axiosHttp.interceptors.request.use(
    (config) => {
      const token = decrypt(getCookie('myToken'), "myToken")
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