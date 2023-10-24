<script setup>
import MainLayout from "/resources/js/Layouts/company/MainLayout.vue";
import MovieMainLayout from "/resources/js/Layouts/company/MovieMainLayout/MovieMainLayout.vue"

const movieProps = defineProps({
    movies: Object
});

</script>
<template>
<MainLayout v-for="movie in movieProps" :key="movie.id">
    <MovieMainLayout :movie="movie" />
</MainLayout>
</template>
