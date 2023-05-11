# [Vue Material Dashboard 2](http://demos.creative-tim.com/vue-material-dashboard-2/#/?ref=readme-vmd2) [![Tweet](https://img.shields.io/twitter/url/http/shields.io.svg?style=social&logo=twitter)](https://twitter.com/intent/tweet?url=https://www.creative-tim.com/product/vue-material-dashboard-2&text=Check%20Vue%20Material%20Dashboard%202%20made%20by%20@CreativeTim%20#webdesign%20#dashboard%20#materialdesign%20#vue%20https://www.creative-tim.com/product/vue-material-dashboard)

![version](https://img.shields.io/badge/version-3.0.0-blue.svg) [![GitHub issues open](https://img.shields.io/github/issues/creativetimofficial/vue-material-dashboard-2.svg)](https://github.com/creativetimofficial/vue-material-dashboard-2/issues?q=is%3Aopen+is%3Aissue) [![GitHub issues closed](https://img.shields.io/github/issues-closed-raw/creativetimofficial/vue-material-dashboard-2.svg)](https://github.com/creativetimofficial/vue-material-dashboard-2/issues?q=is%3Aissue+is%3Aclosed)

![Image](https://s3.amazonaws.com/creativetim_bucket/products/596/original/vue-material-dashboard-2.jpg)

Vue Material Dashboard 2 is our newest free Admin Template based on Vue3 & Bootstrap5. If you’re a developer looking to create an admin dashboard that is developer-friendly, rich with features, and highly customisable, here is your match. Our innovative Vue3 & Bootstrap5 dashboard comes with a beautiful design inspired by Google's Material Design and it will help you create stunning websites & web apps to delight your clients

# Download

For the free version of the project you can either

- download the .zip file from the Creative Tim site and extract it or
- make a clone from the Github repository
You will get two project folders: one for the Laravel API project and one for the Vue frontend.


# Table of Contents

- [Versions](#versions)
- [Demo](#demo)
- [Quick Start](#quick-start)
- [Usage](#usage)
- [Documentation](#documentation)
- [File Structure](#file-structure)
- [Browser Support](#browser-support)
- [Resources](#resources)
- [Reporting Issues](#reporting-issues)
- [Technical Support or Questions](#technical-support-or-questions)
- [Licensing](#licensing)
- [Useful Links](#useful-links)

# Versions

[<img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/logos/vue-logo.jpg?raw=true" width="60" height="60" />](https://www.creative-tim.com/product/vue-material-dashboard-2?ref=readme-vmd2)

| VueJS |
| ----- |

| [![Vue Material Dashboard 2](https://s3.amazonaws.com/creativetim_bucket/products/596/thumb/vue-material-dashboard-2.jpg)](http://demos.creative-tim.com/vue-material-dashboard-2/?ref=readme-vmd2)

# Demo

- [Profile](https://demos.creative-tim.com/vue-material-dashboard-2/#/profile?ref=readme-vmd2)
- [Sign In](https://demos.creative-tim.com/vue-material-dashboard-2/#/sign-in?ref=readme-vmd2)
- [Sign Up](https://demos.creative-tim.com/vue-material-dashboard-2/#/sign-up?ref=readme-vmd2)

[View More](https://demos.creative-tim.com/vue-material-dashboard-2/#/dashboard?ref=readme-vmd2).

# Quick start

Quick start options:

- Download from [Creative Tim](https://www.creative-tim.com/product/vue-material-dashboard-2?ref=readme-vmd2).

## Introduction

JSON:API is a specification for how a client should request that resources be fetched or modified, and how a server should respond to those requests. It is designed to minimize both the number of requests and the amount of data transmitted between clients and servers. This efficiency is achieved without compromising readability, flexibility, or discoverability.

## Prerequisites

### JSON:API backend
The Laravel JSON:API backend project requires a proper multi-threaded web server such as Apache/Nginx environment with PHP, Composer and MySQL.

[Click here to go to the JSON:API docs]()

**Do not use `php artisan serve` as it will result in stalled requests due to the single-threaded nature of the built-in PHP web server.**

We strongly recommend using [Laradock](https://laradock.io/) for Linux and Mac or [Laragon](https://laragon.org/download/) for Windows if possible.

Other options for your local environment:

Windows: [How to install WAMP on Windows](https://updivision.com/blog/post/beginner-s-guide-to-setting-up-your-local-development-environment-on-windows)
Linux: [How to install LAMP on Linux](https://howtoubuntu.org/how-to-install-lamp-on-ubuntu)
Mac: [How to install MAMP on MAC](https://wpshout.com/quick-guides/how-to-install-mamp-on-your-mac/)
You will also need to install Composer 2: https://getcomposer.org/doc/00-intro.md


### Vue Material frontend

The Vue Material frontend project requires a working local environment with NodeJS version 8.9 or above (8.11.0+ recommended), npm, VueCLI.

Install Node: https://nodejs.org/ (version 8.11.0+ recommended)

Install NPM: https://www.npmjs.com/get-npm

Install VueCLI: https://cli.vuejs.org/guide/installation.html

## Laravel JSON:API Project Installation

1. Navigate in your Laravel API project folder: cd `your-laravel-json-api-project`
2. Install project dependencies: `composer install`
3. Create a new .env file: `cp .env.example .env`
4. Add your own database credentials in the .env file in DB_DATABASE, DB_USERNAME, DB_PASSWORD
5. Create users table: `php artisan migrate --seed`
6. Generate application key: `php artisan key:generate`
7. Install Laravel Passport: `php artisan passport:install` and set in the .env file the CLIENT_ID and CLIENT_SECRET that you receive
8. Add your own mailtrap.io credentials in MAIL_USERNAME and MAIL_PASSWORD in the .env file

## Vue Material Dashboard Project Installation

1. Navigate to your Vue Dashboard project folder: `cd your-vue-material-dashbord-project`
2. Install project dependencies: `npm install`
3. Create a new .env file: `cp .env.example .env`
4. `VUE_APP_BASE_URL` should contain the URL of your Vue Material Dashboard Project (eg. http://localhost:8080/)
5. `VUE_APP_API_BASE_URL` should contain the URL of your Laravel JSON:API Project. (eg. http://localhost:3000/api/v1)
6. Run `npm run dev` to start the application in a local development environment or npm run build to build release distributables.

## Fully Coded Elements 

Vue Material Dashboard 2 is built with over 70 frontend individual elements, like buttons, inputs, navbars, nav tabs, cards, or alerts, giving you the freedom of choosing and combining. All components can take variations in color, which you can easily modify using sass files. You will save a lot of time going from prototyping to full-functional code because all elements are implemented.

This free Vue3 & Bootstrap5 Dashboard is coming with prebuilt design blocks, so the development process is seamless,
switching from our pages to the real website is very easy to be done.

View [all components here](https://www.creative-tim.com/learning-lab/vue/alerts/material-dashboard/).

# Usage

Register a user or login using admin@jsonapi.com and secret and start testing the theme.

Besides the dashboard and the auth pages this theme also has an edit profile page. All the necessary files are installed out of the box and all the needed routes are added to `src\router\index.js`. Keep in mind that all the features can be viewed once you log in using the credentials provided above or by registering your own user.

### Dashboard
You can access the dashboard either by using the "**Dashboard**" link in the left sidebar or by adding **/dashboard** in the URL.

### Login
The login functionality is fully implemented in our theme helping you to start your project in no time. To login into dashboard you just have to add **/login** in the URL and fill the login form with the credentials (user: admin@jsonapi.com and password: **secret**).

The `src\views\examples-api\Login.vue` is the Vue component which handles the login functinality. You can easily adapt it to your needs.

It uses the auth store located in `src\store\auth.module.js.`

#### Login example
```
<div class="card-body">
    <Form role="form" class="text-start mt-3" :validation-schema="schema" @submit="handleLogin"
     @invalid-submit="badSubmit">
        <div class="mb-3">
            <material-input-field id="email" v-model:value="user.email" type="email" label="Email"
             name="email" variant="static" />
        </div>
        <div class="mb-3">
            <material-input-field id="password" v-model:value="user.password" type="password"
             label="Password" name="password" variant="static" />
        </div>
        <material-switch id="rememberMe" name="Remember Me">Remember me</material-switch>
        <div class="text-center">
            <material-button class="my-4 mb-2" variant="gradient" color="success" full-width>
                <span>Sign in</span>
            </material-button>
        </div>
        <p class="mt-4 text-sm text-center">
            Don't have an account?
            <router-link :to="{ name: 'Signup' }"
             class="text-success text-gradient font-weight-bold">Sign up
            </router-link>
        </p>
        <p class="text-sm text-center">
            <router-link :to="{ name: 'Password Forgot' }"
             class="text-success text-gradient font-weight-bold">Recover Password
            </router-link>
        </p>
    </Form>
</div>
```

### Register
The register functionality is fully implemented in our theme helping you to start your project in no time. To register a new user you just have to add **/signup** in the URL or click on register link from login page and fill the register form with user details.

The `src\views\examples-api\Signup.vue` is the Vue component which handles the register functinality. You can easily extend it to your needs.

It uses the auth store located in src\store\auth.module.js.

#### Register example

```
<div class="card mt-8">
    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1 text-center py-4">
            <h4 class="font-weight-bolder text-white mt-1">
                Join us today
            </h4>
            <p class="mb-1 text-white text-sm">
                Enter your email and password to register
            </p>
        </div>
    </div>
    <div class="card-body pb-3">
        <Form role="form" :validation-schema="schema" @submit="handleSignup">
            <div class="mb-3">
                <material-input-field id="name" v-model:value="user.name" label="Name"
                    name="name" />
            </div>
            <div class="mb-3">
                <material-input-field id="email" v-model:value="user.email" type="email"
                    label="Email" name="email" />
            </div>
            <div class="mb-3">
                <material-input-field id="password" v-model:value="user.password" type="password"
                    label="Password" name="password" />
            </div>
            <div class="mb-3">
                <material-input-field id="confirmPassword" v-model:value="user.confirmPassword"
                    type="password" label="Confirm Password" name="confirmPassword" />
            </div>
            <material-checkbox-field id="flexCheckDefault" v-model:checked="termsChecked"
                name="checkbox">
                I agree the
                <a href="../../../pages/privacy.html" class="text-dark font-weight-bolder">Terms and
                    Conditions</a>
            </material-checkbox-field>
            <div class="text-center">
                <material-button color="success" variant="gradient" full-width
                    class="mt-4 mb-0">Sign up</material-button>
            </div>
        </Form>
    </div>
    <div class="card-footer text-center pt-0 px-sm-4 px-1">
        <p class="mb-4 mx-auto">
            Already have an account?
            <router-link :to="{ name: 'Login' }"
                class="text-success text-gradient font-weight-bold">Sign in</router-link>
        </p>
    </div>
</div>
```

### Profile edit

You have the option to edit the current logged in user's profile information (name, email, profile picture) and password. To access this page, just click the "**User Profile**" link in the left sidebar or add **/user-profile** in the URL.

The `src\views\examples-api\profile` is the folder with Vue components that handle the update of the user information and password.

#### Profile edit example

```
<div class="multisteps-form__panel border-radius-xl bg-white" data-animation="FadeIn">
    <h5 class="font-weight-bolder mb-0">About me</h5>
    <div class="multisteps-form__content">

      <div class="row mt-4 overflow-hidden">
        <div>
          <material-avatar :img="imgSource" shadow="regular" class="img-fluid w-20 mt-7">
          </material-avatar>
        </div>
        <div class="mt-1  mb-2">
          <material-button size="sm" type="button">
            <label for="imageInput" class="mb-0 text-white small">Select Image</label>
            <input id="imageInput" @change.prevent="onFileChange" type="file" style="display: none;" accept="image/*">
          </material-button>
        </div>
      </div>


      <div class="row mt-5">

        <material-input id="name" label="Name" variant="static" v-model:value="user.name" name="name" />
        <validation-error :errors="apiValidationErrors.name" />

      </div>

      <div class="row mt-5">
        <material-input id="email" type="email" label="Email Address" variant="static" v-model:value="user.email"
          name="email" />

        <validation-error :errors="apiValidationErrors.email" />
      </div>

      <div class="button-row d-flex mt-4">
        <material-button type="button" color="dark" variant="gradient" class="ms-auto mb-0 js-btn-next"
          @click="handleSubmit">Submit Changes</material-button>
      </div>
    </div>
  </div>
```

#### Password edit example

```
<div class="multisteps-form__panel border-radius-xl bg-white" data-animation="FadeIn">
    <h5 class="font-weight-bolder mb-0">Change Password</h5>
    <div class="multisteps-form__content mt-4">
      <div class="row">
        <div class="col-12">
          <div class="mt-2">
            <material-input id="password" v-model:value="user.password" type="password" label="Password"
              name="password" />

            <validation-error :errors="apiValidationErrors.password" />
          </div>
          <div class="mt-5">
            <material-input id="confirmPassword" v-model:value="user.password_confirmation" type="password"
              label="Confirm Password" name="confirmPassword" />
          </div>
        </div>
      </div>
      <div class="button-row d-flex mt-4">
        <material-button type="button" color="dark" variant="gradient" class="ms-auto mb-0 js-btn-next"
          @click="handleChange">Change Password</material-button>
      </div>
    </div>
  </div>
```

# Documentation

Each element is well presented in very complex documentation.
You can read more about the [documentation here](https://www.creative-tim.com/learning-lab/vue/overview/material-dashboard/).

### File Structure

Within the download you'll find the following directories and files:

```
vue-material-dashboard-2
    ├── public
    │   ├── favicon.png
    │   └── index.html
    ├── src
    │   ├── assets
    │   │   ├── css
    │   │   ├── fonts
    │   │   ├── img
    │   │   ├── js
    │   │   └── scss
    │   ├── components
    │   │   ├── MaterialAlert.vue
    │   │   ├── MaterialAvatar.vue
    │   │   ├── MaterialBadge.vue
    │   │   ├── MaterialButton.vue
    │   │   ├── MaterialCheckbox.vue
    │   │   ├── MaterialCheckboxField.vue
    │   │   ├── MaterialInput.vue
    │   │   ├── MaterialInputField.vue
    │   │   ├── MaterialPagination.vue
    │   │   ├── MaterialPaginationItem.vue
    │   │   ├── MaterialProgress.vue
    │   │   ├── MaterialRadio.vue
    │   │   ├── MaterialSnackbar.vue
    │   │   ├── MaterialSwitch.vue
    │   │   ├── MaterialTextarea.vue
    |   |   └── ValidationError.vue
    │   ├── examples
    │   │   ├── Cards
    │   │   ├── Charts
    │   │   ├── Navbars
    │   │   ├── PageLayout
    │   │   ├── Sidenav
    │   │   ├── Breadcrumbs.vue
    │   │   ├── Configurator.vue
    │   │   └── Footer.vue
    │   ├── mixins
    │   │   ├── formMixin.js
    │   │   └── showSwal.js
    │   ├── router
    |   |    └── index.js
    │   ├── services
    │   │   ├── auth-header.js
    │   │   ├── auth.service.js
    │   │   └── profile.service.js
    │   ├── store
    │   │   ├── auth.module.js
    |   |   ├── index.js
    │   │   └── profile.module.js
    │   ├── views
    │   │   ├── components
    |   |   ├── examples-api 
    |   |   |   ├── profile
    |   |   |   ├── users
    |   |   |   ├── Login.vue
    |   |   |   ├── PasswordForgot.vue
    |   |   |   ├── PasswordReset.vue
    │   │   |   └── Signup.vue
    │   │   ├── Billing.vue
    │   │   ├── Dashboard.vue
    │   │   ├── Home.vue
    │   │   ├── Notification.vue
    │   │   ├── Profile.vue
    │   │   ├── Rtl.vue
    │   │   ├── Sales.vue
    │   │   ├── SignIn.vue
    │   │   ├── SignUp.vue
    │   │   └── Tables.vue
    │   ├── App.vue
    │   ├── main.js
    │   └── material-dashboard.js
    ├── .browserslistrc
    ├── .eslintrc.js
    ├── .gitignore
    ├── babel.config.json
    ├── CHANGELOG.md
    ├── ISSUE_TEMPLATE.md
    ├── package.json
    └── README.md
```

### Special thanks

During the development of this dashboard, we have used many existing resources from awesome developers. We want to thank them for providing their tools open source:

- [Popper.js](https://popper.js.org/) - Kickass library used to manage poppers
- [Charts Js](https://www.chartjs.org/) - Simple yet flexible JavaScript charting for designers & developers

Let us know your thoughts below. And good luck with development!

## Browser Support

At present, we officially aim to support the last two versions of the following browsers:

<img src="https://s3.amazonaws.com/creativetim_bucket/github/browser/chrome.png" width="64" height="64"> <img src="https://s3.amazonaws.com/creativetim_bucket/github/browser/firefox.png" width="64" height="64"> <img src="https://s3.amazonaws.com/creativetim_bucket/github/browser/edge.png" width="64" height="64"> <img src="https://s3.amazonaws.com/creativetim_bucket/github/browser/safari.png" width="64" height="64"> <img src="https://s3.amazonaws.com/creativetim_bucket/github/browser/opera.png" width="64" height="64">


## Resources

- [Live Preview](https://demos.creative-tim.com/vue-material-dashboard-2/#/?ref=readme-vmd2)
- [Download Page](https://www.creative-tim.com/product/vue-material-dashboard-2?ref=readme-vmd2)
- Documentation is [here](https://www.creative-tim.com/learning-lab/vue/overview/material-dashboard/?ref=readme-vmd2)
- [License Agreement](https://www.creative-tim.com/license?ref=readme-vmd2)
- [Support](https://www.creative-tim.com/contact-us?ref=readme-vmd2)
- Issues: [Github Issues Page](https://github.com/creativetimofficial/ct-vue-material-dashboard-2-pro/issues)

## Reporting Issues

We use GitHub Issues as the official bug tracker for the Vue Material Dashboard 2. Here are some advices for our users that want to report an issue:

1. Make sure that you are using the latest version of the Vue Material Dashboard 2. Check the CHANGELOG from your dashboard on our [website](https://www.creative-tim.com/product/vue-material-dashboard-2?ref=readme-vmd2).
2. Providing us reproducible steps for the issue will shorten the time it takes for it to be fixed.
3. Some issues may be browser specific, so specifying in what browser you encountered the issue might help.

## Technical Support or Questions

If you have questions or need help integrating the product please [contact us](https://www.creative-tim.com/contact-us?ref=readme-vmd2) instead of opening an issue.

## Licensing

- Copyright 2022 [Creative Tim](https://www.creative-tim.com?ref=readme-vmd2)
- Creative Tim [license](https://www.creative-tim.com/license?ref=readme-vmd2)

## Useful Links

- [More products](https://www.creative-tim.com/templates?ref=readme-vmd2) from Creative Tim

- [Tutorials](https://www.youtube.com/channel/UCVyTG4sCw-rOvB9oHkzZD1w)

- [Freebies](https://www.creative-tim.com/bootstrap-themes/free?ref=readme-vmd2) from Creative Tim

- [Affiliate Program](https://www.creative-tim.com/affiliates/new?ref=readme-vmd2) (earn money)

##### Social Media

Twitter: <https://twitter.com/CreativeTim>

Facebook: <https://www.facebook.com/CreativeTim>

Dribbble: <https://dribbble.com/creativetim>

Google+: <https://plus.google.com/+CreativetimPage>

Instagram: <https://instagram.com/creativetimofficial>
