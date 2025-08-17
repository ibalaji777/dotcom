import './bootstrap';
import { createApp } from 'vue';

import ExampleComponent from './components/ExampleComponent.vue';
import Hero from './components/Hero.vue';
import ProductList from './components/ProductList.vue';
import ContactForm from './components/ContactForm.vue';
import Header from './components/Header.vue';
import Footer from './components/Footer.vue';



const app = createApp({});
app.component('example-component', ExampleComponent);
app.component('hero-section', Hero);
app.component('product-list', ProductList);
app.component('contact-form', ContactForm);
app.component('digis-header', Header);
app.component('digis-footer', Footer);

app.mount('#app');
