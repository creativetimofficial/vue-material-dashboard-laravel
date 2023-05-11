<template>
  <div class="container-fluid py-4">
    <div class="col-12 col-lg-8 m-auto">
      <div class="card">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-success shadow-success border-radius-lg pt-4 pb-3">
              <p class="ms-3 text-white text-center"><b>User Profile</b></p>
          </div>
        </div>
        <div class="card-body">
          <form class="mt-4">
            <info />
          </form>
          <hr class="mt-10 mb-5">
          <form>
            <password />
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Info from "./Info.vue";
import Password from "./Password.vue";
export default {
  name: "User Profile",
  components: {
    Info,
    Password,
  },
};
</script>

