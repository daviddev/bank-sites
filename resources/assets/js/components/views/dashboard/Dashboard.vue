<template>
    <el-card class="box-card">
        <div slot="header" class="clearfix">
            <span style="font-size: 25px">Bank Sites</span>
            <el-button type="primary" class="add-bank pull-right"
                       @click="createBankSiteModal">Create Bank Site
            </el-button>
        </div>

        <div class="border">
            <bank-sites ref="bankSites"/>
        </div>
    </el-card>
</template>

<script>
    import BankSites from "../bank-sites/index";

    export default {
        name: "Dashboard",
        components: {
            BankSites
        },
        data() {
            return {}
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