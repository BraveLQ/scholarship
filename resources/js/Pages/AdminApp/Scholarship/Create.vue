<template>
<app-layout>
    <template #header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Scholarship Create
        </h2>
    </template>
    <div class="py-12 px-3 md:px-32 lg:px-80">
        <div class="box row-span-3 ">
            <form class="p-4 border bg-white rounded-lg" @submit.prevent="submit">

                <div class="mb-6">
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Title</label>
                    <input v-model="form.title" id="title" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Title for the scholarship" required>
                </div>

                <div class="mb-6">
                    <label for="image" class="block mb-2 text-sm font-medium text-gray-900">Choose File</label>
                    <input @input="form.logo = $event.target.files[0]" id="image" type="file" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="chose file" required>
                </div>

                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Major</label>
                    <select v-model="form.major_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option v-for="major in majors" :key="major.id" :value="major.id" >{{major.title}}</option>
                    </select>
                </div>

                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Field</label>
                    <select v-model="form.field_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option v-for="field in fields" :key="field.id" :value="field.id" >{{field.title}}</option>
                    </select>
                </div>


                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Country</label>
                    <select v-model="form.country_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option v-for="country in countries" :key="country.id" :value="country.id" >{{country.country}}</option>
                    </select>
                </div>


                <div class="flex gap-y-5 lg:gap-5 md:gap-4 mb-6 grid grid-cols-1 md:grid-cols-2">
                    <div class="">
                        <label for="title" class="block mb-2 text-md font-medium text-gray-900 dark:text-gray-600">Start Date</label>
                        <input v-model="form.start_date" id="title" type="date" class="bg-gray-50 border border-gray-300 text-white  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Sr. Manager" required>
                    </div>
                    <div class="">
                        <label for="title" class="block mb-2 text-md font-medium text-gray-900 dark:text-gray-600">End Date</label>
                        <input v-model="form.end_date" id="title" type="date" class="bg-gray-50 border border-gray-300  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Sr. Manager" required>
                    </div>
                </div>

                <div class="mb-6">
                    <label for="Description" class="block mb-2 text-md font-medium text-gray-900">Description</label>
                    <textarea v-model="form.description" class="bg-gray-50 border border-gray-300 text-black  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 h-40">Description</textarea>
                </div>

                <div class="mb-6">
                    <label for="url" class="block mb-2 text-md font-medium text-black">Website or source of the scholarship (optional)</label>
                    <input v-model="form.source_url" id="url" type="text" class="bg-gray-50 border border-gray-300 text-black  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="url">
                </div>
                <div class="mb-6">
                    <label for="text" class="block mb-2 text-md font-medium text-black">Video Url (optional)</label>
                    <input v-model="form.video_url" id="text" type="text" class="bg-gray-50 border border-gray-300 text-black  text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Video Url">
                </div>
                <div class="mb-6">
                    <button type="submit"  class="w-full rounded-full bg-blue-500 px-5 py-3 text-base mb-3 font-medium text-white transition duration-200 hover:bg-blue-600 active:bg-blue-700">
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

defineProps({
    majors: Array,
    countries: Array,
    fields: Array,
})

const form = useForm({
    title: '',
    image: '',
    major_id: '',
    field_id: '',
    country_id: '',
    start_date: '',
    end_date: '',
    description: '',
    source_url: '',
    video_url: '',
})
const submit = () => {
    form.post(route('scholarships.store'));
}
</script>

<style scoped>

</style>
