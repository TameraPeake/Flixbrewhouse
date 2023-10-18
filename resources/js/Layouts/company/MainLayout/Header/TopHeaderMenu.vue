<script setup>
//This creates the menu for the top header and loops through it through props that assign the page links
import SmallTextLinks from "/resources/js/Components/SmallTextLinks.vue";
import LoginImg from "/public/build/assets/img/flix_icon_login-ylw.svg";
const topMenuArray = {
        firstItem : {
        icon: true,
        iconPath: LoginImg,
        text: "Join/Log in to the circle",
        link: "AdminHome",
    },

    secondItem : {
        icon: false,
        iconPath: "",
        text: "Contact Us",
        link: "/contact-us",
    }
}



</script>
<template>
    <div class="flex justify-end bg-black !uppercase" id="topMenu">
        <SmallTextLinks  :menuArray="topMenuArray"/>
    </div>
</template>
