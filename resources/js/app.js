
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./others/bootstrap');
require('./others/admin');
require('./others/admin.min');
require('./others/custom');
require('./others/jquery-2.1.1');
require('./others/jquery.subscribe');
require('./others/menu');
require('./others/plugins');



require('../../vendor/jquery/jquery.min.js');
require('../../vendor/bootstrap/js/bootstrap.bundle.min.js');
require('../../vendor/jquery-easing/jquery.easing.min.js');
require('../../vendor/datatables/jquery.dataTables.js');


window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app'
});
