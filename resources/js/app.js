require('./bootstrap');

window.Vue = require('vue');

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

const app = new Vue({
    el: '#app',

    data: {
        menu: false,
        loading: true,
        dark: false
    },

    mounted() {
        this.loading = false;
    },

    methods: {
        toggleMenu() {
            this.menu = !this.menu;

            let scroll = this.menu ? 'hidden' : 'auto';

            $('html').css('overflow', scroll);
            $('body').css('overflow', scroll);
        }
    }
});
