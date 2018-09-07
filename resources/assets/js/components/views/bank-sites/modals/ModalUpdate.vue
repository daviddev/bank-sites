<template>
    <el-dialog
            width="70%" top="5vh"
            :visible="modal"
            @update:visible="update">
        <span slot="title">
            <h4>Update Bank Site</h4>
        </span>
        <span>This is a message</span>
        <span slot="footer" class="dialog-footer">
            <div class="text-center">
                <el-button @click="update(false)">Close</el-button>
                <el-button type="primary">Save</el-button>
            </div>
        </span>
    </el-dialog>
</template>

<script>
    export default {
        name: "bank-sites-modal-update",
        data() {
            return {}
        },
        props: {
            modal: {
                type: Boolean,
                required: true
            }
        },
        methods: {
            update(show) {
                this.$emit('update:modal', show)
            }
        }
    }
</script>

<style scoped>
</style>



