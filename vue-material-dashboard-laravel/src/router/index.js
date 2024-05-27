import { createRouter, createWebHistory } from "vue-router";
import PersonList from "../views/personas/PersonList.vue";
import PersonForm from "../views/personas/PersonForm.vue";
import PerfilList from "../views/perfiles/PerfilList.vue";
import PerfilForm from "../views/perfiles/PerfilForm.vue";
import PagoList from "../views/pagos/PagoList.vue";
import PagoForm from "../views/pagos/PagoForm.vue";
import PaginaList from "../views/paginas/PaginaList.vue";
import PaginaForm from "../views/paginas/PaginaForm.vue";
import Dashboard from "../views/Dashboard.vue";
import Tables from "../views/Tables.vue";
import Billing from "../views/Billing.vue";
import RTL from "../views/Rtl.vue";
import Notifications from "../views/Notifications.vue";
import Profile from "../views/Profile.vue";
import SignIn from "../views/SignIn.vue";
import SignUp from "../views/SignUp.vue";
import Login from "../views/examples-api/Login.vue";
import Signup from "../views/examples-api/Signup.vue";
import PasswordForgot from "../views/examples-api/PasswordForgot.vue";
import PasswordReset from "../views/examples-api/PasswordReset.vue";
import UserProfile from "../views/examples-api/profile/UserProfile.vue";
import Users from "../views/examples-api/users/UsersList.vue";

const routes = [
  {
    path: "/",
    name: "/",
    redirect: "/login",
  },
  {
    path: "/dashboard",
    name: "Dashboard",
    component: Dashboard,
  },
  {
    path: "/tables",
    name: "Tables",
    component: Tables,
  },
  {
    path: "/billing",
    name: "Billing",
    component: Billing,
  },
  {
    path: "/rtl-page",
    name: "RTL",
    component: RTL,
  },
  {
    path: "/notifications",
    name: "Notifications",
    component: Notifications,
  },
  {
    path: "/profile",
    name: "Profile",
    component: Profile,
  },
  {
    path: "/sign-in",
    name: "SignIn",
    component: SignIn,
  },
  {
    path: "/sign-up",
    name: "SignUp",
    component: SignUp,
  },
  {
    path: "/login",
    name: "Login",
    component: Login
  },
  {
    path: "/signup",
    name: "Signup",
    component: Signup
  },
  {
    path: "/password-forgot",
    name: "Password Forgot",
    component: PasswordForgot
  },
  {
    path: "/password-reset",
    name: "Password Reset",
    component: PasswordReset
  },
  {
    path: "/user-profile",
    name: "User Profile",
    component: UserProfile
  },
  {
    path: '/users',
    name: "Users",
    component: Users
  },
  {
    path: "/personas",
    name: "Personas",
    component: PersonList,
  },
  {
    path: "/personas/create",
    name: "CreatePersona",
    component: PersonForm,
  },
  {
    path: "/personas/edit/:id",
    name: "EditPersona",
    component: PersonForm,
    props: true
  },
  {
    path: "/perfiles",
    name: "Perfiles",
    component: PerfilList,
  },
  {
    path: "/perfiles/create",
    name: "CreatePerfil",
    component: PerfilForm,
  },
  {
    path: "/perfiles/edit/:id",
    name: "EditPerfil",
    component: PerfilForm,
    props: true
  },
  {
    path: "/pagos",
    name: "Pagos",
    component: PagoList,
  },
  {
    path: "/pagos/create",
    name: "CreatePago",
    component: PagoForm,
  },
  {
    path: "/pagos/edit/:id",
    name: "EditPago",
    component: PagoForm,
    props: true
  },
  {
    path: "/paginas",
    name: "Paginas",
    component: PaginaList,
  },
  {
    path: "/paginas/create",
    name: "CreatePagina",
    component: PaginaForm,
  },
  {
    path: "/paginas/edit/:id",
    name: "EditPagina",
    component: PaginaForm,
    props: true
  }
];

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
  linkActiveClass: "active",
});

export default router;
