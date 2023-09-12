import { createApp } from 'vue/dist/vue.esm-bundler';
import AppComponent from '../vue/AppComponent.vue';

const app = createApp({});
app.component('app-component', AppComponent);
app.mount('#app');