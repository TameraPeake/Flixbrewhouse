<script setup>
const props = defineProps(['menuArray'])
</script>
<template>
    <div v-for="value in menuArray">
        <button>
            <a :href="value.link" class="p-4 h3 flex">
                <img :src="value.iconPath"  v-if="value.icon" class="w-6 pr-2">
                {{ value.text }}
            </a>
        </button>
    </div>
</template>
