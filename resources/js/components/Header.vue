<template>
    <div class="bg-header p-0 m-0 text-black flex justify-center items-center">
        <div class="nav active">
            <i class="fas fa-terminal"></i> Logs
        </div>
        <div class="nav ">
            <i class="far fa-bell"></i> Alerts
        </div>
        <div class="nav ">
            <i class="fas fa-bars"></i> Settings
        </div>
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
