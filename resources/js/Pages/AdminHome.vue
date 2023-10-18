<script setup>
import MainLayout from "/resources/js/Layouts/company/MainLayout.vue";
</script>
<template>
<!--
    Should be accessible from the Join/Login link - should have a form that
    allows you to create an account


    1. Create the front end: should have
        - Create movie page
            -Banner
            -trailer
            -title
            -rating
            -time
            -directed by
            -stars
            -synopsis
            -show dates & times based on dates & locations

        -create Menu Item
            -Pic
            -Name
            -Description
            -Type

        -gift cards and contact info (not important for project)

    2. Each create should lead to views/blade files that work with controllers to manipulate the db
 -->
    <MainLayout>
        <div class="flex justify-evenly p-10 h-96 items-center text-white flex-wrap">
            <div class="border-2 border-solid border-white font-bold p-10 shadow-lg shadow-black cursor-pointer hover:bg-flixYellowHover hover:text-black">
                <p>Add a Movie</p>
            </div>
            <div class="border-2 border-solid border-white font-bold p-10 shadow-lg shadow-black cursor-pointer hover:bg-flixYellowHover hover:text-black">
                <p>Add a Menu Item</p>
            </div>
        </div>
    </MainLayout>
</template>
