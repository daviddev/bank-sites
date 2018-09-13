<template>
    <el-dialog
            width="70%" top="5vh"
            :visible="modal"
            @update:visible="close">
        <span slot="title">
            <h4>Update Bank Site</h4>
        </span>
        <item-form
                ref="itemForm"
                :customer-id="customerId"
                :bank-site="bankSite"
                @form-submitted="submitted"
                @closeModal="close"
        />
    </el-dialog>
</template>

<script>
    import ItemForm from "../forms/ItemForm";
    export default {
        name: "bank-sites-modal-update",
        components: {ItemForm},
        data() {
            return {}
        },
        props: {
            modal: {
                type: Boolean,
                required: true
            },
            bankSite: {},
            customerId: null
        },
        methods: {
            close() {
                this.$emit('close')
            },
            submitted() {
                this.$emit('submitted')
                this.close()
            }
        }
    }
</script>

<style scoped>
</style>



