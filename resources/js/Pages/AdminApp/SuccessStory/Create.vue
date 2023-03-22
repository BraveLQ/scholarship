<template>
<app-layout>
    <template #header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Success Story Create
        </h2>
    </template>

    <div class="py-12 px-3 md:px-32 lg:px-56">
        <div class="box row-span-3 ">
            <form class="p-4 border bg-white rounded-lg" @submit.prevent="submit">

                <div class="mb-6">
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Person Name</label>
                    <input v-model="form.person_name" id="title" type="text" class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Person Name" required>
                </div>

                <div class="mb-6">
                    <label for="image" class="block mb-2 text-sm font-medium text-gray-900">Choose the image of the person</label>
                    <input @input="form.image = $event.target.files[0]" id="image" type="file" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="chose file" required>
                </div>

                <div class="mb-6">
                    <label for="description" class="block mb-2 text-md font-medium text-gray-900 dark:text-gray-600">Story</label>
                    <textarea v-model="form.story" placeholder="Story of the person" class="bg-gray-50 border border-gray-300 text-black  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5   h-40">Description</textarea>

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
import {useForm} from "@inertiajs/vue3";
import AppLayout from "@/Layouts/AppLayout.vue";

const form = useForm({
    person_name: '',
    image: '',
    story: '',
})

const submit = () => {
    form.post(route('success-stories.store'));
}
</script>

<style scoped>

</style>
