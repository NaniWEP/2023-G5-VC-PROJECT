<template>
  <div id="body">
    <navbar-component-vue></navbar-component-vue>
    <div class="search">
      <search-bar-vue @request="getData"></search-bar-vue>
    </div>
    <div>
      <v-progress-linear
        v-show="loading"
        indeterminate
        color="cyan"
      ></v-progress-linear>
      <div v-for="major in rseults" :key="major.id">
        <ResultCardVue :major="major"></ResultCardVue>
      </div>
    </div>
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
      dataFetched: false,
      loading: true,
    };
  },
  mounted() {
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
      this.loading = false;
    },
    showResultFromHomePage() {
      this.results = [];
      for (let majorObj of this.majors) {
        if (
          (majorObj.title
            .toLowerCase()
            .includes(this.$route.query.major.toLowerCase()) ||
            !this.$route.query.major) &&
          (majorObj.university.name
            .toLowerCase()
            .includes(this.$route.query.university.toLowerCase()) ||
            !this.$route.query.university) &&
          (majorObj.title
            .toLowerCase()
            .includes(this.$route.query.searchValue.toLowerCase()) ||
            majorObj.university.name
              .toLowerCase()
              .includes(this.$route.query.searchValue.toLowerCase()) ||
            !this.$route.query.searchValue)
        ) {
          this.rseults.push(majorObj);
        }
      }
      this.dataFetched = true;
      this.loading = false;
    },
    async getDataFromDB() {
      try {
        const response = await axios.get("/majors");
        this.majors = response.data.data;
        this.showResultFromHomePage();
      } catch (error) {
        console.log(error);
      }
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