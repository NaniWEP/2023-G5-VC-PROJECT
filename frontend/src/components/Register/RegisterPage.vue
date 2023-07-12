<template>
  <v-form v-model="valid" class="form bg-grey-lighten-3">
    <v-container class="container">
      <h1>Register</h1>
      <div class="namefilled">
        <v-col cols="6" md="5">
          <v-text-field
            v-model="firstname"
            :rules="nameRules"
            label="First name"
            required
          ></v-text-field>
        </v-col>

        <v-col cols="6" md="5">
          <v-text-field
            v-model="lastname"
            :rules="nameRules"
            label="Last name"
            required
          ></v-text-field>
        </v-col>
      </div>
      <div class="inputFilled">
        <v-text-field
          :style="{ width: '80%' }"
          v-model="email"
          :rules="emailRules"
          label="E-mail"
          required
        ></v-text-field>
        <v-text-field
          :style="{ width: '80%' }"
          v-model="password"
          :append-inner-icon="show1 ? 'mdi-eye' : 'mdi-eye-off'"
          :rules="[rules.required, rules.min]"
          :type="show1 ? 'text' : 'password'"
          name="input-10-1"
          label="Password"
          hint="At least 8 characters"
          counter
          @click:append="show1 = !show1"
        ></v-text-field>
        <v-text-field
          block
          :style="{ width: '80%' }"
          v-model="verify"
          :append-inner-icon="show1 ? 'mdi-eye' : 'mdi-eye-off'"
          :rules="[rules.required, passwordMatch]"
          :type="show1 ? 'text' : 'password'"
          name="input-10-1"
          label="Confirm Password"
          counter
          @click:append="show1 = !show1"
        ></v-text-field>
      </div>
    </v-container>
    <v-col cols="12" sm="6" md="10"
    >
      <v-btn to="/userinformation" @click="goToDetailInformation" color="indigo-accent-3" block size="x-large">Continue</v-btn>
    <p>Do you have an account? <router-link to="/login">Login</router-link></p>
    </v-col>
    <p class="w-100">
      Do you have an account? <router-link to="/login">Login</router-link>
    </p>
  </v-form>
</template>


<script>
import "@mdi/font/css/materialdesignicons.css";
export default {
  data: () => ({
    valid: true,
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
  computed: {
    passwordMatch() {
      return () => this.password === this.verify || "Password must match";
    },
  },
  methods: {
    goToDetailInformation() {
      if (this.firstName !== "" && this.lastName !== "" && this.email !== ""){
        console.log("h1");
      }
      this.$router.push("/userinformation");
    },
    validate() {
      if (this.$refs.loginForm.validate()) {
        // submit form to server/API here...
      }
    },
    see() {
      console.log("Rule", this.rules == true);
      console.log("emailRule", this.emailRules == true);
      console.log("password", this.passwordMatch == true);
    },
    reset() {
      this.$refs.form.reset();
    },
    resetValidation() {
      this.$refs.form.resetValidation();
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
  width: 40%;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
}

.container {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
}
</style>