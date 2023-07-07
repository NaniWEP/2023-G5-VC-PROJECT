<template>
    <v-card class="mx-auto px-7 py-6 bg-grey-lighten-2 mt-10 bt-2-black" max-width="450">
        <img src="../../assets/use.png" alt="">
        <h1 class="text-center">WELLCOM BACK</h1>
      <v-form
        v-model="form"
        @submit.prevent="onSubmit">
     
        <v-text-field
          v-model="email"
          :readonly="loading"
          :rules="[required]"
          class="mb-2 mt-3"
          clearable
          variant="outlined"
          prepend-inner-icon="mdi-email-outline"
          label="Email"
        ></v-text-field>

        <v-text-field
          v-model="password"
          :readonly="loading"
          :rules="[required,counter]"
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
          color="green-darken-2"
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
import 'bootstrap/dist/css/bootstrap.css'
  export default {
    
    data(){
        return{
        form: false,
        email: "",
        password: "",
        loading: false,
        visible: false,
    }
    
    },

    methods: {
      onSubmit () {
        if (!this.form) 
        return this.loading = true
        setTimeout(() => (this.loading = false), 200)
      },

      required(value){
        return !!value || 'Field is required.'
        
      },
      counter(value){
        return value.length <= 8 || 'Password must be at least 8'
      },
      email1(value){
        const validate = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
            return validate.test(value) || 'Invalid e-mail.'
      }

    //     rules:{
    //     required: value => !!value || 'Field is required.',
    //     counter: value => value.length <= 8 || 'Password must be at least 8',
    //     email: value => {
    //         const validate = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    //         return validate.test(value) || 'Invalid e-mail.'
    //       },
    //   }
      
    },
  }
</script>

<style scoped>

  img{
    width: 130px;
    margin-left: 35%;
  }

  p{
    padding: 15px;
  }
</style>

