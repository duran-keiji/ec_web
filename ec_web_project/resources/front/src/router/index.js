import Vue from 'vue'
import VueRouter from 'vue-router'
import Login from '../components/pages/Login'
import UserCreate from '../components/pages/UserCreate'

Vue.use(VueRouter)

const routes = [{
        path: '/',
        name: 'Login',
        component: Login
    },
    {
        path: '/UserCreate',
        name: 'UserCreate',
        component: UserCreate
    }
]

const router = new VueRouter({
    mode: 'history',
    base: process.env.BASE_URL,
    routes
})

export default router