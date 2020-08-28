// require('./bootstrap');
window.Vue = require('vue');
window.$ = window.jQuery = require('jquery')
// import Vue Router
import VueRouter from 'vue-router'
//Roures import
import {routes} from './routes/index.js'

Vue.use(VueRouter)
const router = new VueRouter({
  mode: 'history',
  routes
})

// Vue.component('example-component', require('./App.vue').default);

import Index from './components/frontend/Index.vue';

const app = new Vue({
    el: '#app',
    router,
    components: {
      Index,
    },

});
