<template>
  <v-form v-model="valid" class="form bg-grey-lighten-2">
    <v-container class="container">
      <h1 class="text-center">Register</h1>
      <div class="namefilled">
        <v-col cols="11" md="6">
          <v-text-field
            v-model="firstName"
            :rules="nameRules"
            label="First name"
          ></v-text-field>
        </v-col>

        <v-col cols="11" md="6">
          <v-text-field
            v-model="lastName"
            :rules="nameRules"
            label="Last name"
            required
          ></v-text-field>
        </v-col>
      </div>
      <div class="inputFilled">
        <v-text-field
          :style="{ width: '97%' }"
          v-model="email"
          :rules="emailRules"
          label="E-mail"
          required
        ></v-text-field>
        <v-text-field
          :style="{ width: '97%' }"
          v-model="password"
          :append-icon="show1 ? 'mdi-eye' : 'mdi-eye-off'"
          :rules="[rules.required, rules.min]"
          :type="show1 ? 'text' : 'password'"
          name="input-10-1"
          label="Password"
          hint="At least 8 characters"
          counter
          required
          @click:append="show1 = !show1"
        ></v-text-field>
        <v-text-field
          block
          :style="{ width: '97%' }"
          v-model="verify"
          :append-icon="show1 ? 'mdi-eye' : 'mdi-eye-off'"
          :rules="[rules.required, passwordMatch]"
          :type="show1 ? 'text' : 'password'"
          name="input-10-1"
          label="Confirm Password"
          counter
          required
          @click:append="show1 = !show1"
        ></v-text-field>
      </div>
      <v-col cols="12" sm="6" md="6">
        <v-btn
          to="/userinformation"
          @click="goToDetailInformation"
          color="green"
          block
          size="x-large"
          >Continue</v-btn
        >
        <p>
          Do you have an account? <router-link to="/login">Login</router-link>
        </p>
      </v-col>
    </v-container>
    <v-col cols="12" sm="6" md="6"
    >
      <v-btn to="/userinformation" @click="goToDetailInformation" color="green" block size="x-large">Continue</v-btn>
    <p>Do you have an account? <router-link to="/login">Login</router-link></p>
    </v-col>
  </v-form>
</template>


<script>
import "@mdi/font/css/materialdesignicons.css";
export default {
  data: () => ({
    // validtion: false,
    firstName: "",
    lastName: "",
    email: "",
    password: "",
    verify: "",
    users: [],
    nameRules: [
      (value) => {
        if (value) return true;
        return "Name is required.";
      },
    ],
    emailRules: [
      (v) => !!v || "Required",
      (v) => /.+@.+\..+/.test(v) || "E-mail must be valid",
    ],

    show1: false,
    rules: {
      required: (value) => !!value || "Required.",
      min: (v) => (v && v.length >= 8) || "Min 8 characters",
    },
  }),
  created() {
    // Call the showResultFromHomePage method to display the search results
    this.resetUser()
  },
  computed: {
    passwordMatch() {
      return () => this.password === this.verify || "Password must match";
    },
  },
  methods: {
    goToDetailInformation() {
      this.$router.push('/userinformation')
    },
    validate() {
      if (this.$refs.loginForm.validate()) {
        // submit form to server/API here...
      }
    },
    resetUser(){
      this.lastName = this.$route.query.lastName;
      this.firstName = this.$route.query.firstName;
      this.email = this.$route.query.email;
      this.password = this.$route.query.password;
      this.verify = this.$route.query.password;
      console.log(this.$route);
      console.log(11);
    },
  },
};
</script>
<style scoped>
.action .btn {
  width: 30%;
}
.namefilled {
  display: flex;
  width: 100%;
  justify-content: center;
  align-items: center;
}
.inputFilled {
  width: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
}
.form {
  width: 70%;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  border-radius: 10px;
}

.container {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  padding: 10px;
}
</style>
