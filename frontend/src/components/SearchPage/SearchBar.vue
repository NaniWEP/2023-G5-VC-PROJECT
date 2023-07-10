<template>
  <v-row>
    <v-col sm="1"> </v-col>
    <v-col sm="10">
      <v-list
        style="width: 100%"
        class="d-flex flex-column align-center justify-center"
      >
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
            label="Search ..."
            class="mr-2"
            color="#3737e5"
            v-model="searchValue"
          ></v-text-field>
          <v-btn
           @click="search"
            to="/searchPage"
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
  // props:["request"],
  methods: {
    search() {
      if (
        this.major !== undefined ||
        this.university !== undefined ||
        this.searchValue !== undefined
      ) {
        const repuest = {
          major: this.major,
          university: this.university,
          searchValue: this.searchValue,
        };
        (this.major = ""),
          (this.university = ""),
          (this.searchValue = ""),
          this.$emit("request", repuest);
      }
    },
  },
};
</script>