<template>
    <v-card class="ml-16 mt-3 mr-8 mb-3 bg-grey-lighten-2 p-6">   
        <h1 class="text-light-green-accent-4 ml-10">Expired Date</h1>
        <div class="d-flex align-center flex-column bg-grey-lighten-4 pa-6">
            <v-btn-toggle color="primary" v-model="toggle">
            <v-btn  color="success">UNIVERSITY</v-btn>
            <v-btn  color="success">WORK SHOP</v-btn>
            </v-btn-toggle>

            <v-btn-toggle class="mt-10"
            v-model="toggle"
            color="primary"
            variant="text"
            >
            <v-btn icon="mdi-format-align-left"></v-btn>
            <v-btn icon="mdi-format-align-center"></v-btn>
            </v-btn-toggle>

        </div>
    </v-card>

</template>

<script>
export default {

     data: () => ({
      toggle: null,
    }),

}
</script>

<style>

</style>