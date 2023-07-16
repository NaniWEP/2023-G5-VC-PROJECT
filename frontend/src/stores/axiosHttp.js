import axios from 'axios'

const axiosHttp = axios.create({
  baseURL: 'http://127.0.0.1:8000/api'
})

axiosHttp.interceptors.request.use(
    (config) => {
      const token = localStorage.getItem('myToken');
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