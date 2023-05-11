<template>
    <tr>
        <td class="text-sm font-weight-normal">{{ name }}</td>
        <td class="text-sm font-weight-normal">{{ email }}</td>
        <td class="text-sm font-weight-normal">{{ created }}</td>
        <td class="text-sm font-weight-normal">
            <div class="text-end">
                <material-button @click="showProMessage()" class="m-1 btn-circle" title="edit" size="sm">
                    <i class="fas fa-pen"></i>
                </material-button>
                <material-button id="delBut" @click="showProMessage()" class="m-1 btn-circle" size="sm" color="danger"
                    title="delete">
                    <i class="fas fa-trash"></i>
                </material-button>
            </div>
        </td>
    </tr>
</template>

<script>
import MaterialButton from "@/components/MaterialButton.vue";
import showSwal from "../../../mixins/showSwal";


export default {
    name: "UserItemList",
    components: {
        MaterialButton,
    },
    props: {
        name: {
            type: String,
            required: true
        },
        email: {
            type: String,
            required: true
        },
        created: {
            type: String,
            required: true
        },
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
}


</script>

<style scoped>
.btn-circle.btn-sm {
    width: 30px;
    height: 30px;
    padding: 6px 0px;
    border-radius: 15px;
    font-size: 8px;
    text-align: center;
}

table tbody tr td{
  padding-left: 1.5rem !important;
}
</style>