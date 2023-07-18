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
                :format="customFormat"
                required
              ></v-text-field>
            </v-col>
          </div>
        </v-container>
        <v-col cols="12" class="d-flex justify-space-between align-center">
          <v-btn class="ma-2" color="red-darken-1" size="x-large"  @click="backToRegister">
            <v-icon start icon="mdi-arrow-left"></v-icon>
            BACK
          </v-btn>
          <v-btn class="ma-2" color="green" @click="getUser" size="x-large">
            CREATE
          </v-btn>
        </v-col>
        <p class="w-100">
          Do you have an account? <router-link to="/login">Login</router-link>
        </p>
      </v-form>
</template>


<script>
import "@mdi/font/css/materialdesignicons.css";
import axios from "@/stores/axiosHttp";
// import axios from 'axios'
export default {
  name: "UserInformation",
  methods: {
    getUser() {
      if (
        this.dateOfBirth !== "" &&
        this.selectGender !== "" &&
        this.selectProvince !== ""
      ) {
        this.user.push({
          firstName: this.$route.query.firstName,
          lastName: this.$route.query.lastName,
          email: this.$route.query.email,
          password: this.$route.query.password,
          gender: this.selectGender,
          dateOfBrith: this.dateOfBirth,
          province: this.selectProvince,
        });
        console.log(this.user);
        this.register()

      }
    },
    backToRegister(){
      this.$router.push({
          path: "/register",
          query: {
            firstName: this.$route.query.firstName,
            lastName: this.$route.query.lastName,
            email: this.$route.query.email,
            password: this.$route.query.password,
          },
      })

    },
    async register() {
      try {
        await axios
          .post("/register", {
            first_name: this.$router.currentRoute.value.query.firstName,
            last_name: this.$router.currentRoute.value.query.lastName,
            email: this.$router.currentRoute.value.query.email,
            password: this.$router.currentRoute.value.query.password,
            gender: this.selectGender,
            date_of_birth: this.dateOfBirth,
            province: this.selectProvince,
            role_id: 1,
          })
          .then((response) => {
            console.log(response.data);
            if(response.data.success){
              localStorage.setItem("myToken", response.data.token)
              console.log(response.data.message);
              this.$router.push("/");
            }else{
            console.log(response.data.message);
            }
          });
      } catch (error) {
        console.log(error.response.data.message);
      }
    },
  },
  // show(){
  //   this.getData;
  // },
  data: () => ({
    valid: true,
    customFormat: (val) =>
        val ? new Date(val).toISOString().substr(0, 10) : null,
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
