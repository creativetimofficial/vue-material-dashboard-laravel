<template>
    <navbar btnBackground="bg-gradient-success" />
   <!-- <div class="page-header align-items-start min-vh-100" style="
                      background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');
                    ">-->
  <div class="page-header align-items-start min-vh-100">
        <span class="mask bg-gradient-withe opacity-6"></span>

        <div class="container mb-6">
            <div class="row">

                <div class="header pt-10 w-100  d-flex justify-content-center">
                    <div class="container">
                      <div class="text-center mb-5">
                        <img src="@/assets/img/DMG.png" alt="Digital Model Group" style="max-width: 100%; height: auto;">
                      </div>

                        <div class="header-body text-center mb-7">
                            <div class="row justify-content-center">
                                <div class="text-center" style="margin-bottom: 5px;">
                                    <h3 class="text-danger"> CRM Digital Model Gropup</h3>
                                    <p class="text-lead text-danger"> Plataforma administrativa para modelos,fotografos  y administradores</p>
                                </div>
                                <div class="text-white">
                                    <h3 class="text-danger"><strong>Puedes ingresar con:</strong></h3>
                                    <div class="text-danger"> Usuario: <b>admin@jsonapi.com</b> &nbsp;&nbsp; Contraseña: <b>secret</b></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-8 col-12 mx-auto pb-10">
                    <div class="card z-index-0 fadeIn3 fadeInBottom">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-danger shadow-danger border-radius-lg py-3 pe-1">
                                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">
                                    Ingresar
                                </h4>
                                <div class="row mt-3">
                                    <div class="col-2 text-center ms-auto">
                                        <a class="btn btn-link px-3" href="javascript:;">
                                            <i class="fab fa-facebook text-white text-lg"></i>
                                        </a>
                                    </div>
                                    <div class="col-2 text-center px-1">
                                        <a class="btn btn-link px-3" href="javascript:;">
                                            <i class="fab fa-github text-white text-lg"></i>
                                        </a>
                                    </div>
                                    <div class="col-2 text-center me-auto">
                                        <a class="btn btn-link px-3" href="javascript:;">
                                            <i class="fab fa-google text-white text-lg"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <Form role="form" class="text-start mt-3" :validation-schema="schema" @submit="handleLogin"
                                @invalid-submit="badSubmit">
                                <div class="mb-3">
                                    <material-input-field id="email" v-model:value="user.email" type="email" label="Correo"
                                        name="email" variant="static" />
                                </div>
                                <div class="mb-3">
                                    <material-input-field id="password" v-model:value="user.password" type="password"
                                        label="Contraseña" name="password" variant="static" />
                                </div>
                                <material-switch id="rememberMe" name="Remember Me">Recuerdame</material-switch>
                                <div class="text-center">
                                    <material-button class="my-4 mb-2" variant="gradient" color="danger" full-width>
                                        <span>Ingresar</span>
                                    </material-button>
                                </div>
                                <p class="mt-4 text-sm text-center">
                                    Don't have an account?
                                    <router-link :to="{ name: 'Signup' }"
                                        class="text-danger text-gradient font-weight-bold">Sign
                                        up</router-link>
                                </p>
                                <p class="text-sm text-center">
                                    <router-link :to="{ name: 'Password Forgot' }"
                                        class="text-danger text-gradient font-weight-bold">Recover
                                        Password</router-link>
                                </p>
                            </Form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer position-absolute bottom-2 py-2 w-100">
            <div class="container">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-12 col-md-6 my-auto">
                        <div class="copyright text-center text-sm text-white text-lg-start">
                            © {{ new Date().getFullYear() }}, made with
                            <i class="fa fa-heart" aria-hidden="true"></i> by
                            <a href="https://www.creative-tim.com" class="font-weight-bold text-white"
                                target="_blank">Creative Tim</a>
                            and
                            <a href="https://updivision.com" class="font-weight-bold text-white"
                                target="_blank">UPDIVISION</a>
                            for a better web.
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com" class="nav-link text-white" target="_blank">Creative
                                    Tim</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://updivision.com" class="nav-link text-white" target="_blank">UPDIVISION</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/presentation" class="nav-link text-white"
                                    target="_blank">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/blog" class="nav-link text-white"
                                    target="_blank">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-white"
                                    target="_blank">License</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</template>

<script>
import Navbar from "@/examples/PageLayout/Navbar.vue";
import MaterialInputField from "@/components/MaterialInputField.vue";
import MaterialSwitch from "@/components/MaterialSwitch.vue";
import MaterialButton from "@/components/MaterialButton.vue";
import showSwal from "@/mixins/showSwal";
import { mapMutations } from "vuex";
import { Form } from "vee-validate"
import * as Yup from 'yup'

export default {
    name: "Login",
    components: {
        Navbar,
        MaterialInputField,
        MaterialSwitch,
        MaterialButton,
        Form,
    },
    data() {
        return {
            user: { email: "admin@jsonapi.com", password: "secret" },
            schema: Yup.object().shape({
                email: Yup.string().email("Email has to be a valid email address").required("Email is a required input"),
                password: Yup.string().required("Password is a required input")
            }),
        };
    },
    computed: {
        loggedIn() {
            return this.$store.state.auth.loggedIn;
        }
    },
    beforeMount() {
        this.toggleEveryDisplay();
        this.toggleHideConfig();
    },
    beforeUnmount() {
        this.toggleEveryDisplay();
        this.toggleHideConfig();
    },
    methods: {
        ...mapMutations(["toggleEveryDisplay", "toggleHideConfig"]),
        async handleLogin() {
            try {
                await this.$store.dispatch('auth/login', this.user);
                this.$router.push({ name: 'Dashboard' })
            } catch (error) {
                showSwal.methods.showSwal({
                    type: "error",
                    message: "Invalid credentials!",
                    width: 500
                });
            }
        },
    },
};
</script>
