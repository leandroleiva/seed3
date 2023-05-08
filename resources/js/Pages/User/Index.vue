<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Usuarios" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Usuarios</h2>
        </template>
        <div class="py-12">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="card flex flex-row group" v-for="user in $page.props.users" :key="user.id">
                        <div class="flex flex-1">
                            <div class="flex flex-col">
                                <h2>{{ user.name }}</h2>
                                <div class="badges flex flex-row space-x-2">
                                    <span class="badge">
                                        <i class="fa-solid fa-envelope text-white"></i>
                                        {{ user.email }}
                                    </span>
                                    <span class="badge">
                                        <i class="fa-solid fa-mobile-screen-button text-white"></i>
                                        {{ user.phone ?? 'Sin teléfono' }}
                                    </span>
                                    <span v-if="user.is_active" class="badge">
                                        <i class="fa-solid fa-user-check text-white"></i>
                                        Activo
                                    </span>
                                    <span v-else class="badge">
                                        <i class="fa-solid fa-user-xmark text-white"></i>
                                        Inactivo
                                    </span>

                                </div>
                            </div>
                        </div>
                        <div class="flex flex-row items-center opacity-0 group-hover:opacity-100">
                            <Link :href="route('users.show', user.id)" class="">
                            Ver detalle <i class="fa-solid fa-chevron-right"></i>
                            </Link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
