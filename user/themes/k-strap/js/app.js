require('babel-polyfill');

import Vue from 'vue';
import BootstrapVue from 'bootstrap-vue';

// Globally register bootstrap-vue components
Vue.use(BootstrapVue);

let app = new Vue({

    el: '#app',

    mounted() {
        console.log('hello world');
    }

});

