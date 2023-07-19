<template>
<div class="d-flex flex-column">

  <v-row>
    <v-col
      v-for="(major,index) in majors"
      :key="index"
      class="d-flex justift-center align-center"
      cols="4"
    >
      <v-list style="width: 100%">
        <v-card class="mx-auto" max-width="450">
          <v-img
            src="https://cdn.vuetifyjs.com/images/cards/sunshine.jpg"
            height="200px"
            cover
          ></v-img>

          <v-card-title> {{major.title}}</v-card-title>

          <v-card-subtitle>{{major.description}}</v-card-subtitle>

          <v-card-actions>
            <v-btn
              :to="`/university/majorPost/${index+1}`"
              :id="$route.params.index"
              style="color:#304FFE; padding: 0 20px"
              variant="text"
            >
              See more
            </v-btn>
            <v-btn
              :to="`/universityDetail/${index+1}`"
              :id="$route.params.index"
              style="color:#304FFE; padding: 0 20px"
              variant="text"
            >
            <v-icon align-tabs="center" color="#304FFE" icon="mdi-heart"></v-icon>
              add to Favorite
            </v-btn>
          </v-card-actions>
        </v-card>
      </v-list>
    </v-col>
  </v-row>
</div>
</template>
<script>
export default {
  props: ["majors"],
};
</script>
