<script setup>
import { computed, onMounted, onUnmounted, ref } from 'vue';
let hover = true;
</script>
<template>
        <div
            @mouseenter="hover = false"
            @mouseleave="hover = false"
        >
            <slot name="trigger" />
        </div>
        <div v-show="hover">
            <slot name="content" />
        </div>
</template>
