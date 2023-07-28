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
          height="350" 
          width="350"
        >
          <v-img
            src="https://cdn.vuetifyjs.com/images/cards/sunshine.jpg"
            height="200px"
            width="100%"
            cover
          ></v-img>
          <v-card-item>
            <v-card-title>{{ major.title }}</v-card-title>

            <v-card-subtitle>
              <span class="me-1">{{major.description}}</span>

              <v-icon
                color="error"
                icon="mdi-fire-circle"
                size="small"
              ></v-icon>
            </v-card-subtitle>
          </v-card-item>
          <v-card-text>
            <v-row align="center" class="mx-0">
              <v-rating
                :model-value="0"
                color="#3737e5"
                density="compact"
                half-increments
                readonly
                size="small"
              ></v-rating>

              <div class="ms-4 text-subtitle-1">
                <v-icon color="#3737e5">mdi-ticket-percent-outline</v-icon> •
                {{ major.variable_student }} tickets
              </div>
            </v-row>
          </v-card-text>
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