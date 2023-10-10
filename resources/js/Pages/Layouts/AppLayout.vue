<script setup>

import Navbar from "./Navbar.vue";
import Footer from "./Footer.vue";
</script>

<template>
    <div class="container-scroller">
        <!-- partial:partials/_horizontal-navbar.html -->
        <Navbar/>

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="container">
                        <slot/>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <Footer/>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
</template>

<style scoped>

</style>
