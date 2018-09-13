<template>
    <div id="app">
        <el-form :model="technicalData" label-position="top" size="small" ref="form" :rules="rules">
            <el-row :gutter="20">
                <el-col :span="6">
                    <el-form-item label="Domain Registrar" prop="domainReg" ref="domainReg">
                        <el-select v-model="technicalData.domainReg" placeholder="Type">
                            <el-option label="Namecheap" value="Namecheap"></el-option>
                            <el-option label="Godaddy" value="Godaddy"></el-option>
                        </el-select>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Ingredients" prop="ingredients" ref="ingredients">
                        <el-input v-model="technicalData.ingredients" type="textarea"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Existing Artwork" prop="existingArtwork" ref="existingArtwork">
                        <el-select v-model="technicalData.existingArtwork" placeholder="Type">
                            <el-option label="Yes" :value="1"></el-option>
                            <el-option label="No" :value="0"></el-option>
                        </el-select>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Has Hosting" prop="hasHosting" ref="hasHosting">
                        <el-select v-model="technicalData.hasHosting" placeholder="Type">
                            <el-option label="Yes" :value="1"></el-option>
                            <el-option label="No" :value="0"></el-option>
                        </el-select>
                    </el-form-item>
                </el-col>
            </el-row>
            <el-row :gutter="20">
                <el-col :span="6">
                    <el-form-item label="Host" prop="host">
                        <el-input v-model="technicalData.host" type="num"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="FTP Username" prop="ftpUsername">
                        <el-input v-model="technicalData.ftpUsername"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="FTP Password" prop="ftpPassword">
                        <el-input v-model="technicalData.ftpPassword"></el-input>
                    </el-form-item>
                </el-col>
                <el-col :span="6">
                    <el-form-item label="Port" prop="port">
                        <el-input v-model="technicalData.port"></el-input>
                    </el-form-item>
                </el-col>
            </el-row>
            <el-row :gutter="20">
                <el-col :span="6">
                    <el-form-item label="SFTP" prop="sftp" ref="sftp">
                        <el-select v-model="technicalData.sftp" placeholder="Type">
                            <el-option label="Yes" :value="1"></el-option>
                            <el-option label="No" :value="0"></el-option>
                        </el-select>
                    </el-form-item>
                </el-col>
                <!--<el-col :span="6">-->
                <!--<el-form-item label="Finished">-->
                <!--<el-select v-model="technical.finished" placeholder="Type">-->
                <!--<el-option label="Zone one" value="shanghai"></el-option>-->
                <!--<el-option label="Zone two" value="beijing"></el-option>-->
                <!--</el-select>-->
                <!--</el-form-item>-->
                <!--</el-col>-->
            </el-row>
        </el-form>

        <div class="text-center">
            <el-button style="margin-top: 12px;" @click="prevStep">Previous</el-button>
            <el-button style="margin-top: 12px;" @click="save">Save</el-button>
        </div>
    </div>
</template>

<script>
    import assignByKeys from "../../../../../helpers/assign-by-keys";

    export default {
        name: "TechnicalStep",
        data() {
            return{
                technicalData: {
                    ingredients: null,
                    domainReg: null,
                    existingArtwork: 0,
                    hasHosting: 0,
                    host: null,
                    ftpSername: null,
                    ftpPassword: null,
                    port: null,
                    sftp: 0,
                },
                rules: {
                    ingredients: [
                        {required: true, message: 'Ingredients  field is required', trigger: 'blur'},
                    ],
                    domainReg: [
                        {required: true, message: 'Domain Registrar  field is required', trigger: 'change'},
                    ],
                    existingArtwork: [
                        {required: true, message: 'Existing Artwork  field is required', trigger: 'change'},
                    ],
                    hasHosting: [
                        {required: true, message: 'Has Hosting  field is required', trigger: 'change'},
                    ],
                }
            }
        },
        props: {
          item: {
              type: Object,
              required:true
          }
        },
        created() {
            this.technicalData = assignByKeys(this.technicalData, this.item);
        },
        methods: {
            prevStep() {
                this.$emit('prev-step')
            },
            save() {
                this.$emit('next-step', this.technicalData)
            }
        }
    }
</script>

<style scoped>

</style>