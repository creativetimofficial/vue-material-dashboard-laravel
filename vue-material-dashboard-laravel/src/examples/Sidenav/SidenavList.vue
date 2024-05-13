<template>
  <div class="w-auto h-auto collapse navbar-collapse max-height-vh-100 h-100" id="sidenav-collapse-main">
    <ul class="navbar-nav">

      <li class="nav-item">
        <sidenav-collapse url="#" :aria-controls="''" v-bind:collapse="false" collapseRef="dashboard" navText="Tableros">
          <template v-slot:icon>
            <i class="material-icons-round opacity-10 fs-5">dashboard</i>
          </template>
        </sidenav-collapse>
      </li>
      <li class="nav-item">
        <sidenav-collapse url="#" :aria-controls="''" v-bind:collapse="false" collapseRef="tables" navText="Tablas">
          <template v-slot:icon>
            <i class="material-icons-round opacity-10 fs-5">table_view</i>
          </template>
        </sidenav-collapse>
      </li>
      <li class="nav-item">
        <sidenav-collapse url="#" :aria-controls="''" v-bind:collapse="false" collapseRef="billing" navText="Cuentas">
          <template v-slot:icon>
            <i class="material-icons-round opacity-10 fs-5">receipt_long</i>
          </template>
        </sidenav-collapse>
      </li>
      <li class="nav-item">
        <sidenav-collapse url="#" :aria-controls="''" v-bind:collapse="false" collapseRef="rtl-page" navText="Rtl">
          <template v-slot:icon>
            <i class="material-icons-round opacity-10 fs-5">format_textdirection_r_to_l</i>
          </template>
        </sidenav-collapse>
      </li>
      <li class="nav-item">
        <sidenav-collapse url="#" :aria-controls="''" v-bind:collapse="false" collapseRef="notifications"
          navText="Notificaciones">
          <template v-slot:icon>
            <i class="material-icons-round opacity-10 fs-5">notifications</i>
          </template>
        </sidenav-collapse>
      </li>

      <li class="mt-3 nav-item">
        <h6 class="text-xs ps-4 text-uppercase font-weight-bolder text-white"
          :class="this.$store.state.isRTL ? 'me-4' : 'ms-2'">
          EXAMPLES (API)
        </h6>
      </li>

      <li class="nav-item">
        <sidenav-collapse url="#" :aria-controls="''" v-bind:collapse="false" collapseRef="user-profile"
          navText="Perfil de modelos">
          <template v-slot:icon>
            <i class="material-icons-round opacity-10 fs-5">person</i>
          </template>
        </sidenav-collapse>
      </li>
      <li class="nav-item">
        <sidenav-collapse url="#" :aria-controls="''" v-bind:collapse="false" collapseRef="users" navText="Modelos">
          <template v-slot:icon>
            <i class="material-icons-round opacity-10 fs-5">people</i>
          </template>
        </sidenav-collapse>
      </li>



      <li class="mt-3 nav-item">
        <h6 class="text-xs ps-4 text-uppercase font-weight-bolder text-white"
          :class="this.$store.state.isRTL ? 'me-4' : 'ms-2'">
          ACCOUNT PAGES
        </h6>
      </li>

      <li class="nav-item">
        <sidenav-collapse url="#" :aria-controls="''" v-bind:collapse="false" collapseRef="profile" navText="Perfil">
          <template v-slot:icon>
            <i class="material-icons-round opacity-10 fs-5">person</i>
          </template>
        </sidenav-collapse>
      </li>
      <li class="nav-item">
        <sidenav-collapse url="#" :aria-controls="''" v-bind:collapse="false" collapseRef="sign-in" navText="Ingresar">
          <template v-slot:icon>
            <i class="material-icons-round opacity-10 fs-5">login</i>
          </template>
        </sidenav-collapse>
      </li>
      <li class="nav-item">
        <sidenav-collapse url="#" :aria-controls="''" v-bind:collapse="false" collapseRef="sign-up" navText="Registrase">
          <template v-slot:icon>
            <i class="material-icons-round opacity-10 fs-5">assignment</i>
          </template>
        </sidenav-collapse>
      </li>
      <!-- Páginas -->
      <li class="nav-item">
        <sidenav-collapse url="/paginas" :aria-controls="''" v-bind:collapse="false" collapseRef="paginas" navText="Páginas">
          <template v-slot:icon>
            <i class="material-icons-round opacity-10 fs-5">web</i>
          </template>
        </sidenav-collapse>
      </li>

      <!-- Pagos -->
      <li class="nav-item">
        <sidenav-collapse url="/pagos" :aria-controls="''" v-bind:collapse="false" collapseRef="pagos" navText="Pagos">
          <template v-slot:icon>
            <i class="material-icons-round opacity-10 fs-5">payment</i>
          </template>
        </sidenav-collapse>
      </li>

      <!-- Perfiles -->
      <li class="nav-item">
        <sidenav-collapse url="/perfiles" :aria-controls="''" v-bind:collapse="false" collapseRef="perfiles" navText="Perfiles">
          <template v-slot:icon>
            <i class="material-icons-round opacity-10 fs-5">assignment_ind</i>
          </template>
        </sidenav-collapse>
      </li>

      <!-- Personas -->
      <li class="nav-item">
        <sidenav-collapse url="/personas" :aria-controls="''" v-bind:collapse="false" collapseRef="personas" navText="Personas">
          <template v-slot:icon>
            <i class="material-icons-round opacity-10 fs-5">group</i>
          </template>
        </sidenav-collapse>
      </li>

    </ul>
    <div class="sidenav-footer position-absolute w-100 bottom-0">
      <div class="mx-3">
        <a class="btn mt-4 w-100" :class="`bg-gradient-${this.$store.state.color}`"
          href="https://www.creative-tim.com/product/vue-material-dashboard-laravel-pro?_ga=2.100464214.933780196.1684307546-944306388.1662358829">Upgrade to pro</a>
      </div>
    </div>
  </div>
</template>
<script>
import SidenavCollapse from "./SidenavCollapse.vue";

export default {
  name: "SidenavList",
  props: {
    cardBg: String
  },
  data() {
    return {
      title: "Soft UI Dashboard PRO",
      controls: "dashboardsExamples",
      isActive: "active"
    };
  },
  components: {
    SidenavCollapse
  },
  methods: {
    getRoute() {
      const routeArr = this.$route.path.split("/");
      return routeArr[1];
    },
    logout() {
      this.$store.dispatch("auth/logout");
    }
  }
};
</script>
