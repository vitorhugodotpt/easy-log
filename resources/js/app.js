import Vue from "vue";
import easyLogComponents from "./components";
import VueRouter from 'vue-router'
import Logs from "./components/Logs";
import Alerts from "./components/Alerts";
import Settings from "./components/Settings";

Vue.use(easyLogComponents);
Vue.use(VueRouter);

const routes = [
    { path: '/', redirect: '/logs' },
    { path: '/logs', component: Logs },
    { path: '/alerts', component: Alerts },
    { path: '/settings', component: Settings }
];

const router = new VueRouter({
    routes
});

const app = new Vue({
    router
}).$mount('#app');


