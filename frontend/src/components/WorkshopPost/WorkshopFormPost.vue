<template>
  <v-form v-model="valid" class="form">
    <v-container class="container">
      <h1>ADD WORKSHOP</h1>
      <div class="namefilled input">
        <v-col cols="12">
          <v-text-field
            :rules="nameRules"
            :counter="10"
            label="Title"
          ></v-text-field>
        </v-col>
      </div>
      <div class="namefilled input">
        <v-col cols="12" md="6">
          <v-text-field type="date" label="Date start"></v-text-field>
        </v-col>

        <v-col cols="12" md="6">
          <v-text-field type="time" label="Time Start"></v-text-field>
        </v-col>
      </div>
      <div class="namefilled input">
        <v-col cols="12" md="6">
          <v-text-field label="Organizer"></v-text-field>
        </v-col>

        <v-col cols="12" md="6" :rules="emailRules">
          <v-text-field label="Contact"></v-text-field>
        </v-col>
      </div>
      <div class="namefilled input">
        <v-col cols="12" md="6" :rules="emailRules">
          <v-text-field label="Location" counter></v-text-field>
        </v-col>
        <v-col cols="12" md="6">
          <v-file-input accept="image/*" label="Put your image"></v-file-input>
        </v-col>
      </div>
      <div class="inputFilled">
        <v-col cols="12">
          <v-textarea
            name="input-10-1"
            label="Description"
            counter
          ></v-textarea>
        </v-col>
      </div>
      <v-col cols="12" class="d-flex justify-space-between align-center">
        <v-btn class="ma-2" color="red-darken-1" size="x-large">
          <v-icon start icon="mdi-arrow-left"></v-icon>
          CANCEL
        </v-btn>
        <v-btn class="ma-2" color="green" size="x-large">
          <v-icon start icon="mdi-wrench"></v-icon>
          POST</v-btn
        >
      </v-col>
    </v-container>
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
      (value) => {
        if (value?.length <= 10) return true;

        return "Name must be less than 10 characters.";
      },
    ],
    loginEmailRules: [
      (v) => !!v || "Required",
      (v) => /.+@.+\..+/.test(v) || "E-mail must be valid",
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
      this.$router.push("/userinformation");
    },
    validate() {
      if (this.$refs.loginForm.validate()) {
        // submit form to server/API here...
      }
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
.namefilled {
  display: flex;
  width: 100%;
  justify-content: center;
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
}

.container {
  margin: 20px 0;
  border-radius: 20px;
  box-shadow: 0 0 30px 1px #0077b6;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
}
</style>
