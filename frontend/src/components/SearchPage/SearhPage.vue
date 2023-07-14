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
import NavbarComponentVue from "../Layout/NavbarComponent.vue";
import ResultCardVue from "./ResultCard.vue";
import SearchBarVue from "./SearchBar.vue";

export default {
  components: {
    NavbarComponentVue,
    SearchBarVue,
    ResultCardVue,
  },
  data() {
    return {
      majors: [
        {
          title: "Wep Programming",
          description: "Now our university start get new students for 2024",
          startDate: "7/Aug/2024",
          applyDate: "7/Jan/2024",
          duration: 2,
          university: "PNC",
          price: 4000,
        },
        {
          title: "Wep Programming",
          description: "Now our university start get new students for 2024",
          startDate: "7/Aug/2024",
          applyDate: "7/Jan/2024",
          duration: 2,
          university: "Royal University of Phnom Penh",
          price: 700,
        },
        {
          title: "Computer Science",
          description: "Now our university start get new students for 2024",
          startDate: "7/Aug/2024",
          applyDate: "7/Jan/2024",
          duration: 2,
          university: "Royal University of Phnom Penh",
          price: 700,
        },
        {
          title: "Engineering",
          description: "Now our university start get new students for 2024",
          startDate: "7/Aug/2024",
          applyDate: "7/Jan/2024",
          duration: 2,
          university: "Institute of Technology of Cambodia",
          price: 500,
        },
        {
          title: "Law",
          description: "Now our university start get new students for 2024",
          startDate: "7/Aug/2024",
          applyDate: "7/Jan/2024",
          duration: 2,
          university: "Royal University of Law and Economics",
          price: 2000,
        },
        {
          title: "Graphic Design",
          description:
            "The Artificial Intelligence and Data Analytics MSc programme at Loughborough University London is aimed at providing students with a comprehensive understanding of data analytics and applied Artificial Intelligence in the digital age and developing their skills to address associated challenges with the use of AI and Data Analytics tools in the most effective way.",
          startDate: "7/Aug/2024",
          applyDate: "7/Jan/2024",
          duration: 2,
          university: "Norton University",
          price: 800,
        },
        {
          title: "Accounting",
          description: "Now our university start get new students for 2024",
          startDate: "7/Aug/2024",
          applyDate: "7/Jan/2024",
          duration: 2,
          university: "Mean Chey University",
          price: 650,
        },
      ],
      rseults: [],
    };
  },
  created() {
    // Call the showResultFromHomePage method to display the search results
    this.showResultFromHomePage();
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
          (majorObj.university
            .toLowerCase()
            .includes(university.toLowerCase()) ||
            !university) &&
          (majorObj.title.toLowerCase().includes(searchValue.toLowerCase()) ||
            majorObj.university
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
  },
};
</script>

<style scoped>
#body {
  margin-top: 50px;
  /* width: 100%; */
  /* background-color: blanchedalmond; */
  display: flex;
  flex-direction: column;
}
</style>