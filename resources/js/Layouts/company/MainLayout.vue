<script setup>
import Header from './MainLayout/Header.vue';
import Footer from './MainLayout/Footer.vue';
</script>
<template>
    <!-- <div class="bg-[url('public/build/assets/img/flixLogo.png')]"> -->
    <div class="bg-woodBG bg-cover">

        <!-- Site Header -->
            <Header />
        <!-- Site Header End -->
        <!-- Site Main Content -->
            <slot />
        <!-- Site Main Content End -->
        <!-- Site Footer -->
            <Footer />
        <!-- Site Footer end -->

    </div>
</template>

