<template>
<v-app>
    <v-main>
        <UniversityChart/>
        <PopularCardComponent/>
    </v-main>
</v-app>
</template>

<script>
import UniversityChart from "./popularUniversity/UniversityChartComponent.vue"
import PopularCardComponent from "./popularUniversity/PopularUniversityCardComponent.vue"
export default ({
    components:{
        UniversityChart,
        PopularCardComponent
    },
})
</script>

<style>

</style>