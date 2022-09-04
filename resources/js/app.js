import './bootstrap';

import {createApp} from 'vue/dist/vue.esm-bundler';

import '../css/app.css'

import TestComponent from './components/Test.vue'

const app = createApp({
    components: {
        'v-test': TestComponent
    }
})
app.mount("#app")
