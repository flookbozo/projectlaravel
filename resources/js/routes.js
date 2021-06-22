import Home from "./pages/Home";
import About from "./pages/About";
import Register from "./pages/Register";
import Login from "./pages/Login";
import Profile from "./pages/Profile";
import ProfileHospital from "./pages/ProfileHospital";
import Edituser from "./pages/Edituser";
import EditHospital from "./pages/EditHospital";
import Giveblood from "./pages/Giveblood";
import ProfileGiveblood from "./pages/ProfileGiveblood";
import ResetpassHospital from "./pages/ResetpassHospital";
import ResetpassUser from "./pages/ResetpassUser";
import ForgetpassUser from "./pages/ForgetpassUser";
import ForgetpassHospital from "./pages/ForgetpassHospital";
import prepareblood from "./pages/prepareblood";
import typeblood from "./pages/typeblood";
import typeblood1 from "./pages/typeblood1";
import typeblood2 from "./pages/typeblood2";
import profileblooddonate from "./pages/profileblooddonate";

export default [
    {
        path: "/",
        component: Home,
        name: "home"
    },
    {
        path: "/profileblooddonate",
        component:profileblooddonate,
        name: "profileblooddonate"
    },
    {
        path: "/typeblood",
        component: typeblood,
        name: "typeblood"
    },
    {
        path: "/typeblood1",
        component: typeblood1,
        name: "typeblood1"
    },
    {
        path: "/typeblood2",
        component: typeblood2,
        name: "typeblood2"
    },
    {
        path: "/forgetpasshospital",
        component: ForgetpassHospital,
        name: "forgetpasshospital"
    },
    {
        path: "/forgetpassuser",
        component: ForgetpassUser,
        name: "forgetpassuser"
    },

    {
        path: "/register",
        component: Register,
        name: "register"
    },

    {
        path: "/login",
        component: Login,
        name: "login"
    },

    {
        path: "/profile",
        component: Profile,
        name: "profile"
    },
    {
        path: "/profilehospital",
        component: ProfileHospital,
        name: "profilehospital"
    },
    {
        path: "/about",
        component: About,
        name: "about"
    },
    {
        path: "/edituser:id",
        component: Edituser,
        name: "edituser"
    },
    {
        path: "/edithospital:id",
        component: EditHospital,
        name: "edithospital"
    },
    {
        path: "/giveblood",
        component: Giveblood,
        name: "giveblood"
    },
    {
        path: "/profilegiveblood",
        component: ProfileGiveblood,
        name: "profilegiveblood"
    },
    {
        path: "/resetpasshospital:id",
        component: ResetpassHospital,
        name: "resetpasshospital"
    },
    {
        path: "/resetpassuser:id",
        component: ResetpassUser,
        name: "resetpassuser"
    },
    {
        path: "/prepareblood",
        component: prepareblood,
        name: "prepareblood"
    }
];
