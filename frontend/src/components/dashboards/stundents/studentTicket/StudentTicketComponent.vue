<template>
  <v-container class="container">
    <SideNavBar></SideNavBar>
    <v-row class="main">
      <v-col cols="12" md="12">
        <v-card class="elevation-2 card">
          <h2 class="mb-0"><v-icon>mdi-ticket</v-icon>My Ticket</h2>
          <div v-if="tickets != null">
          <div v-for="ticket in tickets" :key="ticket" class="main-card">
            <article class="article my-8">
              <h3 class="title">{{ ticket.workshop.name }}</h3>
              <div class="action">
                <div class="w-50 d-flex justify-center">
                  <img
                  :src="ticket.workshop.images"
                  alt=""
                    width="300"
                    height="180"
                  />
                </div>
                <div class="w-50 d-flex">
                  <div>
                    <h4>Workshop info</h4>
                    <h5 style="font-weight: bold"><v-icon>mdi-calendar-range</v-icon> Date:</h5>
                    <v-chip>{{ formatDate(ticket.workshop.date) }}</v-chip>
                    <h5 style="font-weight: bold"><v-icon>mdi-calendar-clock</v-icon> Time :</h5>
                    <v-chip>{{ ticket.workshop.time }}</v-chip>
                    <h5 style="font-weight: bold"><v-icon>mdi-account-card-outline</v-icon> Organizer :</h5>
                    <v-chip>{{ ticket.workshop.organizer }}</v-chip>
                  </div>
                  <div>
                    <h4>User info</h4>
                    <h5>Your name:</h5>
                    <v-chip>{{ ticket.name }}</v-chip>
                    <h5 style="font-weight: bold">Your email :</h5>
                    <v-chip>{{ ticket.email }}</v-chip>
                    <h5 style="font-weight: bold">Your phone :</h5>
                    <v-chip>{{ ticket.phone_number }}</v-chip>
                  </div>
                </div>
              </div>
              <h4 class="footer">Contact by : {{ ticket.workshop.contact }}</h4>
            </article>
          </div>
        </div>
          <div v-else class="else">
            <h1>
                <v-icon>mdi-robot-vacuum-alert</v-icon> Didn't have the ticket.
              </h1>
          </div>
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
      tickets: null,
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
          if (response.data.data[0]) {
          this.tickets = response.data.data;
          }
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
  height: 200vh;
  width: 80%;
  margin-left: 15%;
  margin-right: 5%;
}
.article {
  display: flex;
  flex-direction: column;
  background: #ffff;
  height: 240px;
  width: 100%;
  border-radius: 10px;
}
.article:hover {
  transform: translateY(-5px) scale(1.005) translateZ(0);
  transition: 1000ms;
  box-shadow: 0 24px 36px rgba(0, 0, 0, 0.11),
    0 24px 46px var(--box-shadow-color);
}

.title {
  background: #3737e5;
  width: 100%;
  color: #ffff;
  text-align: center;
  margin-bottom: 10px;
}
.footer{
  background: #3737e5;
  width: 100%;
  color: #ffff;
  text-align: center;
  margin-top: 10px;
}

.action{
  display: flex;
  align-items: center;
}

.else{
  color: #3737e5;
  display: flex;
  justify-content: center;
  margin-top: 100px;
}
</style>
