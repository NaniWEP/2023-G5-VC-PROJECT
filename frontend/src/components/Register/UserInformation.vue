<template>

      <v-form v-model="valid" class="form py-3 bg-grey-lighten-3">
        <v-container class="container">
          <h1>Detail Information</h1>
          <div class="inputFiled">
            <v-col cols="12" md="12">
              <v-combobox
                label="Province"
                v-model="selectProvince"
                :rules="inputRules"
                placeholder="Plase Select.........."
                :items="province"
              >
              </v-combobox>
            </v-col>
          </div>
          <div class="inputFiled">
            <v-col cols="12" md="12">
              <v-combobox
                label="Gender"
                :rules="inputRules"
                placeholder="Plase Select.........."
                :items="gender"
                v-model="selectGender"
              >
              </v-combobox>
            </v-col>
            <v-col cols="12" md="12">
              <v-text-field
                v-model="dateOfBirth"
                :rules="inputRules"
                label="Date of birth"
                type="date"
                required
              ></v-text-field>
            </v-col>
          </div>
        </v-container>
        <v-col cols="12" class="d-flex justify-space-between align-center">
          <v-btn class="ma-2" color="red-darken-1" size="x-large" to="/">
            <v-icon start icon="mdi-arrow-left"></v-icon>
            CANCEL
          </v-btn>
          <v-btn class="ma-2" color="green" @click="getUser" size="x-large">
            CONTINUE
          </v-btn>
        </v-col>
        <p class="w-100">
          Do you have an account? <router-link to="/login">Login</router-link>
        </p>
      </v-form>
</template>


<script>
import "@mdi/font/css/materialdesignicons.css";
export default {
  name: "UserInformation",
  methods: {
    getUser() {
      console.log();
      console.log();
      console.log();
      if (
        this.dateOfBirth !== "" &&
        this.selectGender !== "" &&
        this.selectProvince !== ""
      ) {
        this.user.push({
          firstName: this.$router.currentRoute.value.query.firstName,
          lastName: this.$router.currentRoute.value.query.lastName,
          email: this.$router.currentRoute.value.query.email,
          password: this.$router.currentRoute.value.query.password,
          gender: this.selectGender,
          dateOfBrith: this.dateOfBirth,
          province: this.selectProvince,
        });

        console.log(this.user);
        this.$router.push("/");
      }
    },
  },
  // show(){
  //   this.getData;
  // },
  data: () => ({
    valid: true,
    dateOfBirth: "",
    age: "",
    selectGender: "",
    selectProvince: "",
    gender: ["M", "F"],
    user: [],
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
  flex-direction: column;
  width: 100%;
  justify-content: center;
}
.form {
  width: 40%;
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
}
</style>
