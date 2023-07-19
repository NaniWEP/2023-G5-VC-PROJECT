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
          <v-tabs v-model="tab" fixed-tabs color="#3737e5" class="mb-8" style="width: 80%">
              <v-tab value="university" style="border-right: 2px solid #3737e5" class="p-4">UNIVERSITIES</v-tab>
              <v-tab value="major" style="border-left: 2px solid #3737e5">MAJOR POSTS</v-tab>
          </v-tabs>
        </v-list>
      </v-col>
      <v-col sm="2"> </v-col>
    </v-row>
    <div class="d-flex flex-column">
      <div style="margin: 0px 10%">
        <v-window v-model="tab">
          <v-window-item value="university">
            <UniversityCardComponet :universities="universities" />
          </v-window-item>
          <v-window-item value="major">
            <MajorCardComponet :majors="majors" />
          </v-window-item>
        </v-window>
      </div>
    </div>
    <v-pagination :length="4" rounded="circle" class="mb-8"></v-pagination>
  </section>
</template>
<script>
import axios from "../../stores/axiosHttp";
import UniversityCardComponet from "./UniversityCardComponent.vue";
import MajorCardComponet from "./MajorCardCompoent.vue";
export default {
  components: {
    UniversityCardComponet,
    MajorCardComponet
  },
  data() {
    return {
      universities: [],
      majors: [],
      tab: null,
    };
  },
  mounted() {
    axios
      .get("/university")
      .then((respone) => {
        this.universities = respone.data.data;
        console.log(respone.data.data);
      })
      .catch((err) => {
        return err;
      });
    axios
      .get("/university/majorPost")
      .then((respone) => {
        this.majors = respone.data.data;
      })
      .catch((err) => {
        return err;
      });
  },
};
</script>
