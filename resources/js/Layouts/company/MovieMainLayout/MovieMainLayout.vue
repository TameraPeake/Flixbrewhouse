<script setup>
import Hero from "./Hero.vue";
const props = defineProps(['movie']);
</script>
<template>
    <div v-for="movieInfo in movie" :key="movieInfo.id">
        <Hero :poster="movieInfo.banner" :title="movieInfo.title" :trailer="movieInfo.trailer" />
        <div class="text-white font-lg">{{ movieInfo }}</div>
    </div>
</template>
