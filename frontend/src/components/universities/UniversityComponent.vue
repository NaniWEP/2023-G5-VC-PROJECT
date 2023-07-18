<template>
  <section>
    <v-row>
      <v-col sm="2"> </v-col>
      <v-col sm="8">
        <v-list
          style="width: 100%"
          class="d-flex flex-column align-center justify-center"
        >
          <h1 class="mb-8">KNOWLEDGE AND OPPORTUNITY</h1>
          <v-tabs v-model="tab" align-tabs="center" color="#3737e5" style="width: 50%">
              <v-tab value="university">UNIVERSITIES</v-tab>
              <v-tab value="major">MAJOR POSTS</v-tab>
          </v-tabs>
        </v-list>
      </v-col>
      <v-col sm="2"> </v-col>
    </v-row>
    <div class="d-flex flex-column">
      <div style="margin: 0px 10%">
        <v-window v-model="tab">
          <v-window-item value="university">
            <CardComponet :universities="universities" />
          </v-window-item>
          <v-window-item value="major">
            <CardComponet :universities="universities" />
          </v-window-item>
        </v-window>
      </div>
    </div>
  </section>
</template>
<script>
import axios from "../../stores/axiosHttp";
import CardComponet from "./UniversityCardComponent.vue";
export default {
  components: {
    CardComponet,
  },
  data() {
    return {
      universities: [],
      tab: null,
    };
  },
  mounted() {
    axios
      .get("/university")
      .then((respone) => {
        this.universities = respone.data.data;
      })
      .catch((err) => {
        return err;
      });
  },
};
</script>
