// reference https://vuetifyjs.com/en/components/cards
<template>
  <div id="card">
    <v-card
      class="mx-auto mt-4 mb-4 box-sizing: border-box"
      color="blue-lighten-5"
      theme="light"
      max-width="70%"
      max-height="500px"
      :title="major.title"
    >
      <template v-slot:prepend>
        <v-icon size="x-large"></v-icon>
      </template>

      <v-card-text class="text-p py-2 ml-12 d-flex justify-space-between mr-5">
        {{ major.description }}
        <div>
          <h3>{{ major.price }}$/year</h3>
          <h3>{{ major.duration}} year</h3>

        </div>
      </v-card-text>
      <v-card-actions>
        <v-list-item class="w-100">
          <template v-slot:prepend>
            <v-avatar
              color="grey-darken-3"
              image="https://avataaars.io/?avatarStyle=Transparent&topType=ShortHairShortCurly&accessoriesType=Prescription02&hairColor=Black&facialHairType=Blank&clotheType=Hoodie&clotheColor=White&eyeType=Default&eyebrowType=DefaultNatural&mouthType=Default&skinColor=Light"
            ></v-avatar>
          </template>

          <v-list-item-title>{{ major.university}}</v-list-item-title>
          <template v-slot:append>
            <div class="justify-self-end mr-8">
              <v-icon class="me-1" icon="mdi-bookmark-plus-outline"></v-icon>
              <span class="subheading me-2">256</span>
            </div>
          </template>
        </v-list-item>
      </v-card-actions>
    </v-card>
  </div>
</template>

<script>
export default {
  props: ["major"],
  methods: {
    show() {
      console.log(this.majors);
    },
  },
};
</script>


<style scoped>
</style>