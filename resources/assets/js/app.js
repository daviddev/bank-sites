import Vue from 'vue'
import VueRouter from 'vue-router'
import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';

Vue.use(VueRouter)
Vue.use(ElementUI)

// import 'bootstrap/dist/css/bootstrap.min.css';

// import 'mdbvue/build/css/mdb.css';
// import 'mdbvue/src/components/Waves.css'
import App from './components/App'
import Dashboard from './components/views/dashboard/Dashboard'

const router = new VueRouter({
    mode: 'hash',
    routes: [
        {
            path: '/',
            redirect: '/dashboard'
        },
        {
            path: '/dashboard',
            name: 'dashboard',
            component: Dashboard
        }
    ],
});

const app = new Vue({
    el: 'app',
    components: { App },
    router,
});
