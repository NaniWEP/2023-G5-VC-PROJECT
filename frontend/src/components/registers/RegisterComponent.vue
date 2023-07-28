<template>
  <!--  -->
  <!-- Resource : https://canvasjs.com/vuejs-charts/basic-chart-example/ -->
  <!--  -->

  <!-- First form -->
  <v-form v-if="!toggle" v-model="valid" class="form">
    <v-container class="container">
      <h1 class="text-center">Rigister</h1>
      <div class="google">
        <GoogleAuth class="googleLog" />
      </div>
      <hr />
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
          v-if="!emailError"
          :style="{ width: '97%' }"
          v-model="email"
          :rules="emailRules"
          label="E-mail"
          required
        >
        </v-text-field>
        <v-text-field
          v-else
          :style="{ width: '97%' }"
          v-model="email"
          :rules="emailRules"
          :error-messages="[emailError]"
          label="E-mail"
          required
        >
        </v-text-field>
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
        <p class="w-100 ml-5">
          Do you have an account? <router-link to="/login">Login</router-link>
        </p>
      </div>
      <v-col cols="12" class="d-flex justify-space-between align-center">
        <v-btn class="ma-2" color="red-darken-1" size="x-large" to="/">
          <v-icon start icon="mdi-arrow-left"></v-icon>
          CANCEL
        </v-btn>
        <v-btn
          class="ma-2"
          color="indigo-accent-3"
          size="x-large"
          @click="getDetailInformation"
        >
          CONTINUE
        </v-btn>
      </v-col>
      <p>1/2</p>
    </v-container>
  </v-form>

  <!-- second form -->

  <v-form v-else v-model="valid" class="form py-3">
    <v-container class="container">
      <h1 class="mb-10">More Information</h1>
      <div class="google">
        <GoogleAuth class="googleLog" />
      </div>
      <hr />
      <div class="inputFiled w-100">
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
      <div class="inputFiled w-100">
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
          <p class="w-100">
            Do you have an account? <router-link to="/login">Login</router-link>
          </p>
        </v-col>
      </div>
      <v-col cols="12" class="d-flex justify-space-between align-center">
        <v-btn class="ma-2" color="red-darken-1" size="x-large" @click="back">
          <v-icon start icon="mdi-arrow-left"></v-icon>
          BACK
        </v-btn>
        <v-btn
          class="ma-2"
          color="indigo-accent-3"
          size="x-large"
          @click="register"
        >
          SIGN UP
        </v-btn>
      </v-col>
      <p>2/2</p>
    </v-container>
  </v-form>
</template>

<script>
import "@mdi/font/css/materialdesignicons.css";
import GoogleAuth from "../google/GoogleAuth.vue";
import axios from "@/stores/axiosHttp";
import { setCookie } from "@/stores/cookie.js";
export default {
  components: { GoogleAuth },
  data: () => ({
    toggle: false,
    firstName: "",
    lastName: "",
    email: "",
    emailError: "",
    password: "",
    verify: "",
    customFormat: (val) =>
      val ? new Date(val).toISOString().substr(0, 10) : null,
    dateOfBirth: "",
    selectGender: "",
    selectProvince: "",
    gender: ["MALE", "FEMALE"],
    province: [
      'Banteay Meanchey',
      'Battambang',
      'Kampong Cham',
      'Kampong Chhnang',
      'Kampong Speu',
      'Kampot',
      'Kandal',
      'Kep',
      'Koh Kong',
      'Kratié',
      'Mondulkiri',
      'Oddar Meanchey',
      'Pailin',
      'Phnom Penh',
      'Preah Vihear',
      'Prey Veng',
      'Pursat',
      'Ratanakiri',
      'Siem Reap',
      'Sihanoukville',
      'Stung Treng',
      'Svay Rieng',
      'Takeo',
      'Tboung Khmum',
    ],
    inputRules: [
      (value) => {
        if (value) return true;

        return "Input is required.";
      },
    ],
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
    getDetailInformation() {
      let valid = true;
      if (
        this.firstName === "" ||
        this.lastName === "" ||
        this.email === "" ||
        this.password === "" ||
        !this.verify
      ) {
        valid = false;
      } else if (!/\S+@\S+\.\S+/.test(this.email)) {
        console.log("Invalid email format.");
        valid = false;
      } else if (this.password !== this.verify) {
        valid = false;
      }
      if (valid) {
        this.toggle = true;
      }
    },
    back() {
      this.toggle = false;
    },
    async register() {
      try {
        if (
          this.dateOfBirth !== "" &&
          this.selectGender !== "" &&
          this.selectProvince !== ""
        ) {
          await axios
            .post("/register", {
              first_name: this.firstName,
              last_name: this.lastName,
              email: this.email,
              password: this.password,
              gender: this.selectGender,
              date_of_birth: this.dateOfBirth,
              province: this.selectProvince,
              role_id: 1,
            })
            .then((response) => {
              console.log(response.data);
              if (response.data.success) {
                let token = response.data.token;

                setCookie("myToken", token, 1);
                setCookie("myId", response.data.data.id, 1);

                // send user to:
                this.$router.push("/");
              } else {
                console.log(response.data.message);
              }
            });
        }
      } catch (error) {
        this.emailError = error.response.data.message.email;
        this.toggle = false;
        this.email = "";
        console.log(error.response);
      }
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
  border-radius: 10px;
  color: #ffff;
  background-color: #ffffff05;
}

.container {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  padding: 10px;
}
.google {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  margin-bottom: 5px;
  margin-top: 5px;
}
.googleLog {
  width: 90%;
}

hr {
  border: none;
  width: 100%;
  border-top: 3px double #ffffff;
  text-align: center;
  height: 5px;
}
</style>
