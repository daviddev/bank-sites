<template>
    <div>
        <el-card class="box-card">
            <div slot="header" class="clearfix">
                <span style="font-size: 25px">Bank Sites</span>
                <el-button type="primary" class="add-bank pull-right"
                           @click="createBankSiteModal" v-if="user.role_id === 2">Create Bank Site
                </el-button>
            </div>

            <div class="border">
                <bank-sites ref="bankSites" :role-user="2" :customer-id="customerId"/>
            </div>
        </el-card>

        <el-card class="box-card mt-4" v-if="user.role_id === 1">
            <div slot="header" class="clearfix">
                <span style="font-size: 25px">Customers</span>
            </div>

            <div class="border">
                <customers></customers>
            </div>
        </el-card>
    </div>
</template>

<script>
    import BankSites from "../bank-sites/index";
    import Customers from "../customers/index";

    export default {
        name: "Dashboard",
        components: {
            Customers,
            BankSites
        },
        data() {
            return {
                customerId: user.role_id === 2 ? user.id : null
            }
        },
        methods: {
            createBankSiteModal() {
                this.$refs.bankSites.openModalCreate()
            }
        }
    }
</script>

<style scoped>
    .margin-200 {
        margin-left: 200px;
        margin-right: 200px;
        margin-top: 25px;
    }
</style>