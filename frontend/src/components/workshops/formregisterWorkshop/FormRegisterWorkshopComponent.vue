<template>
<v-card-text class="card-text">
    <v-card-title style="text-align: center">
        <span class="text-h5">Workshop Registration Form</span>
    </v-card-title>
    <v-container>
        <v-row>
        <v-col cols="12">
            <v-text-field
            label="Fullname*"
            required
            v-model="fullname"
            :rules="fullnameRules"
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
            type="text"
            label="Sex*"
            v-model="sex"
            :rules="sexRules"
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
        <v-col cols="12" >
            <v-autocomplete
            label="Price*"
            :items="['free']"
            required
            v-model="price"
            :rules="priceRules"
            ></v-autocomplete>
        </v-col> 
        <v-btn
            block
            class="mb-2"
            color="indigo-accent-3"
            size="large"
            type="submit"
            variant="elevated"
        >
            REGISTER
        </v-btn>
        </v-row>
    </v-container>
</v-card-text>
</template>

<script>
export default {
  data() {
    return {
      fullname: "",
      gmail: "",
      sex: "",
      phoneNumber:"",
      price: "",
      fullnameRules: [
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
      sexRules: [
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
        priceRules: [
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
  background-color: #dce0dc;
  border-top: 30px solid #1770dd;
  border-radius: 10px;
  margin: 10px 320px 10px 320px; 
}
</style>