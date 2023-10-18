<script setup>
import FlixLogoImg from "/public/build/assets/img/flixLogo.png";
import SmallTextLinks from "/resources/js/Components/SmallTextLinks.vue";
const topFooterMenuArray = {
    "Locations": {
        firstItem : {
            icon: false,
            iconPath: "",
            buyNow: false,
            text: "Albuquerque",
            link: "/",
            dropDown: false,
        },
        secondItem : {
            icon: false,
            iconPath: "",
            buyNow: false,
            text: "Carmel",
            link: "/",
            dropDown: false,
        },
        thirdItem : {
            icon: false,
            iconPath: "",
            buyNow: false,
            text: "El Paso",
            link: "/",
            dropDown: false,
        },
        fourthItem : {
            icon: false,
            iconPath: "",
            buyNow: false,
            text: "Frisco/Little Elm",
            link: "/",
            dropDown: false,
        },
        fifthItem : {
            icon: false,
            iconPath: "",
            buyNow: false,
            text: "Madison",
            link: "/",
            dropDown: false,
        },
        sixthItem : {
            icon: false,
            iconPath: "",
            buyNow: false,
            text: "Mansfield",
            link: "/",
            dropDown: false,
        },
        seventhItem : {
            icon: false,
            iconPath: "",
            buyNow: false,
            text: "Round Rock",
            link: "/",
            dropDown: false,
        },
        eighthItem : {
            icon: false,
            iconPath: "",
            buyNow: false,
            text: "San Antonio",
            link: "/",
            dropDown: false,
        },
        ninthItem : {
            icon: false,
            iconPath: "",
            buyNow: false,
            text: "Oklahoma City",
            link: "/",
            dropDown: false,
        },
    },

    "Get in Touch": {
        firstItem : {
            icon: false,
            iconPath: "",
            buyNow: false,
            text: "Contact Us",
            link: "/",
            dropDown: false,
        },
        secondItem : {
            icon: false,
            iconPath: "",
            buyNow: false,
            text: "FAQS",
            link: "/",
            dropDown: false,
        },
        thirdItem : {
            icon: false,
            iconPath: "",
            buyNow: false,
            text: "Rewards Program Terms",
            link: "/",
            dropDown: false,
        },
        fourthItem : {
            icon: false,
            iconPath: "",
            buyNow: false,
            text: "Terms Of Use",
            link: "/",
            dropDown: false,
        },
    },
    "More+": {
        firstItem : {
            icon: false,
            iconPath: "",
            buyNow: false,
            text: "Flix Picks",
            link: "/",
            dropDown: false,
        },
        secondItem : {
            icon: false,
            iconPath: "",
            buyNow: false,
            text: "Group Events",
            link: "/",
            dropDown: false,
        },
    },
    "Terms": {
        firstItem : {
            icon: false,
            iconPath: "",
            buyNow: false,
            text: "Age And Purchase Policy",
            link: "/",
            dropDown: false,
        },
        secondItem : {
            icon: false,
            iconPath: "",
            buyNow: false,
            text: "Privacy Policy",
            link: "/",
            dropDown: false,
        },
        thirdItem : {
            icon: false,
            iconPath: "",
            buyNow: false,
            text: "Employment",
            link: "/",
            dropDown: false,
        },
    }
}
</script>
<template>
    <div class="flex items-start justify-between p-10 h3-footer flex-wrap" id="footer">
        <div class="py-2">
            <img :src=FlixLogoImg class="w-66 h-auto" />
        </div>
        <div v-for="(topFooterItems, topFooterTitles ) in topFooterMenuArray" id="footerLinks">
            <div class="text-white pl-3 text-lg">{{ topFooterTitles }}</div>
            <SmallTextLinks :menuArray="topFooterItems"/>
        </div>
    </div>
</template>
