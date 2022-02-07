//console.log('front-office here');

import Vue from 'vue';
import App from './views/App';

const root = new Vue({
    el:'#root',
    render: h => h(App),
});