<template>
    <div id="app">
        <el-steps :active="activeStepID" finish-status="success">
            <el-step title="Company"></el-step>
            <el-step title="Customer Service"></el-step>
            <el-step title="Product/Pricing"></el-step>
            <el-step title="Technical"></el-step>
        </el-steps>

        <company-step
                ref="companyStep"
                v-show="activeStepID === 0"
                :item="item"
                @next-step="nextStep"
        />

        <customer-step
                ref="customerStep"
                v-show="activeStepID === 1"
                :item="item"
                @prev-step="prevStep"
                @next-step="nextStep"
        />

        <product-step
                ref="productStep"
                v-show="activeStepID === 2"
                :item="item"
                @prev-step="prevStep"
                @next-step="nextStep"
        />

        <technical-step
                ref="technicalStep"
                v-show="activeStepID === 3"
                :item="item"
                @prev-step="prevStep"
                @next-step="nextStep"
        />
    </div>
</template>

<script>
    import {toSnake, toCamel} from 'convert-keys'
    import CompanyStep from "./steps/CompanyStep";
    import CustomerStep from "./steps/CustomerStep";
    import ProductStep from "./steps/ProductStep";
    import TechnicalStep from "./steps/TechnicalStep";
    import apiBankSites from '../../../../api/bank-sites'

    export default {
        name: "ItemForm",
        data() {
            return {
                activeStepID: 0,
                steps: [
                    {id: 0, name: 'companyStep'},
                    {id: 1, name: 'customerStep'},
                    {id: 2, name: 'productStep'},
                    {id: 3, name: 'technicalStep'}
                ],
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
                    existingArtwork: 0,
                    hasHosting: 0,
                    host: null,
                    ftpSername: null,
                    ftpPassword: null,
                    port: null,
                    sftp: 0,
                    // finished: null
                },
            };
        },
        props: ['customerId', 'bankSite'],
        components: {
            TechnicalStep,
            ProductStep,
            CustomerStep,
            CompanyStep,
        },
        created() {
            if (this.bankSite) {
                this.item = toCamel(this.bankSite);
            }
        },
        computed: {},
        methods: {
            prevStep() {
                this.activeStepID--
            },
            nextStep(stepData) {
                let currentStep = this.steps[this.activeStepID]
                this.$refs[currentStep.name].$refs.form.validate((valid) => {
                    if (valid) {
                        Object.assign(this.item, stepData)
                        if (this.activeStepID === 3) {
                            this.submitForm()
                        } else {
                            this.activeStepID++
                        }
                    }
                })
            },

            submitForm() {
                apiBankSites.save(toSnake(this.item), this.item.id)
                    .then(response => {
                        this.$emit('form-submitted')
                        return response
                    })
            }
        }
    }
</script>

<style>
    .el-form-item__label {
        margin-bottom: 0;
    }
</style>