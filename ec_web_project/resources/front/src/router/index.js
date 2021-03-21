import Vue from 'vue'
import VueRouter from 'vue-router'
import Login from '../components/pages/Login'
import UserCreate from '../components/pages/UserCreate'
import Top from '../components/pages/Top'
import ItemDetail from '../components/pages/ItemDetail'

Vue.use(VueRouter)

const routes = [{
        path: '/Login',
        name: 'Login',
        component: Login
    },
    {
        path: '/UserCreate',
        name: 'UserCreate',
        component: UserCreate
    },
    {
        path: '/Top',
        name: 'Top',
        component: Top
    },
    {
        path: '/ItemDetail/:itemId',
        name: 'ItemDetail',
        component: ItemDetail,
        props: true
    }
]

const router = new VueRouter({
    mode: 'history',
    base: process.env.BASE_URL,
    routes
})

export default router