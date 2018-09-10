<template>
    <el-dialog
            width="70%" top="5vh"
            :visible="modal"
            @update:visible="update">
        <span slot="title">
            <h4>Create Bank Site</h4>
        </span>
        <item-form ref="itemForm" @closeModal="close" :customer-id="customerId"></item-form>
        <span slot="footer" class="dialog-footer">
            <div class="text-center">
                <el-button @click="$emit('close')">Close</el-button>
                <el-button type="primary" @click="submit">Save</el-button>
            </div>
        </span>
    </el-dialog>
</template>

<script>
    import ItemForm from "../forms/ItemForm";

    export default {
        name: "bank-sites-modal-create",
        components: {ItemForm},
        data() {
            return {}
        },
        props: {
            modal: {
                type: Boolean,
                required: true
            },
            customerId: null
        },
        methods: {
            update(show) {
                this.$emit('update:modal', show)
            },
            submit() {
                this.$refs.itemForm.submitForm();
            },
            close() {
                this.$emit('close');
                this.$parent.getAllBankSites();
            }
        }
    }
</script>

<style scoped>
</style>



