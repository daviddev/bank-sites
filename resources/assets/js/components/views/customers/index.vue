<template>
    <div>
        <el-table :data="customers" style="width: 100%">
            <el-table-column label="ID" align="center">
                <template slot-scope="scope">
                    <!--<i class="el-icon-time"></i>-->
                    <span style="margin-left: 10px">{{ scope.row.id }}</span>
                </template>
            </el-table-column>
            <el-table-column label="Name" align="center">
                <template slot-scope="scope">
                    <span style="margin-left: 10px">{{ scope.row.name }}</span>
                </template>
            </el-table-column>
            <el-table-column label="Email" align="center">
                <template slot-scope="scope">
                    <span style="margin-left: 10px">{{ scope.row.email }}</span>
                </template>
            </el-table-column>
            <el-table-column label="Operations" align="center">
                <template slot-scope="scope">
                    <el-button size="mini" @click="goToCustomerPage(scope.row.id)">View</el-button>
                    <!--<el-button size="mini" @click="openModalUpdate(scope.$index, scope.row)">Edit</el-button>-->
                    <!--<el-button size="mini" type="danger" @click="handleDelete(scope.$index, scope.row)">Delete</el-button>-->
                </template>
            </el-table-column>
        </el-table>
    </div>
</template>

<script>
    import apiCustomers from '../../../api/customers'

    export default {
        name: "customers",
        data() {
            return {
                customers: []
            }
        },
        components: {
        },
        created () {
            this.getAllCustomers()
        },
        methods: {
            handleDelete(index, row) {
                console.log(index, row);
            },
            getAllCustomers() {
                apiCustomers.get()
                    .then(response => {
                        this.customers = response.data;
                    })
                    .catch(e => {
                        console.error(e)
                    })
            },
            goToCustomerPage(customerId) {
                this.$router.push({name: 'customer', params: {id: customerId}})
            }
        }
    }
</script>

<style scoped>

</style>



