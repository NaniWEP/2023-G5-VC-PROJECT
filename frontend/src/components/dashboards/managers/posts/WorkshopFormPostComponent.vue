<template>
  <v-row justify="center">
    <v-dialog
      v-model="dialog"
      persistent
      width="1024">
      <template v-slot:activator="{ props }">
        <v-btn class="btn" color="primary" v-bind="props">+ ADD</v-btn>    
      </template>
      <v-card class="boder">
        <v-container class="container">
          <h1>ADD WORKSHOP</h1>
          <div class="namefilled input">
            <v-col cols="12" md="5">
              <v-text-field
                :rules="titleRules"
                v-model="name"
                label="Put your title for your workshop"
              ></v-text-field>
            </v-col>
            <v-col cols="12" md="6">
              <v-text-field
                :rules="locationRules"
                v-model="location"
                label="Location"
                counter
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
                :rules="timeRules"
                v-model="time"
                label="Time Start"
                required
              ></v-text-field>
            </v-col>
          </div>
          <div class="namefilled input">
            <v-col cols="12" md="5">
              <v-text-field
                :rules ="organizerRules"
                v-model="organizer"
                label="Organizer"
              ></v-text-field>
            </v-col>
            <v-col cols="12" md="6">
              <v-text-field
                :rules="contactRules"
                v-model="contact"
                label="Contact with email"
                required
              ></v-text-field>
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
          <v-col cols="12" class="d-flex justify-space-between align-center">
            <v-btn class="ma-2 ml-10" color="red-darken-1" size="x-large" @click="dialog = false">
              <v-icon start icon="mdi-arrow-left"></v-icon>
              CANCEL
            </v-btn>
            <v-btn type="submite" class="ma-2 mr-10 text-white" color="#3737e5" size="x-large" @click="PostworkShop">           
              <v-icon start icon="mdi-wrench"></v-icon>
              POST
            </v-btn>
          </v-col>
        </v-container>
      </v-card>
    </v-dialog>
  </v-row>
</template>


<script>
import "@mdi/font/css/materialdesignicons.css"
  export default {
    data: () => ({
      dialog: false,
      valid: true,
      name: "",
      date: "",
      time: "",
      organizer: "",
      contact: "",
      location: "",
      description: "",
      titleRules: [
        (value) => {
          if (value) return true;
          return "Title is requird.";
        },
      ],
      locationRules:[
        (value) => {
          if (value) return true;
          return "location is requird.";
        },
      ],
      dateRules: [
        (value) => {
          if (value) return true;
          return "Date is requird.";
        },
      ],
      timeRules: [
        (value) => {
          if (value) return true;
          return "time is requird.";
        },
      ],
      organizerRules:[
        (value) => {
          if (value) return true;
          return "organizer is requird.";
        },
      ],
      // contactRoles: [
      //   (v) => !!v || "Email is Required",
      //   (v) => /.+@.+\..+/.test(v) || "E-mail must be valid",
      // ],

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
        PostworkShop() {
          if (this.name!== "" && this.date !== "" && this.time !== "" && this.description !== ""
              && this.organizer !== ""&& this.contact !== ""&& this.location !== "" && this.image !== ""){
            const workshop = {
              name: this.name,
              date: this.date,
              time: this.time,
              organizer: this.organizer,
              contact: this.contact,
              location: this.location,
              description: this.description
            }
            this.$emit('workshop',workshop);
            this.name = "",
            this.date = "",
            this.time = "",
            this.organizer = "",
            this.contact = "",
            this.location = "",
            this.description = ""
          }
            this.dialog = false
          }
      }
  }
       
</script>

<style scoped>
  .btn{
    margin-right: 85%;
  }
  .header{
    text-align: center;
    margin-left: 81%;
  }
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
  .boder{
    border: 2px #3737e5 solid;
  }
</style>
