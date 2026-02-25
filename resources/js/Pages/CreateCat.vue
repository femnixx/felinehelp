<script setup>
import { reactive } from 'vue';
import { router } from '@inertiajs/vue3'
defineProps({ errors: Object })

const form = reactive({ 
    name: null,
    breed: null
})

function submit() { 
    router.post('/cats', form)
}

</script>

<template>
    <form @submit.prevent="submit">
        <input v-model="form.name" placeholder="Cat Name">
        <input v-model="form.breed" placeholder="Breed">
        <button type="submit" v-on:click="submit">Save Cat</button>
        <div v-if="errors.name" class="text-red-500">{{  errors.name }}</div>
    </form>
</template>

