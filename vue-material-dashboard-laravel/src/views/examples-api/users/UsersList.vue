<template>
    <div class="py-4 container-fluid">
        <div class="mt-4 user">
            <div class="col-12">
                <div class="alert alert-danger text-white">
                    <strong>Add, Edit, Delete features are not functional. This is a
                        PRO feature! Click <a href="https://www.creative-tim.com/live/vue-argon-dashboard-pro-laravel"
                            target="_blank">here</a> to see the PRO product.
                    </strong>
                </div>
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header border-bottom">
                        <div class="user d-flex align-items-center">
                            <div class="col-6">
                                <h5 class="mb-0 ms-0">Users</h5>
                            </div>
                            <div class="col-6 text-end">
                                <material-button class="float-right btn btm-sm" @click="showProMessage()">
                                    <i class="fas fa-user-plus me-2"></i>
                                    Add User
                                </material-button>
                            </div>
                        </div>
                    </div>

                    <!-- Card body -->
                    <div class="px-0 pb-0 card-body">

                        <!-- Table -->
                        <table class="table table-flush mt-3">
                            <thead class="thead-light">
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Created At</th>
                                    <th class="text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <user-item-list :name="me.name" :email="me.email"
                                    :created="me.created_at"></user-item-list>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import MaterialButton from "@/components/MaterialButton.vue";
import UserItemList from "./UserItemList.vue";
import showSwal from "@/mixins/showSwal";

export default {
    name: "UsersList",
    components: {
        MaterialButton,
        UserItemList
    },
    data() {
        return {
            me: {}
        }
    },
    async mounted() {
        await this.$store.dispatch('profile/getProfile');
        this.me = this.$store.getters['profile/getUserProfile'];
    },
    methods: {
        showProMessage() {
            showSwal.methods.showSwal({
                type: "error",
                message: 'This is a PRO feature.',
                width: 500
            });
        }
    }
};
</script>

<style scoped>
table thead tr th {
    padding-left: 1.5 rem !important;
}
</style>
