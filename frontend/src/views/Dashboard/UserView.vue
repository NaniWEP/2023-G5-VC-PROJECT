<template>
    <dashboard-component></dashboard-component>
    <v-card class="ml-15 mt-5 mr-8 mb-3 bg-grey-lighten-2 p-10">
        <h1 class="text-light-green-accent-4 ml-10">Profile Detail</h1>
    </v-card>
    <v-card class="ml-15 mt-3 mr-8 mb-3 h-90 bg-grey-lighten-2">
            <hr>
        <div class="content">
            <div>
                <img src="../../assets/img.jpg" alt="">
                <p>GillyNa</p>
            </div>
            <div class="group mt-15 mr-50">
                <h3>Name:{{}}</h3>
                <h3>Gender:{{}}</h3>
                <h3>Email:{{}}</h3>
                <h3>DateBirth:{{}}</h3>
                <h3>Province:{{}}</h3>
                <h3>Phone Number:{{}}</h3>               
                <div class="text-center">
                    <v-btn class="mt-16" color="green-darken-2"  size="large"  v-bind="props"> Change Information   
                    <v-dialog v-model="dialog" activator="parent"  width="auto">
                        <v-card>
                            <v-container class="bg-grey-lighten-2">
                            <v-row>
                                <v-col cols="12" sm="6"   >    
                                <v-text-field
                                    label="Your name"
                                    variant="solo"
                                ></v-text-field>
                                </v-col>

                                <v-col cols="12" sm="6">
                               <v-text-field
                                    label="Your gender"
                                    variant="solo"
                                ></v-text-field>
                                </v-col>

                                <v-col cols="12" sm="6"> 
                                <v-text-field
                                    label="Your email"
                                    variant="solo"
                                ></v-text-field>
                                </v-col>

                                <v-col cols="12" sm="6">   
                                <v-text-field
                                    label="Your DateBirth"
                                    variant="solo"
                                ></v-text-field>
                                </v-col>

                                <v-col cols="12" sm="6">
                               <v-text-field
                                    label="Your province"
                                    variant="solo"
                                ></v-text-field>
                                </v-col>

                                <v-col  cols="12" sm="6">    
                                <v-text-field
                                    label="Your number"
                                    variant="solo"
                                ></v-text-field>
                                </v-col>

                            </v-row>
                                <v-card-actions>
                                <v-btn color="primary" size="large"  @click="dialog = false">Update</v-btn>
                                </v-card-actions>
                            </v-container>
                        </v-card>
                    </v-dialog>         
                    </v-btn>
                </div>  
            </div>
        </div>
    </v-card>
</template>

<script>
import DashboardComponent from '@/components/Dashboard/DashboardComponent.vue'
export default {
  components: { DashboardComponent },

    data () {
    return {
        dialog: false,
    }
    },

  }
</script>

<style scoped>
    hr{
     margin: 50px 50px 0px 50px; 
     border: 2px rgb(17, 224, 17) solid;
    }
    .content{
        display: flex;
        justify-content: space-around;
    }
    img{
        margin: 20px 20px 0px 20px;
        width:  150px;
        height: 150px;
        
    }
    p{
        padding: 10px;
        margin-left: 70px;
    }
    .group{
        margin: 100px;
    }
</style>