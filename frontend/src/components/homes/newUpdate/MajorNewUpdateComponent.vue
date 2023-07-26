<template>
  <v-sheet class="mx-auto" elevation="8" style="width: 100%">
    <v-slide-group v-model="model" class="pa-4" center-active show-arrows>
      <v-slide-group-item
        v-for="(major,index) in majors"
        :key="index"
      >
        <v-card
          color="grey-lighten-3"
          class="ma-2"
          height="320"
          width="350"
        >
          <v-img
            src="https://cdn.vuetifyjs.com/images/cards/sunshine.jpg"
            height="200px"
            cover
          ></v-img>

          <v-card-title>{{major.title}}</v-card-title>

          <v-card-subtitle>{{major.description}}</v-card-subtitle>

          <v-card-actions>
            <v-btn
              :to="`/majorPostDetail/${major.id}`"
              :id="$route.params.index"
              class="actionBtn"
              variant="outlined"
            > 
              See more
            </v-btn>
          </v-card-actions>
        </v-card>
      </v-slide-group-item>
    </v-slide-group>
  </v-sheet>
</template>
<script>
export default {
  props: ["majors"],
  data: () => ({
    model: null,
  }),
};
</script>
<style scoped>
.actionBtn:hover{
  background-color: #304ffe;
  color : #fff;
  transition: 800ms;
  outline: 1px solid #304ffe;
}
.actionBtn{
  padding: 0 20px;
  color: #304ffe;
}
</style>