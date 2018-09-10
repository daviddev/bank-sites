<template>
        <el-menu
                default-active="1"
                class="el-menu-vertical-demo"
                @open="handleOpen"
                @close="handleClose"
                background-color="#545c64"
                text-color="#fff"
                active-text-color="#ffd04b" style="height: 100%">

            <el-menu-item index="1">
                <i class="el-icon-menu"></i>
                <span @click="goToLink('dashboard')">
                        Dashboard
                </span>
            </el-menu-item>
        </el-menu>
</template>

<script>
    export default {
        name: "EMenu",
        methods: {
            handleOpen(key, keyPath) {
                console.log(key, keyPath);
            },
            handleClose(key, keyPath) {
                console.log(key, keyPath);
            },
            goToLink(routName) {
                this.$router.push({name: routName});
            }
        }
    }
</script>

<style scoped>

</style>