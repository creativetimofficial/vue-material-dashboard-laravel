<template>
    <div class="bg-white">
        <div class="container top-0 position-sticky z-index-sticky">
            <div class="row">
                <div class="col-12">
                    <navbar isBlur="blur my-3 py-2 mt-4 start-0 end-0 mx-4 shadow blur border-radius-lg"
                        btnBackground="bg-gradient-success" v-bind:darkMode="true" />
                </div>
            </div>
        </div>
        <main class="mt-0 main-content">
            <section>
                <div class="page-header min-vh-100">
                    <div class="container">
                        <div class="row">
                            <div
                                class="col-6 d-lg-flex d-none h-100 my-auto pe-0 ps-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
                                <div class="position-relative h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center"
                                    :style="{
                                        backgroundImage:
                                            'url(' +
                                            require('@/assets/img/illustrations/illustration-signin.jpg') +
                                            ')',
                                    }"></div>
                            </div>
                            <div
                                class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
                                <div class="card card-plain">
                                    <div class="pb-0 card-header bg-transparent mb-4">
                                        <h4 class="font-weight-bolder">Sign In</h4>
                                        <p class="mb-0">
                                            Enter your email and password to register
                                        </p>
                                    </div>
                                    <div class="card-body">
                                        <Form role="form" :validation-schema="schema" @submit="handleSignup">
                                            <div class="mb-3">
                                                <material-input-field id="name" v-model:value="user.name" label="Name"
                                                    name="name" variant="static"/>
                                            </div>
                                            <div class="mb-3">
                                                <material-input-field id="email" v-model:value="user.email" type="email"
                                                    label="Email" name="email" variant="static"/>
                                            </div>
                                            <div class="mb-3">
                                                <material-input-field id="password" v-model:value="user.password"
                                                    type="password" label="Password" name="password" variant="static"/>
                                            </div>
                                            <div class="mb-3">
                                                <material-input-field id="confirmPassword"
                                                    v-model:value="user.confirmPassword" type="password"
                                                    label="Confirm Password" name="confirmPassword" variant="static"/>
                                            </div>
                                            <material-checkbox-field id="flexCheckDefault"
                                                v-model:checked="termsChecked" name="checkbox">
                                                I agree the
                                                <a href="../../../pages/privacy.html"
                                                    class="text-dark font-weight-bolder">Terms and
                                                    Conditions</a>
                                            </material-checkbox-field>
                                            <div class="text-center">
                                                <material-button color="success" variant="gradient" full-width
                                                    class="mt-4 mb-0">Sign up</material-button>
                                            </div>
                                        </Form>
                                    </div>
                                    <div class="px-1 pt-0 text-center card-footer px-lg-2">
                                        <p class="mx-auto mb-4 text-sm">
                                            Already have an account?
                                            <router-link :to="{ name: 'Login' }"
                                                class="text-success text-gradient font-weight-bold">Sign
                                                in</router-link>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
</template>

<script>
import Navbar from "@/examples/PageLayout/Navbar.vue";
import MaterialInputField from "@/components/MaterialInputField.vue";
import MaterialCheckboxField from "@/components/MaterialCheckboxField.vue";
import MaterialButton from "@/components/MaterialButton.vue";
import showSwal from "@/mixins/showSwal";
const body = document.getElementsByTagName("body")[0];
import { mapMutations } from "vuex";
import { Form } from "vee-validate"
import * as Yup from 'yup'

export default {
    name: "Signup",
    components: {
        Navbar,
        MaterialInputField,
        MaterialCheckboxField,
        MaterialButton,
        Form,
    },
    data() {
        return {
            user: [],
            termsChecked: true,
            schema: Yup.object().shape({
                name: Yup.string().required("Name is a required input"),
                email: Yup.string().email("Email has to be a valid email address").required("Email is a required input"),
                password: Yup.string().required("Password is a required input").min(8, "Password must have at least 8 characters"),
                confirmPassword: Yup.string().required("Confirm password is a required input").oneOf([Yup.ref('password')], 'Your passwords do not match.'),
                checkbox: Yup.boolean().test('is-checked', 'You must agree to the terms and conditions', value => value === true)
            }),
        }
    },
    beforeMount() {
        this.toggleEveryDisplay();
        this.toggleHideConfig();
        body.classList.remove("bg-gray-100");
    },
    beforeUnmount() {
        this.toggleEveryDisplay();
        this.toggleHideConfig();
        body.classList.add("bg-gray-100");
    },
    methods: {
        ...mapMutations(["toggleEveryDisplay", "toggleHideConfig"]),
        async handleSignup() {
            try {
                await this.$store.dispatch('auth/register', this.user);
                showSwal.methods.showSwal({
                    type: "success",
                    message: "Successfully registered!",
                    width: 500
                });
                this.$router.push({ name: 'Profile' })
            } catch (error) {
                showSwal.methods.showSwal({
                    type: "error",
                    message: "Oops, something went wrong!",
                    width: 500
                });
            }
        },
    },
};
</script>
