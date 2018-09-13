<template>
    <div id="app">
        <el-form :model="productData" label-position="top" size="small" ref="form" :rules="rules">
            <el-row :gutter="20">
                <el-col :span="6">
                    <el-form-item label="Product Name" prop="productName" ref="productName">
                        <el-input v-model="productData.productName"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Rebill Initial Product Price" prop="rebillInitialProductPrice">
                        <el-input-number :min="0" v-model="productData.rebillInitialProductPrice"></el-input-number>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Rebill Initial Shipping Price" prop="rebillInitialShippingPrice">
                        <el-input-number :min="0" v-model="productData.rebillInitialShippingPrice"></el-input-number>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Rebill Price" prop="rebillPrice">
                        <el-input-number :min="0" v-model="productData.rebillPrice"></el-input-number>
                    </el-form-item>
                </el-col>
            </el-row>
            <el-row :gutter="20">
                <el-col :span="6">
                    <el-form-item label="Rebill Shipping Price" prop="rebillShippingPrice">
                        <el-input-number :min="0" v-model="productData.rebillShippingPrice"></el-input-number>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Straight Sale Product Price" prop="straightSaleProductPrice"
                                  ref="straightSaleProductPrice">
                        <el-input-number :min="0" v-model="productData.straightSaleProductPrice"></el-input-number>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Straight Sale Shipping Price" prop="straightSaleShippingPrice"
                                  ref="straightSaleShippingPrice">
                        <el-input-number :min="0" v-model="productData.straightSaleShippingPrice"></el-input-number>
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
        name: "ProductStep",
        data() {
            return {
                productData: {
                    productName: null,
                    rebillInitialProductPrice: null,
                    rebillInitialShippingPrice: null,
                    rebillPrice: null,
                    rebillShippingPrice: null,
                    straightSaleProductPrice: null,
                    straightSaleShippingPrice: null,
                },
                rules: {
                    productName: [
                        {required: true, message: 'Product Name field is required', trigger: 'blur'},
                    ],
                    // straightSaleProductPrice: [
                    //     // this.item.offerType === 'Straight Sale (SS)' ? { required: true, message: 'Straight Sale Product Price  field is required', trigger: 'blur' } : ''
                    //     {
                    //         required: this.item.offerType === 'Straight Sale (SS)',
                    //         message: 'Straight Sale Product Price  field is required',
                    //         trigger: 'blur'
                    //     }
                    // ],
                    // straightSaleShippingPrice: [
                    //     // this.item.offerType === 'Straight Sale (SS)' ? { required: true, message: 'Straight Sale Shipping Price  field is required', trigger: 'blur' } : ''
                    //     {
                    //         required: this.item.offerType === 'Straight Sale (SS)',
                    //         message: 'Straight Sale Product Price  field is required',
                    //         trigger: 'blur'
                    //     }
                    // ]
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
            this.productData = assignByKeys(this.productData, this.item);
        },
        methods: {
            prevStep() {
                this.$emit('prev-step')
            },
            nextStep() {
                this.$emit('next-step', this.productData)
            }
        }
    }
</script>

<style scoped>

</style>