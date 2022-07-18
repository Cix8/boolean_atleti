import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Home from "./pages/Home.vue";
import About from "./pages/Atleti.vue";

const router = new VueRouter({
  mode: "history",
  routes: [
    {
      path: "/",
      name: "home",
      component: Home
    },
    {
      path: "/blog",
      name: "blog",
      component: Blog
    },
    {
      path: "/*",
      name: "not-found",
      component: NotFound
    }
  ]
});