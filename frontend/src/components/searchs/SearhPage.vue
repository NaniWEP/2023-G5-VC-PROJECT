<template>
  <div id="body">
    <navbar-component-vue></navbar-component-vue>
    <div class="search">
      <search-bar-vue @request="getData"></search-bar-vue>
    </div>
    <ResultCardVue
      v-for="major in rseults"
      :key="major"
      :major="major"
    ></ResultCardVue>
  </div>
</template>
<script>
import NavbarComponentVue from "../layouts/NavbarComponent.vue";
import ResultCardVue from "./ResultCard.vue";
import SearchBarVue from "./SearchBar.vue";
import axios from "@/stores/axiosHttp";
export default {
  components: {
    NavbarComponentVue,
    SearchBarVue,
    ResultCardVue,
  },
  data() {
    return {
      majors: [],
      rseults: [],
    };
  },
  created() {
    // Call the showResultFromHomePage method to display the search results
    this.showResultFromHomePage();
    this.getDataFromDB();
  },
  methods: {
    getData(request) {
      this.request = request;
      this.showResult();
    },
    // reference https://poe.com/
    showResult() {
      this.rseults = [];
      const { major, university, searchValue } = this.request;
      for (let majorObj of this.majors) {
        console.log(majorObj.title);
        if (
          (majorObj.title.toLowerCase().includes(major.toLowerCase()) ||
            !major) &&
          (majorObj.university.name
            .toLowerCase()
            .includes(university.toLowerCase()) ||
            !university) &&
          (majorObj.title.toLowerCase().includes(searchValue.toLowerCase()) ||
            majorObj.university.name
              .toLowerCase()
              .includes(searchValue.toLowerCase()) ||
            !searchValue)
        ) {
          this.rseults.push(majorObj);
        }
      }
    },
    showResultFromHomePage() {
      this.rseults = [];
      for (let major of this.majors) {
        if (
          major.title === this.$route.query.major ||
          major.university === this.$route.query.university ||
          major.university === this.$route.query.searchValue ||
          major.title === this.$route.query.searchValue
        ) {
          this.rseults.push(major);
        }
      }
    },
    getDataFromDB() {
      axios
        .get("/majors")
        .then((response) => {
          this.majors = response.data.data;
          // console.log(response.data.data);
        })
        .catch((error) => {
          console.log(error);
        });
    },
  },
};
</script>

<style scoped>
#body {
  margin-top: 50px;
  display: flex;
  flex-direction: column;
}
</style>