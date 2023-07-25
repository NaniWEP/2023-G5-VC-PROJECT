<template>
    <div>
      <GoogleLogin :callback="callback"/>
    </div>
</template>

<script>
  import { decodeCredential, googleLogout } from "vue3-google-login";
export default {
  data(){
    return{
      user: null,

      callback: (response) => {

        console.log(response);
        console.log("Log in");
        this.user = decodeCredential(response.credential)
        console.log(this.user)
      }
    }
  },
  methods: {
    logout(){
      googleLogout();
    }
  }
}
</script>
