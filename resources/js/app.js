import Vue from "vue";

import easyLogComponents from "./components";

Vue.use(easyLogComponents);

let app = new Vue({
    el: '#app',
    data: {
        seen: true
    },
    mounted() {
        console.log('App running');
    }
});


