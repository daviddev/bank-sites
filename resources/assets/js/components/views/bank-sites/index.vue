<template>
    <div>
        <el-table :data="bankSites" style="width: 100%" :empty-text="emptyTableText">
            <el-table-column label="ID" align="center">
                <template slot-scope="scope">
                    <!--<i class="el-icon-time"></i>-->
                    <span style="margin-left: 10px">{{ scope.row.id }}</span>
                </template>
            </el-table-column>
            <el-table-column label="Customer ID" align="center">
                <template slot-scope="scope">
                    <!--<el-popover trigger="hover" placement="top">-->
                        <!--<p>Name: {{ scope.row.name }}</p>-->
                        <!--<p>Addr: {{ scope.row.address }}</p>-->
                        <div slot="reference" class="name-wrapper">
                            <el-tag size="medium">{{ scope.row.customer_id }}</el-tag>
                        </div>
                    <!--</el-popover>-->
                </template>
            </el-table-column>
            <el-table-column label="Type" align="center">
                <template slot-scope="scope">
                    <span style="margin-left: 10px">{{ scope.row.type }}</span>
                </template>
            </el-table-column>
            <el-table-column label="Brand Name" align="center">
                <template slot-scope="scope">
                    <span style="margin-left: 10px">{{ scope.row.brand_name }}</span>
                </template>
            </el-table-column>
            <el-table-column label="Domain Name" align="center">
                <template slot-scope="scope">
                    <span style="margin-left: 10px">{{ scope.row.domain_name }}</span>
                </template>
            </el-table-column>
            <el-table-column label="Company Name" align="center">
                <template slot-scope="scope">
                    <span style="margin-left: 10px">{{ scope.row.company_name }}</span>
                </template>
            </el-table-column>
            <el-table-column label="Company Address" align="center">
                <template slot-scope="scope">
                    <span style="margin-left: 10px">{{ scope.row.company_address }}</span>
                </template>
            </el-table-column>

            <el-table-column label="Operations" align="center" v-if="roleUser === 2">
                <template slot-scope="scope">
                    <el-button size="mini" @click="openModalUpdate(scope.$index, scope.row)">Edit</el-button>
                    <el-button size="mini" type="danger" @click="handleDelete(scope.$index, scope.row)">Delete</el-button>
                </template>
            </el-table-column>
        </el-table>

        <modal-create
            v-if="showModalCreate"
            :modal="showModalCreate"
            :customer-id="customerId"
            @submitted="getAllBankSites"
            @close="closeModalCreate"
        />

        <modal-update
            v-if="showModalUpdate"
            :modal="showModalUpdate"
            :bank-site="bankSite"
            :customer-id="customerId"
            @submitted="getAllBankSites"
            @close="closeModalUpdate"
        />
    </div>
</template>

<script>
    import apiBankSites from '../../../api/bank-sites'
    import ModalCreate from './modals/ModalCreate'
    import ModalUpdate from './modals/ModalUpdate'

    export default {
        name: "bank-sites",
        data() {
            return {
                emptyTableText: 'You have no bank sites',
                showModalCreate: false,
                showModalUpdate: false,
                bankSites: [],
                bankSite: {}
            }
        },
        components: {
            ModalCreate,
            ModalUpdate
        },
        props: ['roleUser', 'customerId'],
        created () {
            this.getAllBankSites()
        },
        methods: {
            openModalCreate() {
                this.showModalCreate = true
            },
            openModalUpdate(index, row) {
                this.showModalUpdate = true;
                this.bankSite = row;
            },
            closeModalCreate() {
                this.showModalCreate = false
            },
            closeModalUpdate() {
                this.showModalUpdate = false;
                this.bankSite = {}
            },
            handleDelete(index, row) {
                // console.log(index, row);
            },
            getAllBankSites() {
                apiBankSites.get(this.customerId)
                    .then(response => {
                        this.bankSites = response.data;
                    })
                    .catch(e => {
                        console.error(e)
                    })
            }
        }
    }
</script>

<style scoped>

</style>



