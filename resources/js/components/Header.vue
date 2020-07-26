<template>
    <div class="bg-header p-0 m-0 text-black flex justify-center items-center">
         <router-link to="/logs" class="nav active">
            <i class="fas fa-terminal"></i> Logs
         </router-link>
         <router-link to="/alerts" class="nav">
            <i class="far fa-bell"></i> Alerts
         </router-link>
         <router-link to="/settings" class="nav">
            <i class="fas fa-bars"></i> Settings
         </router-link>
    </div>
</template>
<script>
    export default {
        name: "header-log",
        data() {
            return {}
        },
        mounted() {
            console.log('header')
        },
        methods: {

        },
        computed: {

        }
    };
</script>
