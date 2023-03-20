<template>
<app-layout>
    <template #header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Major Create
        </h2>
    </template>

    <div class="py-12 px-3 md:px-32 lg:px-56">
        <div class="box row-span-3 ">
            <form class="p-4 border bg-white rounded-lg" @submit.prevent="submit">

                <div class="mb-6">
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Major Name</label>
                    <input v-model="form.title" id="title" type="text" class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="EES, Economics , etc" required>
                </div>

                <div class="mb-6">
                    <label for="description" class="block mb-2 text-md font-medium text-gray-900 dark:text-gray-600">Description</label>
                    <textarea v-model="form.description" placeholder="Description of your major" class="bg-gray-50 border border-gray-300 text-black  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5   h-40">Description</textarea>

                </div>

                <div class="mb-6">
                    <button type="submit" class="w-full rounded-full bg-blue-500 px-5 py-3 text-base mb-3 font-medium text-white transition duration-200 hover:bg-blue-600 active:bg-blue-700">
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
import {router, useForm} from "@inertiajs/vue3";

const form = useForm({
    title: '',
    description: '',
})

const submit = () => {
    form.post(route('majors.store'));
}
</script>

<style scoped>

</style>
