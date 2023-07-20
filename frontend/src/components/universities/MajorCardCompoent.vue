<template>
  <div class="d-flex flex-column">
    <v-row>
      <v-col
        v-for="(major, index) in majors"
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

            <v-card-title> {{ major.title }}</v-card-title>

            <v-card-subtitle>{{ major.description }}</v-card-subtitle>

            <v-card-actions>
              <v-btn
                :to="`/majorPostDetail/${major.id}`"
                style="color: #304ffe; padding: 0 20px"
                variant="text"
              >
                See more
              </v-btn>
              <v-btn style="color: #304ffe; padding: 0 20px" 
                  @click="addFovMajorPost(major.id)"
                  variant="text">
                <v-icon
                  align-tabs="center"
                  color="#304FFE"
                  icon="mdi-heart"
                ></v-icon>
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
import axios from "../../stores/axiosHttp"
export default {
  props: ["majors"],
  data(){
    return{
      id: 1
    }
  },
  methods:{
    addFovMajorPost(id){
      console.log(id)
      axios.post("auth/favoriteUniversityPost",{"university_post_id": id})
      .then(response=>{
        console.log(response.data)
      })
      .catch(error=>{
        console.log(error.message)
      })
    }
  }
};
</script>
