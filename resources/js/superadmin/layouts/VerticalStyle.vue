<template>
    <Div>
        <section id="components-layout-demo-responsive">
            <a-layout>
                <LeftSidebarBar />

                <a-layout>
                    <MainArea
                        :innerWidth="innerWidth"
                        :collapsed="menuCollapsed"
                        :isRtl="appSetting.rtl"
                    >
                        <TopBar />
                        <MainContentArea>
                            <a-layout-content>
                                <router-view></router-view>
                            </a-layout-content>
                        </MainContentArea>
                    </MainArea>
                </a-layout>
            </a-layout>
        </section>
    </Div>
</template>

<script>
import { ref } from "vue";
import TopBar from "./TopBar.vue";
import LeftSidebarBar from "./LeftSidebar.vue";
import { Div, MainArea, MainContentArea } from "./style";
import common from "../../common/composable/common";

export default {
    components: {
        TopBar,
        LeftSidebarBar,
        Div,
        MainArea,
        MainContentArea,
    },
    setup() {
        const { appSetting, menuCollapsed } = common();

        return {
            menuCollapsed,
            appSetting,

            innerWidth: window.innerWidth,
        };
    },
};
</script>

<style>
#components-layout-demo-responsive .logo {
    height: 32px;
    margin: 16px;
    text-align: center;
}

.site-layout-sub-header-background {
    background: #fff;
}

.site-layout-background {
    background: #fff;
}

[data-theme="dark"] .site-layout-sub-header-background {
    background: #141414;
}
</style>
