<template>
  <v-row>
    <v-col sm="10">
      <v-list>
        <h3 class="ml-16">LIST OF UNIVERSITY</h3>
      </v-list>
    </v-col>
  </v-row>
  <div style="margin: 0px 10%">
    <CardComponet />
  </div>
</template>
<script>
import CardComponet from "./UniversityCardComponent.vue";
export default {
  components: {
    CardComponet,
  },
};
</script>
