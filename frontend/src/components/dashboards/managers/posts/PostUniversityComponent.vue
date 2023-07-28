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
          <h1>ADD UNIVERSITY</h1>
          <div class="namefilled input">
            <v-col cols="12" md="5">
              <v-text-field
                :rules="titleRules"
                v-model="title"
                label="Put your title for your university"
              ></v-text-field>
            </v-col>
            <v-col cols="12" md="6">
              <v-text-field
                type="date"
                :rules="dateRules"
                v-model="date"
                label="Date start"
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
            <v-btn type="submite" class="ma-2 mr-10 text-white" color="#3737e5" size="x-large" @click="dialog = false">           
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
      title: "",
      date: "",
      time: "",
      organizer: "",
      contact: "",
      location: "",
      image: "",
      description: "",
      workshopInfo: null,
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
      submitData() {
        this.workshopInfo = {
          name: this.title,
          date: this.date,
          time: this.time,
          organizer: this.organizer,
          contact: this.contact,
          location: this.location,
          image: this.image,
          description: this.description,
        }
        // axios.post("api/workshopData", {
        //   this.workshopInfo
        // })
        // .than(response => {
        //   console.log(response.data)
        // })
        // .catch(error => {
        //   console.log(error.message)
        // })
        },
      },
  };  
</script>

<style scoped>
  .btn{
    margin-right: 81%;
    margin-top: 10px;
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
  .container {
    margin: 10px 0px;
    border-radius: 10px;
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
