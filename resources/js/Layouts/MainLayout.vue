<script setup>
import { Link } from '@inertiajs/vue3'
</script>

<template>
    <nav>
        <Link href="/cats">All Cats</Link>
        <Link href="/cats/create">Add Cat</Link>
    </nav>
    <main>
        <slot /></main>
</template>