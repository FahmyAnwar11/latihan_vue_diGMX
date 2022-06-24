/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

import VueRouter from 'vue-router';
import App from './components/MainComponent.vue'
import axios from 'axios'
import VueAxios from 'vue-axios'

Vue.use(VueRouter)
Vue.use(VueAxios, axios)


import Home from './components/mantra/HomeComponent.vue'

const routes = [
    {path: '/app/home', component: Home}
]

const router = new VueRouter({
    mode: 'history',
    routes: routes,
    linkActiveClass: 'active'
})

const app = new Vue(Vue.util.extend({ router }, App)).$mount('#app')
