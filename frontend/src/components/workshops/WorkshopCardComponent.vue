<template>
<div class="d-flex flex-column">

  <v-row>
    <v-col
      v-for="(workshops,index) in workshopPost"
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

          <v-card-title> {{workshops.name}}</v-card-title>

          <v-card-subtitle>{{workshops.description}}</v-card-subtitle>

          <v-card-actions>
            <v-btn
              :to="`/workshopDetail/${index+1}`"
              :id="$route.params.index"
              style="color: rgba(46, 46, 255, 0.79); padding: 0 20px"
              variant="text"
            >
              See more
            </v-btn>
          </v-card-actions>
        </v-card>
      </v-list>
    </v-col>
  </v-row>
  <v-pagination :length="4" rounded="circle" class="mb-8"></v-pagination>
</div>
</template>
<script>
export default {
  props: ["workshops"],
};
</script>
