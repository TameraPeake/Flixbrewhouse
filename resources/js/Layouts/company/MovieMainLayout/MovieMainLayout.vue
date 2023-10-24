<script setup>
import Hero from "./Hero.vue";
const props = defineProps(['movie']);
</script>
<template>
    <div v-for="movieInfo in movie" :key="movieInfo.id">
        <Hero :banner="movieInfo.banner" :title="movieInfo.title" :trailer="movieInfo.trailer" />
    </div>
</template>
