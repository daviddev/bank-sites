<template>
    <el-card class="box-card">
        <div slot="header" class="clearfix">
            <span style="font-size: 25px">Bank Sites</span>
            <el-button type="primary" class="add-bank pull-right"
                       @click="createBankSiteModal">Create Bank Site
            </el-button>
        </div>
        <div class="border">
            <bank-sites ref="bankSites" :role-user="2" :customer-id="customerId"/>
        </div>
    </el-card>
</template>

<script>
    import BankSites from "../bank-sites/index";
    export default {
        name: "Customer",
        components: {
            BankSites

        },
        data() {
            return {
                customerId: this.$route.params.id
            }
        },
        methods: {
            createBankSiteModal() {
                this.$refs.bankSites.openModalCreate()
            }
        },
        created() {
        }
    }
</script>

<style scoped>

</style>