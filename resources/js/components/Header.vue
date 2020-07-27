<template>
    <div class="bg-header p-0 m-0 text-black flex justify-center items-center">
         <router-link to="/logs" class="nav" :class="active('/logs')">
            <i class="fas fa-terminal"></i> Logs
         </router-link>
         <router-link to="/alerts" class="nav" :class="active('/alerts')">
            <i class="far fa-bell"></i> Alerts
         </router-link>
         <router-link to="/settings" class="nav" :class="active('/settings')">
            <i class="fas fa-bars"></i> Settings
         </router-link>
    </div>
</template>
<script>
    export default {
        name: "header-log",
        data() {
            return {
                currentPage: 'logs'
            }
        },
        mounted() {
            this.currentPage = this.$route.path;
        },
        methods: {
            active: function(page) {
                return page === this.currentPage ? 'active' : '';
            }
        },
        computed: {

        },
        watch:{
            $route (to, from){
                this.currentPage = to.path;
            }
        }
    };
</script>
