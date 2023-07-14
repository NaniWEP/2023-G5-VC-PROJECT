<template>
  <v-row justify="center">
    <v-dialog v-model="dialog" persistent width="1024">
      <template v-slot:activator="{ props }">
        <v-btn v-bind="props" class="btn"> Update </v-btn>
      </template>

      <v-card-text class="card-text">
        <v-card-title style="text-align: center">
          <span class="text-h5">Account information</span>
        </v-card-title>
        <v-container>
          <v-row>
            <v-col cols="12" sm="6" md="4">
              <v-text-field
                label="Username*"
                required
                v-model="userName"
                :rules="userNameRules"
              ></v-text-field>
            </v-col>
            <v-col cols="12" sm="6" md="4">
              <v-autocomplete
                :items="['M', 'F']"
                label="Gender*"
                v-model="gender"
                :rules="genderRules"
              ></v-autocomplete>
            </v-col>
            <v-col cols="12" sm="6" md="4">
              <v-text-field
                label="Date of birth*"
                type="date"
                required
                v-model="dateOfBirth"
                :rules="dateOfBirthRules"
              ></v-text-field>
            </v-col>
            <v-col cols="12">
              <v-text-field
                label="Email*"
                required
                v-model="gmail"
                :rules="gmailRules"
              ></v-text-field>
            </v-col>
            <v-col cols="12">
              <v-text-field
                label="Phone number*"
                type="number"
                required
                v-model="phoneNumber"
                :rules="phoneNumberRules"
              ></v-text-field>
            </v-col>
            <v-col cols="12" sm="6">
              <v-text-field
                label="Province*"
                type="text"
                required
                v-model="province"
                :rules="provinceRules"
              ></v-text-field>
            </v-col>
            <v-col cols="12" sm="6">
              <v-text-field label="Image*" type="file" required></v-text-field>
            </v-col>
          </v-row>
        </v-container>
        <v-card-actions>
          <v-spacer></v-spacer>
          <v-btn color="red-darken-1" variant="text" @click="dialog = false">
            <v-icon left>mdi-close</v-icon>
            Close
          </v-btn>
          <v-btn color="#3737e5" variant="text" @click="dialog = false">
            <v-icon left>mdi-content-save</v-icon>
            Save
          </v-btn>
        </v-card-actions>
      </v-card-text>
    </v-dialog>
  </v-row>
</template>

<script>
export default {
  data() {
    return {
      dialog: false,
      userName: "",
      gender: "",
      dateOfBirth: "",
      province: "",
      age: "",
      gmail: "",
      userNameRules: [
        (value) => {
          if (value?.length > 0) return true;

          return "Require to complete.";
        },
      ],
      genderRules: [
        (value) => {
          if (value?.length > 0) return true;

          return "Require to complete.";
        },
      ],
      gmailRules: [
        (v) =>
          /^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+$/.test(v) ||
          "E-mail must be valid",
      ],
      dateOfBirthRules: [
        (value) => {
          if (value?.length > 0) return true;

          return "Require to complete.";
        },
      ],
      provinceRules: [
        (value) => {
          if (value?.length > 0) return true;

          return "Require to complete.";
        },
      ],
      phoneNumberRules: [
        (value) => {
          if (value?.length > 0) return true;

          return "Require to complete.";
        },
      ],
    };
  },
};
</script>

<style scoped>
.bg-white {
  border-radius: 20px;
  box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset,
    rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;
}
.card-text {
  background-color: #fff;
  border-top: 30px solid #64dd17;
  border-radius: 10px;
}
.btn {
  background-color: #3737e5;
  color: white;
  margin-top: 4%;
  margin-left: 85%;
}
</style>