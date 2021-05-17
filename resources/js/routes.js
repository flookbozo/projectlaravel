import Home from './pages/Home';
import About from './pages/About';
import Register from './pages/Register';
import Login from './pages/Login';
import Profile from './pages/Profile';
import ProfileHospital from './pages/ProfileHospital';
import Edituser from './pages/Edituser';
import Giveblood from './pages/Giveblood';
import ProfileGiveblood from './pages/ProfileGiveblood';

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
    },
    {
        path: '/profilehospital',
        component: ProfileHospital,
        name : 'profilehospital'
    },
    {
        path: '/about',
        component: About,
        name : 'about'
    },
    {
        path: '/edituser',
        component: Edituser,
        name : 'edituser'
    },
    {
        path: '/giveblood',
        component: Giveblood,
        name : 'giveblood'
    },
    {
        path: '/profilegiveblood',
        component: ProfileGiveblood,
        name : 'profilegiveblood'
    }

]