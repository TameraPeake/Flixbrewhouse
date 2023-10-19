<script setup>
//This creates the menu for the top header and loops through it through props that assign the page links
import SmallTxtBtn from "/resources/js/Components/SmallTxtBtn.vue";
import LoginImg from "/public/build/assets/img/flix_icon_login-ylw.svg";
const topMenuArray = {
        firstItem : {
        icon: true,
        iconPath: LoginImg,
        text: "Join/Log in to the circle",
        link: "/admin/home",
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
        <SmallTxtBtn  :menuArray="topMenuArray"/>
    </div>
</template>
