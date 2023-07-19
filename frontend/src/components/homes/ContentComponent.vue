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
        <div
          class="d-flex justify-space-around align-center ma-4"
          style="width: 90%"
        >
          <v-list-item
            to="/newUpdate"
            style="
              padding: 10px 12%;
              border-right: 1px solid #3737e5;
              cursor: pointer;
            "
            class="selectButton"
          >
            <list-item-title>NEW UPDATE</list-item-title>
          </v-list-item>
          <v-list-item
            to="/popularUniversity"
            style="padding: 10px 8%; cursor: pointer"
            class="selectButton"
          >
            <list-item-title>POPULAR MAJOR</list-item-title>
          </v-list-item>
          <v-list-item
            to="/popularMajor"
            style="
              padding: 10px 12%;
              border-left: 2px solid #3737e5;
              cursor: pointer;
            "
            class="selectButton"
          >
            <list-item-title>POPULAR MAJOR</list-item-title>
          </v-list-item>
        </div>
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
  <v-row>
    <v-col sm="2">
      <h3 class="ml-8">NEW UPDATE</h3>
    </v-col>
    <v-col sm="8"></v-col>
    <v-col sm="2"></v-col>
  </v-row>
  <v-row style="margin: 0 10%">
    <v-col
      v-for="n in 8"
      :key="n"
      class="d-flex justift-center align-center child-flex"
      cols="6"
    >
      <v-img
        :src="`https://picsum.photos/500/300?image=${n * 5 + 10}`"
        :lazy-src="`https://picsum.photos/10/6?image=${n * 5 + 10}`"
        aspect-ratio="1"
        cover
        class="bg-grey-lighten-2"
      >
        <template v-slot:placeholder>
          <v-row class="fill-height ma-0" align="center" justify="center">
            <v-progress-circular
              indeterminate
              color="grey-lighten-5"
            ></v-progress-circular>
          </v-row>
        </template>
      </v-img>
    </v-col>
  </v-row>
  <v-pagination :length="4" rounded="circle" class="mb-8"></v-pagination>
 </section>
</template>

<script>
export default {
  data() {
    return {
      major: "",
      university: "",
      searchValue: "",
    };
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
