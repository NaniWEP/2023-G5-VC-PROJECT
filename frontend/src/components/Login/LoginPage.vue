<template>
    <v-card class="card px-6 py-3 bg-grey-lighten-3">
        <v-img class="image" src="../../assets/use.png"></v-img>
        <h1 class="text-center">WELLCOME BACK</h1>
      <v-form
        v-model="form"
        @submit.prevent="onSubmit">
     
        <v-text-field
          v-model="email"
          :readonly="loading"
          :rules="emailRules"
          class="mb-2 mt-3"
          clearable
          prepend-inner-icon="mdi-email-outline"
          label="Email"
        ></v-text-field>

        <v-text-field
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

        <v-btn
          :disabled="!form"
          :loading="loading"
          block
          color="indigo-accent-3"
          size="large"
          type="submit"
          variant="elevated"
        > LOGIN </v-btn>
      </v-form>
        <p>Don't have account? <router-link to="/register">Register</router-link></p>
    </v-card>
</template>


<script>
import '@mdi/font/css/materialdesignicons.css'
  export default {
    data: () => ({
      email: "",
      password: "",
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
      onSubmit () {
        if (!this.form) return
        this.loading = true
        setTimeout(() => (this.loading = false), 1000)
        this.loginInfo = {email: this.email, password: this.password}
        console.log(this.loginInfo)
      },
    },

  }
</script>

<style>
  .image{
    width: 35%;
    margin-left: 32%;
  }

  p{
    padding: 15px;
  }

  .card{
    width: 35%;
  }
</style>
