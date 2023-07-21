<template>
  <div class="d-flex flex-column">
    <v-row>
      <v-col
        v-for="(workshop, index) of workshops"
        :key="index"
        :id="workshop.id"
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

            <v-card-title> {{ workshop.name }}</v-card-title>

            <v-card-subtitle>{{ workshops.description }}</v-card-subtitle>

            <v-card-actions>
              <v-btn
                :to="`workshopDetail/${workshop.id}`"
                :id="$route.params.index"
                style="color: rgba(46, 46, 255, 0.79); padding: 0 20px"
                variant="text"
              >
                See more
              </v-btn>
              <v-btn
                v-if="isFavorite"
                @click="saveFavorite(workshop.id)"
                style="color: #304ffe; padding: 0 20px"
                variant="text"
              >
                <v-icon
                  align="center"
                  color="#304FFE"
                  icon="mdi-heart"
                ></v-icon>
                Add to Favorites
              </v-btn>
              <v-btn
                v-else
                @click="saveFavorite(workshop.id)"
                style="color: #304ffe; padding: 0 20px"
                variant="text"
              >
                <v-icon
                  align="center"
                  color="#304FFE"
                  icon="mdi-heart"
                ></v-icon>
                Favorited
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
import axios from "@/stores/axiosHttp";
export default {
  props: ["workshops"],
  data() {
    return {
      isFavorite: false,
    };
  },
  methods: {
    addFovMajorPost(id){
      console.log(id)
      axios.post("auth/workshop/favorite",{"workshop_post_id": id})
      .then(response=>{
        console.log(response.data)
      })
      .catch(error=>{
        console.log(error.message)
      })
    }
  },
};
</script>
<style scoped>
</style>