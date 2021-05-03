import Home from './pages/Home';
import Register from './pages/Register';
import Login from './pages/Login';
import Profile from './pages/Profile';
export default [
    {
        path: '/',
        component: Home,
        name : 'home'
    },
    
    {
        path: '/register',
        component: Register,
        name: 'register'
    },

    {
        path: '/login',
        component: Login,
        name : 'login'
    },

    {
        path: '/profile',
        component: Profile,
        name : 'profile'
    }
]