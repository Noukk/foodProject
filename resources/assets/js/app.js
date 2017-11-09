import Vue from 'vue';
import VueRouter from 'vue-router';
import Map from './components/map/map.vue';

require('./bootstrap');

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history'
});

new Vue(
    Vue.util.extend(
        { router },
        Map
    )
).$mount('#map');

/*Vue.component('map', require('./components/map/map.vue'));

const map = new Vue({
    el: '#map'
});*/
