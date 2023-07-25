<template>
  <GoogleLogin class="google" :callback="callback" />
</template>

<script>
import { decodeCredential, googleLogout } from "vue3-google-login";
import axios from "@/stores/axiosHttp";
import { setCookie } from "@/stores/cookie.js";
export default {
  data() {
    return {
      user: null,
      callback: (response) => {
        console.log(response);
        this.user = decodeCredential(response.credential);
        this.login();
      },
    };
  },
  methods: {
    async login() {
      console.log("This is first name ", this.user.given_name);
      console.log("This is last name ", this.user.family_name);
      console.log("This is user email ", this.user.email);
      console.log("This is user image ", this.user.picture);
      try {
          await axios
            .post("/googleLogin", {
              first_name: this.user.given_name,
              last_name: this.user.family_name,
              email: this.user.email,
              profile: this.user.picture,
              role_id: 1,
            })
            .then((response) => {
              console.log(response.data);
              if (response.data.success) {
                let token = response.data.token;

                setCookie("myToken", token, 1);
                setCookie("myId", response.data.data.id, 1);

                // send user to:
                this.$router.push("/");
              } else {
                console.log(response.data.message);
              }
            });
      } catch (error) {
        console.log(error);
      }
    },
  },
  logout() {
    googleLogout();
  },
};
</script>
 <style scoped>
.google {
  width: 100%;
}
</style>