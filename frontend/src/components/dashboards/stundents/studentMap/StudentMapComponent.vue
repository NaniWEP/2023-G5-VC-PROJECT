<template>
<v-container class="map-container">
    <SideNavBar></SideNavBar>
    <div id="map"></div>
</v-container>
</template>

<script>
import SideNavBar from "../studentLayouts/SideNavBar.vue";
import L from 'leaflet';

export default {
    components:{
        SideNavBar
    },
    mounted() {
    const map = L.map('map').setView([51.505, -0.09], 13);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors',
        maxZoom: 18
    })
    .addTo(map);
    L.marker([51.505, -0.09]).addTo(map);
  }
};
</script>

<style scoped>
    .map-container {
    height: 400px;
    }
    #map {
    height: 100%;
    }
</style>