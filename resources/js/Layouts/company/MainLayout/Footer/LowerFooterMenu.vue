<script setup>
import SmallTextLinks from "/resources/js/Components/SmallTextLinks.vue";
import FacebookLogo from "/resources/js/Components/Icons/FacebookIcon.vue"
import TwitterLogo from "/resources/js/Components/Icons/TwitterIcon.vue";
import InstagramLogo from "/resources/js/Components/Icons/InstagramIcon.vue";
const bottomFooterMenuArray = {
    firstItem : {
        icon: false,
        iconPath: "",
        buyNow: false,
        text: "© 2020 Flix Brewhouse. All Rights Reserved.",
        link: "/",
        dropDown: false,
    },
}

</script>
<template>
    <div class="flex items-start justify-between p-10 bg-black flex-wrap">
        <SmallTextLinks :menuArray="bottomFooterMenuArray"/>
       <div>
            <FacebookLogo class="px-2 pt-2"/>
            <TwitterLogo class="px-2 pt-2"/>
            <InstagramLogo class="px-2 pt-2"/>
        </div>
    </div>
</template>
