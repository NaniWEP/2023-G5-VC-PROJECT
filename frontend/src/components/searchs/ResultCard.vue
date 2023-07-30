// reference https://vuetifyjs.com/en/components/cards
<template>
  <div id="card">
    <v-card
      class="mx-auto mt-4 mb-4 box-sizing: border-box"
      color="#F8F8FF"
      theme="light"
      max-width="70%"
      :title="major.title"
    >
      <div class="w-100 mr-4 d-flex justify-space-between align-center">
        <v-card-text class="w-100 card-body ml-12 d-flex mr-5">
          <div class="description">
            {{ major.description }}
            <p><v-icon> mdi-currency-usd</v-icon> {{ major.price }}/year</p>
            <p>
              <v-icon> mdi-clock-time-eight-outline</v-icon>
              {{ major.year_duration }} year
            </p>
            <v-list-item-title>{{ major.university.name }}</v-list-item-title>
          </div>
        </v-card-text>
        <div class="action mr-4">
          <div class="btnAction">
            <v-btn class="seemoreBtn" :to="`/majorPostDetail/${major.id}`"
              >See more</v-btn
            >
          </div>
        </div>
      </div>
    </v-card>
  </div>
</template>

<script>
export default {
  props: ["major"],
};
</script>
<style scoped>
.card-body {
  justify-content: space-between;
}
.description {
  width: 80%;
}
.action {
  flex-direction: column;
  gap: 10px;
  width: 200px;
}
</style>