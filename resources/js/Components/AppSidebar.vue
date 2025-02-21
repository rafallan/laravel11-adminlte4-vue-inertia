<script setup>
import SidebarWrapper from './SidebarWrapper.vue';


</script>

<script>
export default {
    data() {
        return {
            Logo: '/dist/assets/img/AdminLTELogo.png'
        }
    }
}
</script>


<template>
    <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
            <!--begin::Brand Link-->
            <a href="../index.html" class="brand-link">
                <!--begin::Brand Image-->
                <img :src="Logo" alt="AdminLTE Logo" class="brand-image opacity-75 shadow" />
                <!--end::Brand Image-->
                <!--begin::Brand Text-->
                <span class="brand-text fw-light">AdminLTE 4</span>
                <!--end::Brand Text-->
            </a>
            <!--end::Brand Link-->
        </div>
        <!--end::Sidebar Brand-->
        <!--begin::Sidebar Wrapper-->
        <SidebarWrapper />
        <!--end::Sidebar Wrapper-->
    </aside>

</template>
