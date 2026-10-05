import { createApp } from 'vue';
import { createRouter, createWebHistory } from 'vue-router';
import App from './App.vue';
import HomePage from './pages/HomePage.vue';
import CatalogPage from './pages/CatalogPage.vue';
import AuthPage from './pages/AuthPage.vue';
import './styles.css';

const router = createRouter({
  history: createWebHistory(),
  routes: [
    { path: '/', component: HomePage },
    { path: '/catalog', component: CatalogPage },
    { path: '/auth', component: AuthPage },
  ],
});

createApp(App).use(router).mount('#app');
