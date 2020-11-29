import Vue from 'vue'
import App from './App.vue'
import router from './router'
import axios from 'axios'
import VueAxios from 'vue-axios'
import vuetify from './plugins/vuetify';
// import VeeValidate from './plugins/vee-validate';
import * as VeeValidate from './plugins/vee-validate';


Vue.config.productionTip = false
Vue.config.devtools = true

Vue.use(VueAxios, axios)

new Vue({
    router,
    vuetify,
    VeeValidate,
    render: h => h(App)
}).$mount('#app')