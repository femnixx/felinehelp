<script setup> 
defineProps({ cats: Array })
import MainLayout from '../Layouts/MainLayout.vue';
import { Link } from '@inertiajs/vue3'
</script>

<template>
    <MainLayout>
       <h1>The Feline List</h1>
       <li v-for="cat in cats"> {{ cat.name }}</li>
    </MainLayout>
</template>