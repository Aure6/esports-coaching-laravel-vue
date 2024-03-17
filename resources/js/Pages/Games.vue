<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
</script>

<template>
    <GuestLayout title="Games">
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Games
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                    Listes des jeux disponibles :
                </div>
            </div>
        </div>
    </GuestLayout>
</template>
