import { createApp } from 'vue'
import { createRouter, createWebHistory } from 'vue-router'
import App from './App.vue'
import Dashboard from './components/Dashboard.vue'
import Orders from './components/Orders.vue'
import Reservations from './components/Reservations.vue'

import 'bootstrap/dist/css/bootstrap.min.css'
import 'bootstrap'

const router = createRouter({
  history: createWebHistory(),
  routes: [
    { path: '/', component: Dashboard },
    { path: '/orders', component: Orders },
    { path: '/reservations', component: Reservations },
  ]
})

createApp(App).use(router).mount('#app')