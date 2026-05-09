<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('About') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-2xl">
                <div class="p-8 text-gray-900 dark:text-gray-100">

                    <!-- Profile Header -->
                    <div class="flex items-center gap-5 mb-8">
                        <div class="w-20 h-20 rounded-full bg-indigo-500 flex items-center justify-center text-white text-3xl font-bold shadow-lg">
                            A
                        </div>

                        <div>
                            <h1 class="text-3xl font-bold">
                               Zidan Ariga Pratama
                            </h1>

                            <p class="text-gray-500 dark:text-gray-400 mt-1">
                                Teknologi Informasi
                            </p>
                        </div>
                    </div>

                    <!-- About Card -->
                    <div class="grid md:grid-cols-2 gap-6">

                        <!-- Biodata -->
                        <div class="border dark:border-gray-700 rounded-2xl p-6">
                            <h2 class="text-xl font-semibold mb-4">
                                Biodata
                            </h2>

                            <div class="space-y-3 text-sm">
                                <div class="flex justify-between">
                                    <span class="text-gray-500 dark:text-gray-400">
                                        Nama
                                    </span>

                                    <span class="font-medium">
                                        Zidan Ariga Pratama
                                    </span>
                                </div>

                                <div class="flex justify-between">
                                    <span class="text-gray-500 dark:text-gray-400">
                                        NIM
                                    </span>

                                    <span class="font-medium">
                                        20220140046
                                    </span>
                                </div>

                                <div class="flex justify-between">
                                    <span class="text-gray-500 dark:text-gray-400">
                                        Prodi
                                    </span>

                                    <span class="font-medium">
                                        Teknologi Informasi
                                    </span>
                                </div>

                                <div class="flex justify-between">
                                    <span class="text-gray-500 dark:text-gray-400">
                                        Hobi
                                    </span>

                                    <span class="font-medium">
                                        Valorant
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- About -->
                        <div class="border dark:border-gray-700 rounded-2xl p-6">
                            <h2 class="text-xl font-semibold mb-4">
                                Tentang Praktikum
                            </h2>

                            <p class="text-sm leading-relaxed text-gray-600 dark:text-gray-300">
                                Website ini dibuat untuk Praktikum Laravel dengan fitur
                                authentication, CRUD Product, pagination, relasi database,
                                seeder, migration, dan dashboard modern menggunakan
                                Tailwind CSS.
                            </p>

                            <div class="mt-6">
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-indigo-100 text-indigo-700 dark:bg-indigo-900/40 dark:text-indigo-300">
                                    Laravel 12
                                </span>

                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-700 dark:bg-green-900/40 dark:text-green-300">
                                    Tailwind CSS
                                </span>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
</x-app-layout>