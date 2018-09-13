<template>
    <div id="app">
        <el-form :model="customerData" label-position="top" size="small" ref="form" :rules="rules">
            <el-row :gutter="20">
                <el-col :span="6">
                    <el-form-item label="CS Phone Number" prop="csPhone" ref="csPhone">
                        <el-input v-model="customerData.csPhone"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="CS Address" prop="csAddress" ref="csAddress">
                        <el-input v-model="customerData.csAddress"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="CS City" prop="csCity" ref="csCity">
                        <el-input v-model="customerData.csCity"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="CS State" prop="csState" ref="csState">
                        <el-input v-model="customerData.csState"></el-input>
                    </el-form-item>
                </el-col>
            </el-row>
            <el-row :gutter="20">
                <el-col :span="6">
                    <el-form-item label="CS Zip" prop="csZip" ref="csZip">
                        <el-input v-model="customerData.csZip"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="CS Email" prop="csEmail" ref="csEmail">
                        <el-input v-model="customerData.csEmail"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Returns Address" prop="returnsAddress" ref="returnsAddress">
                        <el-input v-model="customerData.returnsAddress"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Returns City" prop="returnsCity" ref="returnsCity">
                        <el-input v-model="customerData.returnsCity"></el-input>
                    </el-form-item>
                </el-col>
            </el-row>
            <el-row :gutter="20">
                <el-col :span="6">
                    <el-form-item label="Returns State" prop="returnsState" ref="returnsState">
                        <el-input v-model="customerData.returnsState"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Returns Zip" prop="returnsZip" ref="returnsZip">
                        <el-input v-model="customerData.returnsZip"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Offer Type" prop="offerType" ref="offerType">
                        <el-select v-model="customerData.offerType" placeholder="Type">
                            <el-option label="Straight Sale (SS)" value="Straight Sale (SS)"></el-option>
                            <el-option label="Trial" value="Trial"></el-option>
                            <el-option label="Both" value="Both"></el-option>
                        </el-select>
                    </el-form-item>
                </el-col>
            </el-row>
        </el-form>

        <div class="text-center">
            <el-button style="margin-top: 12px;" @click="prevStep">Previous</el-button>
            <el-button style="margin-top: 12px;" @click="nextStep">Next</el-button>
        </div>
    </div>
</template>

<script>
    import assignByKeys from "../../../../../helpers/assign-by-keys";

    export default {
        name: "CustomerStep",
        data() {
            return {
                customerData: {
                    csPhone: null,
                    csAddress: null,
                    csCity: null,
                    csState: null,
                    csZip: null,
                    csEmail: null,
                    returnsAddress: null,
                    returnsCity: null,
                    returnsState: null,
                    returnsZip: null,
                    offerType: null,
                },
                rules: {
                    csPhone: [
                        {required: true, message: 'CS Phone Number field is required', trigger: 'blur'},
                    ],
                    csAddress: [
                        {required: true, message: 'CS Address field is required', trigger: 'blur'},
                    ],
                    csCity: [
                        {required: true, message: 'CS City field is required', trigger: 'blur'},
                    ],
                    csState: [
                        {required: true, message: 'CS State field is required', trigger: 'blur'},
                    ],
                    csZip: [
                        {required: true, message: 'CS Zip field is required', trigger: 'blur'},
                    ],
                    csEmail: [
                        {
                            required: true,
                            pattern: /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,24}))$/,
                            message: 'CS Email field is required, and email address must be valid',
                            trigger: 'blur'
                        },
                    ],
                    returnsAddress: [
                        {required: true, message: 'Returns Address field is required', trigger: 'blur'},
                    ],
                    returnsCity: [
                        {required: true, message: 'Returns City field is required', trigger: 'blur'},
                    ],
                    returnsState: [
                        {required: true, message: 'Returns State field is required', trigger: 'blur'},
                    ],
                    returnsZip: [
                        {required: true, message: 'Returns Zip field is required', trigger: 'blur'},
                    ],
                    offerType: [
                        {required: true, message: 'Offer Type field is required', trigger: 'change'},
                    ],
                }
            }
        },
        props: {
            item: {
                type: Object,
                required: true
            }
        },
        created() {
            this.customerData = assignByKeys(this.customerData, this.item);
        },
        methods: {
            prevStep() {
                this.$emit('prev-step')
            },
            nextStep() {
                this.$emit('next-step', this.customerData)
            }
        }
    }
</script>

<style scoped>

</style>