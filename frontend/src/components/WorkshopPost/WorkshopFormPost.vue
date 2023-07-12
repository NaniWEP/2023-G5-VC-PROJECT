<template>
  <v-form v-model="valid" class="form">
    <v-container class="container">
      <h1>ADD WORKSHOP</h1>
      <div class="namefilled input">
        <v-col cols="11">
          <v-text-field
            :rules="titleRules"
            v-model="title"
            label="Put your title for your workshop"
          ></v-text-field>
        </v-col>
      </div>
      <div class="namefilled input">
        <v-col cols="12" md="5">
          <v-text-field
            type="date"
            :rules="dateRules"
            v-model="date"
            label="Date start"
          ></v-text-field>
        </v-col>

        <v-col cols="12" md="6">
          <v-text-field
            type="time"
            :roles="timeRoles"
            v-model="time"
            label="Time Start"
            required
          ></v-text-field>
        </v-col>
      </div>
      <div class="namefilled input">
        <v-col cols="12" md="5">
          <v-text-field 
          :roles:="ordanizerRoles"
          v-model="organizer" 
          label="Organizer"></v-text-field>
        </v-col>

        <v-col cols="12" md="6">
          <v-text-field
            :rules="contactRoles"
            v-model="contact"
            label="Contact with email"
            required
          ></v-text-field>
        </v-col>
      </div>
      <div class="namefilled input">
        <v-col cols="12" md="4">
          <v-text-field
            v-model="location"
            label="Location"
            counter
          ></v-text-field>
        </v-col>
        <v-col cols="12" md="7">
          <v-file-input
            accept="image/*"
            v-model="image"
            label="Put your image"
          ></v-file-input>
        </v-col>
      </div>
      <div class="inputFilled">
        <v-col cols="11">
          <v-textarea
            name="input-10-1"
            :roles="rules"
            v-model="description"
            label="Description"
            required
            counter
          ></v-textarea>
        </v-col>
      </div>
      <v-col cols="12" class="d-flex justify-space-around align-center">
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
    title: "",
    date: "",
    time: "",
    organizer: "",
    contact: "",
    location: "",
    image: "",
    description: "",
    users: [],
    titleRules: [
      (value) => {
        if (value) return true;
        return "Title is requird.";
      },
    ],
    dateRules: [
      (value) => {
        if (value) return true;
        return "Date is requird.";
      },
    ],
    timeRoles: [
      (value) => {
        if (value) return true;
        return "Date is requird.";
      },
    ],
    contactRoles: [
      (v) => !!v || "Email is Required",
      (v) => /.+@.+\..+/.test(v) || "E-mail must be valid",
    ],

    show1: false,
    rules: {
      required: (value) => !!value || "Required.",
      min: (v) => (v && v.length >= 10) || "Min 10 characters",
    },
  }),
  computed: {
    passwordMatch() {
      return () => this.password === this.verify || "Password must match";
    },
  },
  methods: {
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
  width: 60%;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
}

.container {
  margin: 20px 0px;
  border-radius: 20px;
  box-shadow: 0 0 30px 1px #0077b6;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
}
</style>
