<template>
<app-layout>
    <template #header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Scholarship Create
        </h2>
    </template>
    <div class="py-12 px-3 md:px-32 lg:px-80">
        <div class="box row-span-3 ">
            <form class="p-4 border bg-white rounded-lg ">

                <div class="mb-6">
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Title</label>
                    <input id="title" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Sr. Manager" required>
                </div>

                <div class="mb-6">
                    <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Choose File</label>
                    <input id="image" type="file" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="chose file" required>
                </div>

                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Major</label>
                    <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">hcjhzgcj</select>
                </div>

                <div class="mb-6">
                    <label for="country" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Country</label>
                    <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">jsscgyi</select>
                </div>


                <div class="mb-6">
                    <label for="country" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Field</label>
                    <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 text-2xl">jsscgyi</select>
                </div>


                <div class="flex gap-y-5 lg:gap-5 md:gap-4 mb-6 grid grid-cols-1 md:grid-cols-2">
                    <div>
                        <label for="title" class="block mb-2 text-md font-medium text-gray-900 dark:text-gray-600">Start Date</label>
                        <input id="title" type="date" class="bg-gray-50 border border-gray-300 text-white  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Sr. Manager" required>
                    </div>
                    <div class="">
                        <label for="title" class="block mb-2 text-md font-medium text-gray-900 dark:text-gray-600">End Date</label>
                        <input id="title" type="date" class="bg-gray-50 border border-gray-300 text-white  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Sr. Manager" required>
                    </div>
                </div>

                <div class="mb-6">
                    <label for="Description" class="block mb-2 text-md font-medium text-gray-900 dark:text-gray-600">Description</label>
                    <textarea class="bg-gray-50 border border-gray-300 text-white  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 h-40">Description</textarea>

                </div>

                <div class="mb-6">
                    <label for="url" class="block mb-2 text-md font-medium text-black dark:text-gray-600">URL</label>
                    <input id="url" type="url" class="bg-gray-50 border border-gray-300 text-white  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="url" required>
                </div>
                <div class="mb-6">
                    <label for="text" class="block mb-2 text-md font-medium text-black dark:text-gray-600">Vide</label>
                    <input id="text" type="text" class="bg-gray-50 border border-gray-300 text-white  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="video" required>
                </div>
                <div class="mb-6">
                    <button class="w-full rounded-full bg-blue-500 px-5 py-3 text-base mb-3 font-medium text-white transition duration-200 hover:bg-blue-600 active:bg-blue-700">
                        Create
                    </button>
                </div>

            </form>
        </div>

    </div>

</app-layout>
</template>

<script setup>

import AppLayout from "@/Layouts/AppLayout.vue";
</script>

<style scoped>

</style>
