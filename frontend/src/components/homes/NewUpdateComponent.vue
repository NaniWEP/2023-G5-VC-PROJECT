<template>
  <section>
    <v-row>
      <v-col>
        <h3 class="ml-8">University Post</h3>
        <div class="d-flex flex-column">
          <v-window>
            <v-window-item>
              <majorNewComponent :majors="NewMajorPost" />
            </v-window-item>
          </v-window>
        </div>
      </v-col>
    </v-row>
    <v-row>
      <v-col>
        <h3 class="ml-8">Workshop Post</h3>
        <div class="d-flex flex-column">
          <v-window>
            <v-window-item>
              <workshopNewComponent :workshops="newWorkShop" />
            </v-window-item>
          </v-window>
        </div>
      </v-col>
    </v-row>
  </section>
</template>
<script>
import axios from "../../stores/axiosHttp";
import workshopNewComponent from "./newUpdate/WorkshopNewUpdateComponent.vue";
import majorNewComponent from "./newUpdate/MajorNewUpdateComponent.vue";
export default{
    data(){
        return{
            newWorkShop: {},
            NewMajorPost: {}
        }
    },
    components:{
        workshopNewComponent,
        majorNewComponent
    },
    mounted(){
    axios
        .get("workshop/newUpdate")
        .then((respone) => {
        this.newWorkShop = respone.data.data;
        console.log(this.newWorkShop);
        })
        .catch((err) => {
        return err;
        });
    axios
        .get("university/newUpdate")
        .then((respone) => {
        this.NewMajorPost = respone.data.data;
        console.log(this.NewMajorPost);
        })
        .catch((err) => {
        return err;
        });
    }
}
</script>
