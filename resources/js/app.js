import VueRouter from "vue-router";
require("./bootstrap");
import router from "./routes";
window.Vue = require("vue");

Vue.use(VueRouter);

Vue.component(
    "example-component",
    require("./components/ExampleComponent.vue").default
);

Vue.component("example-two", require("./components/Example2.vue").default);

const app = new Vue({
    el: "#app",
    router
});
