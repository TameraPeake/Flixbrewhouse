<script setup>
import { ref } from 'vue';
import BuyNowBtn from "/resources/js/Components/BuyNowBtn.vue";
const props = defineProps(['menuArray', 'dropDownMenus'])
let hover = ref(false);
let dropDownItem = ref("");

</script>
<template>
    <div v-for="value in menuArray">
        <div v-if="value.buyNow">
            <BuyNowBtn>Buy Now</BuyNowBtn>
        </div>
        <div v-else>
            <button
                type="button"
                class="p-4 h2-btn flex"
                @click="hover = !hover, dropDownItem = value.text"
            >
                <div v-if="value.dropDown">
                    <img :src="value.iconPath"  v-if="value.icon" class="w-6 pr-2">
                    {{ value.text }}
                </div>
                <div v-else>
                    <a :href="value.link" class="p-4 h2-btn flex">
                        <img :src="value.iconPath"  v-if="value.icon" class="w-6 pr-2">
                        {{ value.text }}
                    </a>
                </div>
            </button>
        </div>
    </div>
    <Transition
        enter-active-class="transition ease-in-out"
        enter-from-class="opacity-0"
        leave-active-class="transition ease-in-out"
        leave-to-class="opacity-0"
    >
        <div class=" w-full flex flex-wrap justify-center text-left " v-if="hover" >
            <div v-for="dropdownValue in dropDownMenus">
                <button
                    type="button"
                    class="h3-btn p-4 px-5"
                    v-if="dropdownValue.subMenu == dropDownItem"
                >
                    {{ dropdownValue.text }}
                </button>
            </div>
        </div>
    </Transition>
</template>
