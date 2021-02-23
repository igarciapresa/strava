require('./bootstrap');

window.Vue = require('vue').default;
import Vuetify from 'vuetify';
Vue.use(Vuetify);

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('my-trials', require('./components/MyTrialsComponent.vue').default);

const app = new Vue({
    el: '#app',
});
