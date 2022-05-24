
require('./bootstrap');

import { createApp } from 'vue'

import { library } from '@fortawesome/fontawesome-svg-core'
import { fas } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

import HelloWorld from './components/HelloWorld.vue';

library.add(fas);


const app = createApp({});
// registers our HelloWorld component globally
app.component('hello-world', HelloWorld);

app.component('favue', FontAwesomeIcon);

// mount the app to the DOM
app.mount('#app')


