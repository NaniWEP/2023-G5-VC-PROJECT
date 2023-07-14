<template>
  <div class="d-flex flex-column">
    <v-row>
      <v-col sm="10">
        <v-list>
          <h3 class="ml-16">LIST OF UNIVERSITY</h3>
        </v-list>
      </v-col>
    </v-row>
    <div style="margin: 0px 10%">
      <CardComponet :universities="universities" />
    </div>
  </div>
</template>
<script>
import axios from "axios";
import CardComponet from "./UniversityCardComponent.vue";
export default {
  components: {
    CardComponet,
  },
  data() {
    return {
      universities: [],
    };
  },
  mounted() {
    axios
      .get("http://127.0.0.1:8000/api/university")
      .then((respone) => {
        this.universities = respone.data.data;
      })
      .catch((err) => {
        return err;
      });
  },
};
</script>
