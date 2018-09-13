<template>
    <div>
        <el-form :model="companyData" label-position="top" size="small" ref="form" :rules="rules">
            <el-row :gutter="20">
                <el-col :span="6">
                    <el-form-item label="Type" prop="type" ref="type">
                        <el-select v-model="companyData.type" placeholder="Type">
                            <el-option label="Muscle" value="Muscle"></el-option>
                            <el-option label="Diet" value="Diet"></el-option>
                            <el-option label="CBD" value="CBD"></el-option>
                        </el-select>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Brand Name" prop="brandName" ref="brandName">
                        <el-input v-model="companyData.brandName"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Domain Name" prop="domainName" ref="domainName">
                        <el-input v-model="companyData.domainName"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Company Name" prop="companyName" ref="companyName">
                        <el-input v-model="companyData.companyName"></el-input>
                    </el-form-item>
                </el-col>
            </el-row>
            <el-row :gutter="20">
                <el-col :span="6">
                    <el-form-item label="Company Address" prop="companyAddress" ref="companyAddress">
                        <el-input v-model="companyData.companyAddress"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Company City" prop="companyCity" ref="companyCity">
                        <el-input v-model="companyData.companyCity"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Company State" prop="companyState" ref="companyState">
                        <el-input v-model="companyData.companyState"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Company Zip" prop="companyZip" ref="companyZip">
                        <el-input v-model="companyData.companyZip"></el-input>
                    </el-form-item>
                </el-col>
            </el-row>
        </el-form>

        <div class="text-center">
            <el-button style="margin-top: 12px;" @click="nextStep">Next</el-button>
        </div>
    </div>
</template>

<script>
    import assignByKeys from "../../../../../helpers/assign-by-keys";

    export default {
        name: "CompanyStep",
        data() {
            return {
                companyData: {
                    type: null,
                    brandName: null,
                    domainName: null,
                    companyName: null,
                    companyAddress: null,
                    companyCity: null,
                    companyState: null,
                    companyZip: null,
                },
                rules: {
                    type: [
                        { required: true, message: 'Type field is required', trigger: 'change' },
                    ],
                    brandName: [
                        { required: true, message: 'Brand Name field is required', trigger: 'blur' },
                    ],
                    domainName: [
                        { required: true, pattern:  /https?:\/\/(www\.)?[-a-zA-Z0-9@:%._\+~#=]{2,256}\.[a-z]{2,6}\b([-a-zA-Z0-9@:%_\+.~#?&//=]*)/, message: 'Domain Name field is required, and domain address must be valid', trigger: 'blur' },
                    ],
                    companyName: [
                        { required: true, message: 'Company Name field is required', trigger: 'blur' },
                    ],
                    companyAddress: [
                        { required: true, message: 'Company Address field is required', trigger: 'blur' },
                    ],
                    companyCity: [
                        { required: true, message: 'Company City field is required', trigger: 'blur' },
                    ],
                    companyState: [
                        { required: true, message: 'Company State field is required', trigger: 'blur' },
                    ],
                    companyZip: [
                        { required: true, message: 'Company Zip field is required', trigger: 'blur' },
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
            this.companyData = assignByKeys(this.companyData, this.item)
        },
        methods: {
            nextStep() {
                this.$emit('next-step', this.companyData)
            }
        }
    }
</script>

<style scoped>

</style>