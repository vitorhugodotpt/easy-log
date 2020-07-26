import Header from "./Header";
import Info from "./Info";

export default {
    install(Vue) {
        Vue.component(Header.name, Header);
        Vue.component(Info.name, Info);
    }
};
