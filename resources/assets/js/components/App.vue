<template>
    <el-container>
        <el-header>
            <e-header></e-header>
        </el-header>

        <el-container>
            <el-aside width="200px">
                <e-menu></e-menu>
            </el-aside>
            <el-main>
                <router-view></router-view>
            </el-main>
        </el-container>
    </el-container>
</template>
<script>
    import EHeader from "./layouts/EHeader";
    import EMenu from "./layouts/EMenu";

    export default {
        components: {EMenu, EHeader}
    }
</script>

<style>
    .el-header {
         padding: 0;
    }
</style>