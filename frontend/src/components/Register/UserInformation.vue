<template>
  <v-form v-model="valid" class="form py-3 bg-grey-lighten-3">
    <v-container class="container">
      <h1>Detail Information</h1>
      <div class="inputFiled">
        <v-col cols="6" md="5">
          <v-text-field
            v-model="dateOfBirth"
            :rules="inputRules"
            label="Date of birth"
            type="date"
            required
          ></v-text-field>
        </v-col>
        <v-col cols="6" md="5">
          <v-text-field
            v-model="age"
            :rules="inputRules"
            label="Age"
            type="number"
            required
          ></v-text-field>
        </v-col>
      </div>
      <div class="inputFiled">
        <v-col cols="6" md="5">
          <v-combobox
            label="Gender"
            :rules="inputRules"
            placeholder="Plase Select.........."
            :items="gender"
          >
          </v-combobox>
        </v-col>
        <v-col cols="6" md="5">
          <v-combobox
            label="Province"
            :rules="inputRules"
            placeholder="Plase Select.........."
            :items="province">      
          </v-combobox>
        </v-col>
      </div>
    </v-container>
    <v-col cols="12" sm="6" md="10">
      <v-btn @click="goToDetailInformation" color="indigo-accent-3" block size="x-large">Continue</v-btn>
    </v-col>
  </v-form>
</template>


<script>
import "@mdi/font/css/materialdesignicons.css";
export default {
  methods: {
    goToDetailInformation() {
      this.$router.push("/");
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
  data: () => ({
    valid: true,
    dateOfBirth: "",
    age: "",
    gender: ["M", "F"],
    province: [
      "Banteay Meanchey",
      "Battambang",
      "Kampong Cham",
      "Kampong Chhnang",
      "Kampong Speu",
      "Kampot",
      "Kandal",
      "Kep",
      "Koh Kong",
      "Kratié",
      "Mondulkiri",
      "Oddar Meanchey",
      "Pailin",
      "Phnom Penh",
      "Preah Vihear",
      "Prey Veng",
      "Pursat",
      "Ratanakiri",
      "Siem Reap",
      "Sihanoukville",
      "Stung Treng",
      "Svay Rieng",
      "Takeo",
      "Tboung Khmum",
    ],
    verify: "",

    inputRules: [
      (value) => {
        if (value) return true;

        return "Input is required.";
      },
    ],
    show1: false,
  }),
};
</script>

  
<style scoped>
.inputFiled {
  display: flex;
  width: 100%;
  justify-content: center;
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
