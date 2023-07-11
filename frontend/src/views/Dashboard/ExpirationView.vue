<template>
  <dashboard-component-vue></dashboard-component-vue>
  <v-card class="bg-grey-lighten-2 p-6">
    <h1 class="text-light-green-accent-4 ml-10">Expired Date</h1>
    <div class="d-flex align-center flex-column bg-grey-lighten-4 pa-6">
      <v-btn-toggle color="primary" v-model="toggle">
        <v-btn color="success">UNIVERSITY</v-btn>
        <v-btn color="success">WORK SHOP</v-btn>
      </v-btn-toggle>
    </div>
  </v-card>
  <v-card
    class="mx-auto mt-4 mb-4 box-sizing: border-box"
    color="blue-lighten-5"
    theme="light"
    max-width="70%"
    max-height="500px"
    title="Wep"
  >
    <template v-slot:prepend>
      <v-icon size="x-large"></v-icon>
    </template>

    <v-card-text class="text-p py-2 ml-12 d-flex justify-space-between mr-5">
      welcome to our university
      <div>
        <h3>1000 $/year</h3>
        <h3>4 year</h3>
      </div>
    </v-card-text>
    <v-card-actions>
      <v-list-item class="w-100">
        <template v-slot:prepend>
          <div class="d-flex  ml-10">
              <v-avatar
                color="grey-darken-3"
                class="justify-content-center"
                image="https://avataaars.io/?avatarStyle=Transparent&topType=ShortHairShortCurly&accessoriesType=Prescription02&hairColor=Black&facialHairType=Blank&clotheType=Hoodie&clotheColor=White&eyeType=Default&eyebrowType=DefaultNatural&mouthType=Default&skinColor=Light"
              ></v-avatar>
            </div>
        </template>
        <v-list-item-title>PNC</v-list-item-title>
        <template v-slot:append>
          <div class="justify-self-end mr-8">
            <v-icon class="me-1" icon="mdi-bookmark-plus-outline"></v-icon>
            <span class="subheading me-2">256</span>
          </div>
        </template>
      </v-list-item>
    </v-card-actions>
  </v-card>
</template>

<script>
import DashboardComponentVue from '@/components/Dashboard/DashboardComponent.vue';
export default {
  components:{
    DashboardComponentVue
  },
  data: () => ({
    toggle: null,
  }),
};
</script>

<style>
</style>