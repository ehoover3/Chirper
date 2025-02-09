<script setup>
import { Head, Link } from "@inertiajs/vue3";

defineProps({
    guitars: {
        type: Array,
        required: true,
    },
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
});
</script>

<template>
    <Head title="Guitars" />
    <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
        <div
            class="relative flex min-h-screen flex-col items-center justify-center selection:bg-indigo-500 selection:text-white"
        >
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                <header
                    class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3"
                >
                    <div class="flex lg:col-start-2 lg:justify-center">
                        <h1
                            class="text-3xl font-bold text-indigo-600 dark:text-indigo-400"
                        >
                            MusicGear Hub
                        </h1>
                    </div>
                    <nav v-if="canLogin" class="-mx-3 flex flex-1 justify-end">
                        <Link
                            v-if="$page.props.auth.user"
                            :href="route('dashboard')"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-indigo-500 dark:text-white dark:hover:text-white/80"
                        >
                            Dashboard
                        </Link>

                        <template v-else>
                            <Link
                                :href="route('login')"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-indigo-500 dark:text-white dark:hover:text-white/80"
                            >
                                Log in
                            </Link>

                            <Link
                                v-if="canRegister"
                                :href="route('register')"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-indigo-500 dark:text-white dark:hover:text-white/80"
                            >
                                Register
                            </Link>
                        </template>
                    </nav>
                </header>

                <main class="mt-6">
                    <div class="flex items-center justify-between mb-6">
                        <h2
                            class="text-2xl font-semibold text-black dark:text-white"
                        >
                            Guitars & Basses
                        </h2>
                    </div>

                    <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                        <div
                            v-for="guitar in guitars"
                            :key="guitar.id"
                            class="flex flex-col rounded-lg bg-white p-6 shadow-lg ring-1 ring-white/[0.05] transition duration-300 hover:shadow-xl hover:ring-indigo-500/20 focus:outline-none focus-visible:ring-indigo-500 dark:bg-zinc-900 dark:ring-zinc-800"
                        >
                            <div class="relative h-48 w-full mb-4">
                                <img
                                    :src="guitar.image_url"
                                    :alt="guitar.name"
                                    class="absolute inset-0 h-full w-full object-cover rounded-md"
                                />
                            </div>
                            <div class="flex flex-col flex-grow">
                                <h3
                                    class="text-xl font-semibold text-black dark:text-white"
                                >
                                    {{ guitar.name }}
                                </h3>
                                <p
                                    class="mt-1 text-indigo-600 dark:text-indigo-400 font-medium"
                                >
                                    {{ guitar.brand }}
                                </p>
                                <p class="mt-4 text-sm/relaxed flex-grow">
                                    {{ guitar.description }}
                                </p>
                                <div
                                    class="mt-6 flex items-center justify-between"
                                >
                                    <p
                                        class="text-xl font-bold text-black dark:text-white"
                                    >
                                        ${{ guitar.price }}
                                    </p>
                                    <button
                                        class="rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-indigo-500 focus:outline-none focus-visible:ring-2 focus-visible:ring-indigo-500 focus-visible:ring-offset-2"
                                    >
                                        View Details
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>

                <footer
                    class="py-16 text-center text-sm text-black dark:text-white/70"
                >
                    © 2025 MusicGear Hub. All rights reserved.
                </footer>
            </div>
        </div>
    </div>
</template>
