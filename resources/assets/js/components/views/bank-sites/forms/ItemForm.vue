<template>
    <div id="app">
        <el-form :model="item" :rules="rules" label-position="top" size="small" ref="form">
            <el-row :gutter="20">
                <el-col :span="6">
                    <el-form-item label="Type" prop="type">
                        <el-select v-model="item.type" placeholder="Type">
                            <el-option label="Muscle" value="Muscle"></el-option>
                            <el-option label="Diet" value="Diet"></el-option>
                            <el-option label="CBD" value="CBD"></el-option>
                        </el-select>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Brand Name" prop="brandName">
                        <el-input v-model="item.brandName"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Domain Name" prop="domainName">
                        <el-input v-model="item.domainName"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Company Name" prop="companyName">
                        <el-input v-model="item.companyName"></el-input>
                    </el-form-item>
                </el-col>
            </el-row>
            <el-row :gutter="20">
                <el-col :span="6">
                    <el-form-item label="Company Address" prop="companyAddress">
                        <el-input v-model="item.companyAddress"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Company City" prop="companyCity">
                        <el-input v-model="item.companyCity"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Company State" prop="companyState">
                        <el-input v-model="item.companyState"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Company Zip" prop="companyZip">
                        <el-input v-model="item.companyZip"></el-input>
                    </el-form-item>
                </el-col>
            </el-row>
            <el-row :gutter="20">
                <el-col :span="6">
                    <el-form-item label="CS Phone Number" prop="csPhone">
                        <el-input v-model="item.csPhone"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="CS Address" prop="csAddress">
                        <el-input v-model="item.csAddress"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="CS City" prop="csCity">
                        <el-input v-model="item.csCity"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="CS State" prop="csState">
                        <el-input v-model="item.csState"></el-input>
                    </el-form-item>
                </el-col>
            </el-row>
            <el-row :gutter="20">
                <el-col :span="6">
                    <el-form-item label="CS Zip" prop="csZip">
                        <el-input v-model="item.csZip"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="CS Email" prop="csEmail">
                        <el-input v-model="item.csEmail"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Returns Address" prop="returnsAddress">
                        <el-input v-model="item.returnsAddress"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Returns City" prop="returnsCity">
                        <el-input v-model="item.returnsCity"></el-input>
                    </el-form-item>
                </el-col>
            </el-row>
            <el-row :gutter="20">
                <el-col :span="6">
                    <el-form-item label="Returns State" prop="returnsState">
                        <el-input v-model="item.returnsState"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Returns Zip" prop="returnsZip">
                        <el-input v-model="item.returnsZip"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Offer Type" prop="offerType">
                        <el-select v-model="item.offerType" placeholder="Type">
                            <el-option label="Straight Sale (SS)" value="Straight Sale (SS)"></el-option>
                            <el-option label="Trial" value="Trial"></el-option>
                            <el-option label="Both" value="Both"></el-option>
                        </el-select>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Product Name" prop="productName">
                        <el-input v-model="item.productName"></el-input>
                    </el-form-item>
                </el-col>
            </el-row>
            <el-row :gutter="20">
                <el-col :span="6">
                    <el-form-item label="Rebill Initial Product Price">
                        <el-input v-model="item.rebillInitialProductPrice"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Rebill Initial Shipping Price">
                        <el-input v-model="item.rebillInitialShippingPrice"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Rebill Price">
                        <el-input v-model="item.rebillPrice"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Rebill Shipping Price">
                        <el-input v-model="item.rebillShippingPrice"></el-input>
                    </el-form-item>
                </el-col>
            </el-row>
            <el-row :gutter="20">
                <el-col :span="6">
                    <el-form-item label="Straight Sale Product Price">
                        <el-input v-model="item.straightSaleProductPrice"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Straight Sale Shipping Price">
                        <el-input v-model="item.straightSaleShippingPrice"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Domain Registrar" prop="domainReg">
                        <el-select v-model="item.domainReg" placeholder="Type">
                            <el-option label="Namecheap" value="Namecheap"></el-option>
                            <el-option label="Godaddy" value="Godaddy"></el-option>
                        </el-select>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Ingredients" prop="ingredients">
                        <el-input v-model="item.ingredients" type="textarea"></el-input>
                    </el-form-item>
                </el-col>
            </el-row>
            <el-row :gutter="20">
                <el-col :span="6">
                    <el-form-item label="Existing Artwork" prop="existingArtwork">
                        <el-select v-model="item.existingArtwork" placeholder="Type">
                            <el-option label="Yes" value="1"></el-option>
                            <el-option label="No" value="0"></el-option>
                        </el-select>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Has Hosting" prop="hasHosting">
                        <el-select v-model="item.hasHosting" placeholder="Type">
                            <el-option label="Yes" value="1"></el-option>
                            <el-option label="No" value="0"></el-option>
                        </el-select>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Host">
                        <el-input v-model="item.host"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="FTP Username">
                        <el-input v-model="item.ftpUsername"></el-input>
                    </el-form-item>
                </el-col>
            </el-row>
            <el-row :gutter="20">
                <el-col :span="6">
                    <el-form-item label="FTP Password">
                        <el-input v-model="item.ftpPassword"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Port">
                        <el-input v-model="item.port"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="SFTP">
                        <el-select v-model="item.sftp" placeholder="Type">
                            <el-option label="Yes" value="1"></el-option>
                            <el-option label="No" value="0"></el-option>
                        </el-select>
                    </el-form-item>
                </el-col>
                <!--<el-col :span="6">-->
                    <!--<el-form-item label="Finished">-->
                        <!--<el-select v-model="item.finished" placeholder="Type">-->
                            <!--<el-option label="Zone one" value="shanghai"></el-option>-->
                            <!--<el-option label="Zone two" value="beijing"></el-option>-->
                        <!--</el-select>-->
                    <!--</el-form-item>-->
                <!--</el-col>-->
            </el-row>
        </el-form>
    </div>
</template>

<script>
    import {toSnake,toCamel} from 'convert-keys'
    import apiBankSites from "../../../../api/bank-sites";
    // import apiBankSites from '../../../api/bank-sites'
    export default {
        name: "ItemForm",
        data() {
            return {
                item: {
                    customerId: 2,
                    type: null,
                    brandName: null,
                    domainName: null,
                    companyName: null,
                    companyAddress: null,
                    companyCity: null,
                    companyState: null,
                    companyZip: null,
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
                    productName: null,
                    rebillInitialProductPrice: null,
                    rebillInitialShippingPrice: null,
                    rebillPrice: null,
                    rebillShippingPrice: null,
                    straightSaleProductPrice: null,
                    straightSaleShippingPrice: null,
                    ingredients: null,
                    domainReg: null,
                    existingArtwork: null,
                    hasHosting: null,
                    host: null,
                    ftpSername: null,
                    ftpPassword: null,
                    port: null,
                    sftp: null,
                    // finished: null
                },
                rules: {
                    type: [
                        { required: true, message: 'Type field is required', trigger: 'change' },
                    ],
                    brandName: [
                        { required: true, message: 'Brand Name field is required', trigger: 'blur' },
                    ],
                    domainName: [
                        { required: true, message: 'Domain Name field is required', trigger: 'blur' },
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
                    csPhone: [
                        { required: true, message: 'CS Phone Number field is required', trigger: 'blur' },
                    ],
                    csAddress: [
                        { required: true, message: 'CS Address field is required', trigger: 'blur' },
                    ],
                    csCity: [
                        { required: true, message: 'CS City field is required', trigger: 'blur' },
                    ],
                    csState: [
                        { required: true, message: 'CS State field is required', trigger: 'blur' },
                    ],
                    csZip: [
                        { required: true, message: 'CS Zip field is required', trigger: 'blur' },
                    ],
                    csEmail: [
                        { required: true, message: 'CS Email field is required', trigger: 'blur' },
                    ],
                    returnsAddress: [
                        { required: true, message: 'Returns Address field is required', trigger: 'blur' },
                    ],
                    returnsCity: [
                        { required: true, message: 'Returns City field is required', trigger: 'blur' },
                    ],
                    returnsState: [
                        { required: true, message: 'Returns State field is required', trigger: 'blur' },
                    ],
                    returnsZip: [
                        { required: true, message: 'Returns Zip field is required', trigger: 'blur' },
                    ],
                    offerType: [
                        { required: true, message: 'Offer Type field is required', trigger: 'change' },
                    ],
                    productName: [
                        { required: true, message: 'Product Name field is required', trigger: 'blur' },
                    ],
                    ingredients: [
                        { required: true, message: 'Ingredients  field is required', trigger: 'blur' },
                    ],
                    domainReg: [
                        { required: true, message: 'Domain Registrar  field is required', trigger: 'change' },
                    ],
                    existingArtwork: [
                        { required: true, message: 'Existing Artwork  field is required', trigger: 'change' },
                    ],
                    hasHosting: [
                        { required: true, message: 'Has Hosting  field is required', trigger: 'change' },
                    ]
                }
            };
        },
        methods: {
            submitForm() {
                this.$refs.form.validate((valid) => {
                    if (!valid) return false;

                    apiBankSites.post(toSnake(this.item))
                        .then(response => {
                            this.$emit('closeModal')
                            this.$refs.form.resetFields();

                        })
                        .catch(err => {

                        });
                });
            },
            resetForm(formName) {
                this.$refs[formName].resetFields();
            }
        }
    }
</script>

<style>
    .el-form-item__label {
         margin-bottom: 0;
    }
</style>