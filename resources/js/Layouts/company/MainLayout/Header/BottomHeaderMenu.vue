<script setup>
//This creates the menu for the top header and loops through it through props that assign the page links
import LargeTextLinks from "/resources/js/Components/LargeTextLinks.vue";
import FlixLogoImg from "/public/build/assets/img/flixLogo.png";
const bottomMenuArray = {
    firstItem : {
        icon: false,
        iconPath: "",
        buyNow: false,
        text: "Movies",
        link: "/",
        dropDown: false,
    },
    secondItem : {
        icon: false,
        iconPath: "",
        buyNow: false,
        text: "Menus+",
        link: "/",
        dropDown: true,
    },
    thirdItem : {
        icon: false,
        iconPath: "",
        buyNow: false,
        text: "Gift Cards",
        link: "/",
        dropDown: false,
    },
    fourItem : {
        icon: false,
        iconPath: "",
        buyNow: false,
        text: "Flix Picks",
        link: "/",
        dropDown: false,
    },
    fiveItem : {
        icon: false,
        iconPath: "",
        buyNow: false,
        text: "More+",
        link: "/",
        dropDown: true,
    },
    sixthItem : {
        icon: false,
        iconPath: "",
        buyNow: true,
        text: "",
        link: "/",
        dropDown: false,
    },
}

const dropDownMenus = {
    firstItem : {
        icon: false,
        iconPath: "",
        text: "All Menus",
        link: "/",
        subMenu: "Menus+",
    },
    secondItem : {
        icon: false,
        iconPath: "",
        text: "All-Day Breakfast",
        link: "/",
        subMenu: "Menus+",
    },
    thirdItem : {
        icon: false,
        iconPath: "",
        text: "Prequels",
        link: "/",
        subMenu: "Menus+",
    },
    fourthItem : {
        icon: false,
        iconPath: "",
        text: "Burgers & Sandwiches",
        link: "/",
        subMenu: "Menus+",
    },
    fifthItem : {
        icon: false,
        iconPath: "",
        text: "Pizza",
        link: "/",
        subMenu: "Menus+",
    },
    sixthtItem : {
        icon: false,
        iconPath: "",
        text: "Wraps & Salads",
        link: "/",
        subMenu: "Menus+",
    },
    seventhItem : {
        icon: false,
        iconPath: "",
        text: "Entrees",
        link: "/",
        subMenu: "Menus+",
    },
    eighthItem : {
        icon: false,
        iconPath: "",
        text: "Kids",
        link: "/",
        subMenu: "Menus+",
    },
    ninthItem : {
        icon: false,
        iconPath: "",
        text: "Sweets",
        link: "/",
        subMenu: "Menus+",
    },
    tenthItem : {
        icon: false,
        iconPath: "",
        text: "Beer",
        link: "/",
        subMenu: "Menus+",
    },

    eleventhItem : {
        icon: false,
        iconPath: "",
        text: "Contact Us",
        link: "/",
        subMenu: "More+",
    },
    twelveItem : {
        icon: false,
        iconPath: "",
        text: "About",
        link: "/",
        subMenu: "More+",
    },
    thirteenItem : {
        icon: false,
        iconPath: "",
        text: "Group Events",
        link: "/",
        subMenu: "More+",
    },
}



</script>
<template>
    <div class="flex justify-between bg-black text-white items-center flex-wrap w-full p-4">
        <a href="/"><img :src=FlixLogoImg class="w-64" /></a>
        <LargeTextLinks :menuArray="bottomMenuArray" :dropDownMenus="dropDownMenus" />
    </div>


</template>
