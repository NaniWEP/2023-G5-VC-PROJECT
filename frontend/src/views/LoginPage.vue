<template>
    <v-card class="mx-auto px-7 py-6 bg-grey-lighten-3 mt-10" max-width="450">
        <!-- <img src="../assets/use.png" alt=""> -->
        <h1 class="text-center">WELLCOM BACK</h1>
      <v-form
        v-model="form"
        @submit.prevent="onSubmit">
     
        <v-text-field
          v-model="username"
          :readonly="loading"
          :rules="[required]"
          class="mb-2 mt-3"
          clearable
          variant="outlined"
          prepend-inner-icon="mdi-email-outline"
          label="Username"
        ></v-text-field>

        <v-text-field
          v-model="password"
          :readonly="loading"
          :rules="[required]"
          clearable
          label="Password"
          variant="outlined"
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
          color="success"
          size="large"
          type="submit"
          variant="elevated"
        > LOGIN </v-btn> <hr>
      </v-form>
        <p>Don't have account? <router-link to="/register">Register</router-link></p>
    </v-card>
</template>


<script>
import '@mdi/font/css/materialdesignicons.css'
  export default {
    data: () => ({
      form: false,
      username: "",
      password: "",
      loading: false,
      visible: false,
    }),

    methods: {
      onSubmit () {
        if (!this.form) return

        this.loading = true

        setTimeout(() => (this.loading = false), 2000)
      },
      required (v) {
        return !!v || 'Field is required'
      },
    },
  }
</script>

<style scoped>
  img{
    width: 130px;
    margin-left: 35%;
  }

  /* p{
    padding: 10px;
  } */
</style>