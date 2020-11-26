import Vue from 'vue'
import Router from 'vue-router'
Vue.use(Router)

import vuePage from './components/pages/startVuePage'

const routes = [
    {
        path: '/new-vue-route',
        component: vuePage
    }
]

export default new Router({
    mode: 'history',
    routes
})