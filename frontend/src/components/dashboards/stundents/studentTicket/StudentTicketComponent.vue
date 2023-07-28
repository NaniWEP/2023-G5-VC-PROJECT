<template>
  <v-container class="container">
    <SideNavBar></SideNavBar>
    <v-row>
      <v-col cols="12" md="12">
        <v-card class="elevation-2 card">
          <v-card-title class="justify-center">
            <h3 class="mb-0"><v-icon>mdi-ticket</v-icon>My Ticket</h3>
          </v-card-title>
          <v-table fixed-header height="300px">
            <thead>
              <tr>
                <th class="text-left">Name</th>
                <th class="text-left">Calories</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="item in ticket" :key="item">
                <td>{{ item.name }}</td>
                <td>{{ item.email }}</td>
              </tr>
            </tbody>
          </v-table>
        </v-card>
      </v-col>
    </v-row>
  </v-container>
</template>

<script>
import SideNavBar from "../SidebarIcon.vue";
import axios from "@/stores/axiosHttp";
import dayjs from "dayjs";
export default {
  name: "studentTicketComponent",
  components: {
    SideNavBar,
  },
  data() {
    return {
      tab: null,
      ticket: {},
    };
  },
  created() {},
  mounted() {
    this.getTicket();
  },
  methods: {
    getTicket() {
      axios
        .get("/auth/getMyTicket")
        .then((response) => {
          console.log(response.data);
          this.ticket = response.data.data;
          console.log(this.ticket);
        })
        .catch((error) => {
          console.log(error);
        });
    },
    formatDate(dateString) {
      const date = dayjs(dateString);
      // Then specify how you want your dates to be formatted
      return date.format("D dddd, MMMM, YYYY");
    },
  },
};
</script>

<style scoped>
.card {
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.15),
    inset 1px 0 0 rgba(255, 255, 255, 0.15);
  padding: 30px;
  border-radius: 5px;
  background-color: #eeee;
  height: 80vh;
}
.article {
  display: flex;
  flex-direction: column;
  justify-content: space-around;
  background: #ffff;
  height: 300px;
  margin-top: 10px;
  border-radius: 10px;
}
.name {
  border-radius: 5px;
}

.name {
  border-radius: 5px;
}
</style>
