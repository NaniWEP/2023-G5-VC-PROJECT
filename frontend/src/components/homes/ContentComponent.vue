<template>
  <section>
    <v-row>
      <v-col sm="1"> </v-col>
      <v-col sm="10">
        <v-list
          style="width: 100%"
          class="d-flex flex-column align-center justify-center"
        >
          <h1>KNOWLEDGE AND OPPORTUNITY</h1>
          <v-tabs
            v-model="tab"
            fixed-tabs
            color="#3737e5"
            class="mb-8"
            style="width: 80%"
          >
            <v-tab
              value="newUpdate"
              class="selectButton"
              style="border-right: 2px solid #3737e5"
              >NEW UPDATE</v-tab
            >
            <v-tab
              value="popularUniversity"
              class="selectButton"
              style="
                border-left: 2px solid #3737e5;
                border-right: 2px solid #3737e5;
              "
              >POPULAR UNIVERSITY</v-tab
            >
            <v-tab
              value="popularMajor"
              class="selectButton"
              style="border-left: 2px solid #3737e5"
              >POPULAR MAJOR</v-tab
            >
          </v-tabs>
          <div class="d-flex" style="width: 90%">
            <v-select
              label="Select University"
              v-model="university"
              :items="[
                'Royal University of Law and Economics',
                'PNC',
                'Royal University of Phnom Penh',
                'Institute of Technology of Cambodia',
                'Norton University',
                'Mean Chey University',
              ]"
              class="mr-2"
              color="#3737e5"
            ></v-select>
            <v-select
              label="Select Major"
              v-model="major"
              :items="[
                'Wep Programming',
                'Computer Science',
                'Engineering',
                'Law',
                'Graphic Design',
                'Accounting',
              ]"
              color="#3737e5"
              class="mr-2"
            ></v-select>
            <v-text-field
              v-model="searchValue"
              label="Search ..."
              class="mr-2"
              color="#3737e5"
            ></v-text-field>
            <v-btn
              :to="{
                path: '/searhPage',
                query: {
                  university: university,
                  major: major,
                  searchValue: searchValue,
                },
              }"
              prepend-icon="mdi-search-web"
              color="#3737e5"
              class="text-white"
              height="55"
              min-width="150"
              elevation="4"
              elevated
              >Search</v-btn
            >
          </div>
        </v-list>
      </v-col>
      <v-col sm="1"> </v-col>
    </v-row>
    <div class="d-flex flex-column">
      <div>
        <v-window v-model="tab">
          <v-window-item value="newUpdate">
                <NewUpdateComponent />
          </v-window-item>
          <v-window-item value="popularUniversity">
                <PopularUniversityComponent />
          </v-window-item>
          <v-window-item value="popularMajor">
                <PopularMajorComponent />
          </v-window-item>
        </v-window>
      </div>
    </div>
  </section>
</template>

<script>
import NewUpdateComponent from "./NewUpdateComponent.vue";
import PopularMajorComponent from "./PopularMajorComponent.vue";
import PopularUniversityComponent from './PopularUniversityComponent.vue';
export default {
  data() {
    return {
      major: "",
      university: "",
      searchValue: "",
      tab: null,
    };
  },
  components: {
    NewUpdateComponent,
    PopularMajorComponent,
    PopularUniversityComponent
  },
  methods: {
    search() {
      if (
        (this.major !== undefined && this.university !== undefined) ||
        this.searchValue !== undefined
      ) {
        const repuest = {
          major: this.major,
          university: this.university,
          searchValue: this.searchValue,
        };
        console.log(repuest);
        this.major = "";
        this.university = "";
        this.searchValue = "";
      }
    },
  },
};
</script>
<style scoped>
.selectButton:hover {
  background-color: #3737e5;
  color: #ffff;
  transition: 800ms;
}
</style>
