require('babel-polyfill');

import Vue from 'vue';
import BootstrapVue from 'bootstrap-vue';

// Globally register bootstrap-vue components
Vue.use(BootstrapVue);

let app = new Vue({

    el: '#app',

    data: {
        isOpen: false,
        menuItems: []
    },

    methods: {

        toggleMenu() {
            this.isOpen = !this.isOpen;
        },

        handleMobileSubMenu(){
            this.menuItems.forEach(menuItem => {
                let menuLink = menuItem.querySelector('.mobile-expand');
                console.log(menuLink);
                if(menuLink != null) {
                    menuLink.addEventListener('click', function (e) {
                        e.preventDefault();
                        let menu = menuItem.querySelector('.submenu-menu');
                        if (menu.classList.contains('is-open')) {
                            menu.classList.remove('is-open');
                        } else {
                            menu.classList.add('is-open');
                        }
                    });
                }
            });
        }

    },

    mounted() {
        this.menuItems = this.$el.querySelectorAll('#mobilemenu .nav-item');
        this.handleMobileSubMenu();
    }

});

