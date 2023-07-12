<template>
    <dashboard-component-vue></dashboard-component-vue>
    <router-view/>
</template>
<script>
import DashboardComponentVue from '@/components/Dashboard/DashboardComponent.vue'
// import DashboardComponentVue
export default {
    components:{
        DashboardComponentVue
    }
}
</script>