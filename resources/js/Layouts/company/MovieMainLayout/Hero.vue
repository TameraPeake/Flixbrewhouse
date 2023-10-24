<script setup>
const props = defineProps(['poster', 'banner', 'trailer']);
</script>
<template>
    <div class="text-white text-xl">
        <img :src="poster"  class="w-full">
    </div>
</template>
