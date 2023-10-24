<script setup>
import PlayImg from "/public/build/assets/img/trailer-play.svg";
const props = defineProps(['title', 'banner', 'trailer']);
</script>
<template>
    <div class="text-white text-xl relative">
        <img :src="banner"  class="w-full">
        <div class="absolute bottom-1 left-32 flex flex-col">
            <div class="flex items-center pb-6">
                <h2 class="text-6xl uppercase font-black pr-10">{{ title }}</h2>
                <a :href="trailer" target="_blank" class="w-16" v-if="trailer"><img :src="PlayImg"></a>
            </div>
            <button type="button" class="hover:bg-white hover:text-black border-4 border-solid border-white uppercase p-6 w-64">
                View Showtimes
            </button>
        </div>
    </div>
</template>
