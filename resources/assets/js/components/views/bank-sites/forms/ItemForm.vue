<template>
    <div id="app">
        <el-form :model="item" :rules="rules" label-position="top" size="small" ref="form">
            <el-row :gutter="20">
                <el-col :span="6">
                    <el-form-item label="Type" prop="type" ref="type">
                        <el-select v-model="item.type" placeholder="Type">
                            <el-option label="Muscle" value="Muscle"></el-option>
                            <el-option label="Diet" value="Diet"></el-option>
                            <el-option label="CBD" value="CBD"></el-option>
                        </el-select>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Brand Name" prop="brandName" ref="brandName">
                        <el-input v-model="item.brandName"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Domain Name" prop="domainName" ref="domainName">
                        <el-input v-model="item.domainName"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Company Name" prop="companyName" ref="companyName">
                        <el-input v-model="item.companyName"></el-input>
                    </el-form-item>
                </el-col>
            </el-row>
            <el-row :gutter="20">
                <el-col :span="6">
                    <el-form-item label="Company Address" prop="companyAddress" ref="companyAddress">
                        <el-input v-model="item.companyAddress"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Company City" prop="companyCity" ref="companyCity">
                        <el-input v-model="item.companyCity"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Company State" prop="companyState" ref="companyState">
                        <el-input v-model="item.companyState"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Company Zip" prop="companyZip" ref="companyZip">
                        <el-input v-model="item.companyZip"></el-input>
                    </el-form-item>
                </el-col>
            </el-row>
            <el-row :gutter="20">
                <el-col :span="6">
                    <el-form-item label="CS Phone Number" prop="csPhone" ref="csPhone">
                        <el-input v-model="item.csPhone"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="CS Address" prop="csAddress" ref="csAddress">
                        <el-input v-model="item.csAddress"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="CS City" prop="csCity" ref="csCity">
                        <el-input v-model="item.csCity"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="CS State" prop="csState" ref="csState">
                        <el-input v-model="item.csState"></el-input>
                    </el-form-item>
                </el-col>
            </el-row>
            <el-row :gutter="20">
                <el-col :span="6">
                    <el-form-item label="CS Zip" prop="csZip" ref="csZip">
                        <el-input v-model="item.csZip"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="CS Email" prop="csEmail" ref="csEmail">
                        <el-input v-model="item.csEmail"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Returns Address" prop="returnsAddress" ref="returnsAddress">
                        <el-input v-model="item.returnsAddress"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Returns City" prop="returnsCity" ref="returnsCity">
                        <el-input v-model="item.returnsCity"></el-input>
                    </el-form-item>
                </el-col>
            </el-row>
            <el-row :gutter="20">
                <el-col :span="6">
                    <el-form-item label="Returns State" prop="returnsState" ref="returnsState">
                        <el-input v-model="item.returnsState"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Returns Zip" prop="returnsZip" ref="returnsZip">
                        <el-input v-model="item.returnsZip"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Offer Type" prop="offerType" ref="offerType">
                        <el-select v-model="item.offerType" placeholder="Type">
                            <el-option label="Straight Sale (SS)" value="Straight Sale (SS)"></el-option>
                            <el-option label="Trial" value="Trial"></el-option>
                            <el-option label="Both" value="Both"></el-option>
                        </el-select>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Product Name" prop="productName" ref="productName">
                        <el-input v-model="item.productName"></el-input>
                    </el-form-item>
                </el-col>
            </el-row>
            <el-row :gutter="20">
                <el-col :span="6">
                    <el-form-item label="Rebill Initial Product Price">
                        <el-input-number :min="0" v-model="item.rebillInitialProductPrice"></el-input-number>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Rebill Initial Shipping Price">
                        <el-input-number :min="0" v-model="item.rebillInitialShippingPrice"></el-input-number>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Rebill Price">
                        <el-input-number :min="0" v-model="item.rebillPrice"></el-input-number>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Rebill Shipping Price">
                        <el-input-number :min="0" v-model="item.rebillShippingPrice"></el-input-number>
                    </el-form-item>
                </el-col>
            </el-row>
            <el-row :gutter="20">
                <el-col :span="6">
                    <el-form-item label="Straight Sale Product Price" prop="straightSaleProductPrice" ref="straightSaleProductPrice">
                        <el-input-number :min="0" v-model="item.straightSaleProductPrice"></el-input-number>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Straight Sale Shipping Price" prop="straightSaleShippingPrice" ref="straightSaleShippingPrice">
                        <el-input-number :min="0" v-model="item.straightSaleShippingPrice"></el-input-number>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Domain Registrar" prop="domainReg" ref="domainReg">
                        <el-select v-model="item.domainReg" placeholder="Type">
                            <el-option label="Namecheap" value="Namecheap"></el-option>
                            <el-option label="Godaddy" value="Godaddy"></el-option>
                        </el-select>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Ingredients" prop="ingredients" ref="ingredients">
                        <el-input v-model="item.ingredients" type="textarea"></el-input>
                    </el-form-item>
                </el-col>
            </el-row>
            <el-row :gutter="20">
                <el-col :span="6">
                    <el-form-item label="Existing Artwork" prop="existingArtwork" ref="existingArtwork">
                        <el-select v-model="item.existingArtwork" placeholder="Type">
                            <el-option label="Yes" value="1"></el-option>
                            <el-option label="No" value="0"></el-option>
                        </el-select>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Has Hosting" prop="hasHosting" ref="hasHosting">
                        <el-select v-model="item.hasHosting" placeholder="Type">
                            <el-option label="Yes" value="1"></el-option>
                            <el-option label="No" value="0"></el-option>
                        </el-select>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Host">
                        <el-input v-model="item.host" type="num"></el-input>
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
                    customerId: this.customerId,
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
                    sftp: '0',
                    // finished: null
                },

            };
        },
        props: ['customerId'],
        computed: {
            rules() {
                return  {
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
                        { required: true, pattern: /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,24}))$/, message: 'CS Email field is required, and email address must be valid', trigger: 'blur' },
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
                        { required: true, message: 'Offer Type field is required', trigger: 'blur' },
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
                    ],
                    straightSaleProductPrice: [
                        // this.item.offerType === 'Straight Sale (SS)' ? { required: true, message: 'Straight Sale Product Price  field is required', trigger: 'blur' } : ''
                        { required: this.item.offerType === 'Straight Sale (SS)', message: 'Straight Sale Product Price  field is required', trigger: 'blur' }
                    ],
                    straightSaleShippingPrice: [
                        // this.item.offerType === 'Straight Sale (SS)' ? { required: true, message: 'Straight Sale Shipping Price  field is required', trigger: 'blur' } : ''
                        { required: this.item.offerType === 'Straight Sale (SS)', message: 'Straight Sale Product Price  field is required', trigger: 'blur' }
                    ]

                }
            }
        },
        methods: {
            submitForm() {
                this.$refs.form.validate((valid) => {
                    if (!valid) return false;

                    apiBankSites.post(toSnake(this.item))
                        .then(response => {
                            this.$emit('closeModal')
                            this.$refs.form.resetFields();
                            setTimeout(() => this.clearValidationsAfterSubmit(), 0)

                        })
                        .catch(err => {

                        });
                });
            },
            resetForm(formName) {
                this.$refs[formName].resetFields();
            },
            clearValidationsAfterSubmit() {
                this.$refs.type.clearValidate();
                this.$refs.brandName.clearValidate();
                this.$refs.domainName.clearValidate();
                this.$refs.companyName.clearValidate();
                this.$refs.companyAddress.clearValidate();
                this.$refs.companyCity.clearValidate();
                this.$refs.companyState.clearValidate();
                this.$refs.companyZip.clearValidate();
                this.$refs.csPhone.clearValidate();
                this.$refs.csAddress.clearValidate();
                this.$refs.csCity.clearValidate();
                this.$refs.csState.clearValidate();
                this.$refs.csZip.clearValidate();
                this.$refs.csEmail.clearValidate();
                this.$refs.returnsAddress.clearValidate();
                this.$refs.returnsCity.clearValidate();
                this.$refs.returnsState.clearValidate();
                this.$refs.returnsZip.clearValidate();
                this.$refs.offerType.clearValidate();
                this.$refs.productName.clearValidate();
                this.$refs.ingredients.clearValidate();
                this.$refs.domainReg.clearValidate();
                this.$refs.existingArtwork.clearValidate();
                this.$refs.hasHosting.clearValidate();
                this.$refs.straightSaleProductPrice.clearValidate();
                this.$refs.straightSaleShippingPrice.clearValidate();

            }
        }
    }
</script>

<style>
    .el-form-item__label {
         margin-bottom: 0;
    }
</style>