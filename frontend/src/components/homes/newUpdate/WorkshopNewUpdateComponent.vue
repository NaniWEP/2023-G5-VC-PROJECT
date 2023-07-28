<template>
  <v-sheet class="mx-auto" elevation="8" style="width: 100%">
    <v-slide-group v-model="model" class="pa-4" center-active show-arrows>
      <v-slide-group-item
        v-for="(workshop,index) in workshops"
        :key="index"
      >
        <v-card
          color="grey-lighten-3"
          class="ma-2"
          height="320"
          width="350"
        >
          <v-img
             :src="workshop.images" alt="workshop Image"
            height="200px"
            cover
          ></v-img>

          <v-card-title>{{workshop.name}}</v-card-title>

          <v-card-subtitle>{{workshop.description}}</v-card-subtitle>

          <v-card-actions>
            <v-btn
              :to="`/universityDetail/${workshop.id}`"
              :id="$route.params.index"
              class="actionBtn"
              variant="outlined"
            > 
              See more
            </v-btn>
            <v-btn
              :to="`/universityDetail/${index + 1}`"
              :id="$route.params.index"
              prepend-icon="mdi-heart-outline"
              class="actionBtn"
              variant="outlined"
            >
              Favorite
            </v-btn>
          </v-card-actions>
        </v-card>
      </v-slide-group-item>
    </v-slide-group>
  </v-sheet>
</template>
<script>
export default {
  props: ["workshops"],
  data: () => ({
    model: null,
  }),
  mounted(){
    console.log(this.workshops);
  }
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
