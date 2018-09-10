<template>
    <div>
        <el-menu
                class="el-menu-demo"
                mode="horizontal"
                @select="handleSelect"
                background-color="#545c64"
                text-color="#fff"
                active-text-color="#ffd04b">
            <el-submenu index="">
                <template slot="title"><i class="fa fa-user"></i></template>
                <el-menu-item index="2-1">
                    <a class="dropdown-item" href="/logout"
                       onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="/logout" method="POST" style="display: none;">
                        <input type="hidden" :value="token" name="_token">
                    </form>
                </el-menu-item>
            </el-submenu>
        </el-menu>
    </div>

</template>

<script>
    export default {
        name: "EHeader",
        data() {
            return {
                activeIndex: '1',
                activeIndex2: '1',
                token: document.head.querySelector('meta[name="csrf-token"]').content
            };
        },
        methods: {
            handleSelect(key, keyPath) {
                console.log(key, keyPath);
            }
        }
    }
</script>

<style >
    .el-menu--horizontal>.el-submenu {
         float:right;
    }

</style>