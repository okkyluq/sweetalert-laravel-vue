
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import router from './routes.js'
import VueRouter from 'vue-router'
import Navbar from './components/nav.vue'
import tesji from './components/tes.vue'
require('./bootstrap'); 

window.Vue = require('vue');


Vue.use(VueRouter)

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app',
    components : {
    	'my-nav' : Navbar,
    	'tex' : tesji
    },
    router
});


