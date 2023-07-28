<template>
  <div class="d-flex flex-column">
    <v-row>
      <v-col sm="10">
        <v-list>
          <h3 class="ml-16">LIST OF WORKSHOP</h3>
        </v-list>
      </v-col>
    </v-row>
    <div style="margin: 0px 10%">
      <CardComponet :workshops="workshopPost" />
    </div>
  </div>
</template>
<script>
import axios from "@/stores/axiosHttp";
import CardComponet from "./WorkshopCardComponent.vue";
export default {
  components: {
    CardComponet,
  },
  data() {
    return {
      workshopPost: [],
    };
  },
  mounted() {
    axios
      .get("/workshop/workshopPost")
      .then((response) => {
        this.workshopPost = response.data.data;
        console.log(this.workshopPost)
      })
      .catch((err) => {
        return err;
      });
  },
};
</script>
