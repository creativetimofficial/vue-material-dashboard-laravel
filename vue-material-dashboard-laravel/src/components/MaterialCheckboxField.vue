<template>
    <div class="form-check p-0">
        <Field :id="id" class="form-check-input" type="checkbox" :name="name" :checked="checked" @click="(e) =>
        this.$emit('update:checked', e.target.checked)" :value="checked" />
        <label :for="id" class="custom-control-label">
            <slot />
        </label>
    </div>
    <ErrorMessage :name="name" class="text-xs text-center text-danger mt-1" as="div"></ErrorMessage>
</template>

<script>
import { Field, ErrorMessage } from "vee-validate";

export default {
    name: "MaterialCheckboxField",
    components: {
        Field,
        ErrorMessage,
    },
    props: {
        name: {
            type: String,
            default: "",
        },
        id: {
            type: String,
            default: "",
        },
        checked: Boolean,
    },
    emits: ['update:checked'],
};
</script>
