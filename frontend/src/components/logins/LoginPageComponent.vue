<template>
  <v-card class="card px-6 py-3">
    <v-img class="image" src="../../assets/login/logIN.png"></v-img>
    <h1 class="text-center">WELLCOME BACK</h1>
    <div class="google">
      <GoogleAuth class="googleLog"/>
      </div>
      <div class="line">
          <hr>
      </div>
    <v-form v-model="form" @submit.prevent="onSubmit">
      <v-text-field
        v-if="errorMessage == null"
        v-model="email"
        :readonly="loading"
        :rules="emailRules"
        class="mb-2 mt-3"
        clearable
        prepend-inner-icon="mdi-email-outline"
        label="Email"
      ></v-text-field>
      <v-text-field
        v-else
        v-model="email"
        :readonly="loading"
        :rules="emailRules"
        :error-messages="[errorMessage]"
        class="mb-2 mt-3"
        clearable
        prepend-inner-icon="mdi-email-outline"
        label="Email"
      ></v-text-field>

      <v-text-field
        v-if="errorMessage == null"
        v-model="password"
        :readonly="loading"
        :rules="[rules.required, rules.min]"
        clearable
        label="Password"
        hint="At least 8 characters"
        name="input-10-1"
        placeholder="Enter your password"
        :append-inner-icon="visible ? 'mdi-eye-off' : 'mdi-eye'"
        :type="visible ? 'text' : 'password'"
        @click:append-inner="visible = !visible"
        prepend-inner-icon="mdi-lock-outline"
      ></v-text-field>
      <v-text-field
        v-else
        v-model="password"
        :readonly="loading"
        :rules="[rules.required, rules.min]"
        :error-messages="[errorMessage]"
        clearable
        label="Password"
        hint="At least 8 characters"
        name="input-10-1"
        placeholder="Enter your password"
        :append-inner-icon="visible ? 'mdi-eye-off' : 'mdi-eye'"
        :type="visible ? 'text' : 'password'"
        @click:append-inner="visible = !visible"
        prepend-inner-icon="mdi-lock-outline"
      ></v-text-field>
      <p>
        Don't have account? <router-link to="/register" style="color: #3737e5">Register</router-link>
      </p>

      <v-btn
        :disabled="!form"
        :loading="loading"
        block
        class="mb-2"
        color="#3737e5"
        size="large"
        type="submit"
        variant="elevated"
      >
        LOGIN
      </v-btn>
      <v-btn block to="/" color="red" size="large" class="mb-4"> CANCEL </v-btn> 
    </v-form>
  </v-card>
</template>

<script>
import "@mdi/font/css/materialdesignicons.css";
import GoogleAuth from "../google/GoogleAuth.vue"
import axios from "@/stores/axiosHttp";
import { setCookie } from "@/stores/cookie.js";
export default {
  components: {GoogleAuth},
  data: () => ({
    email: "",
    password: "",
    errorMessage: null,
    loginInfo: null,
    form: false,
    loading: false,
    visible: false,

    emailRules: [
      (v) => !!v || "Field is required",
      (v) => /.+@.+\..+/.test(v) || "E-mail must be valid",
    ],

    rules: {
      required: (value) => !!value || "Field is required",
      min: (v) => (v && v.length >= 8) || "Min 8 characters",
    },
  }),

  methods: {
    onSubmit() {
      if (!this.form) return;
      this.loading = true;
      setTimeout(() => (this.loading = false), 500);
      this.loginInfo = { email: this.email, password: this.password };
      console.log(this.loginInfo);
      this.login();
    },
    async login() {
      try {
        await axios
          .post("/login", {
            email: this.email,
            password: this.password,
          })
          .then((response) => {
            console.log(response.data.data.role_id);
            if (response.data.success) {
              console.log(response.data.data.id);
              setCookie("myToken", response.data.token, 1);
              setCookie("myId", response.data.data.id, 1);

              // send user to
              if (response.data.data.role_id == 3) {
                this.$router.push("/");
              } else if (response.data.data.role_id == 2) {
                this.$router.push("/manager");
              } else if (response.data.data.role_id == 1) {
                this.$router.push("/");
              }
            } else {
              console.log("NOOOOOO");
            }
          });
      } catch (error) {
        if (!error.response.data.success) {
          this.errorMessage = "Incorrect email or password!";
        }
        console.log(error.response.data.success);
      }
    },
  },
};
</script>

<style scoped>
.image {
  width: 35%;
  margin-left: 32%;
}

p {
  padding: 15px;
}

.card {
  width: 35%;
  border-radius: 10px;
  color: #ffff;
  background-color: #ffffff05;
}
.google{
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  margin-bottom: 10px;
}
.googleLog{
  width: 90%;
}
hr {
    border: none;
    border-top: 3px double #ffffff;
    text-align: center;
    height: 5px;
}
</style>
