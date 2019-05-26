
import Vue from 'vue';

import './plugins/plugins';
import './animation/index';


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('i-hero', require('./components/i-hero.vue').default);
Vue.component('i-divider', require('./components/i-divider.vue').default);
Vue.component('i-carousel', require('./components/i-carousel.vue').default);
Vue.component('i-changes', require('./components/i-changes.vue').default);
Vue.component('i-footer', require('./components/i-footer.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app'
});
