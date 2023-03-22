<template>
    <public-layout>
        <div>
            <div>
                <div class="bg-cyan-100 mx-9 rounded-2xl flex grid grid-cols-1 md:grid-cols-2">
                    <div class="my-auto px-10 py-10">
                        <h1 class="font-bold text-4xl text-center md:text-4xl lg:text-6xl pb-10">Explore the Mountains of Opportunity</h1>
                        <p class="pb-10 text-center">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. </p>

                        <button class="flex mx-auto rounded-xl bg-purple-800 px-5 py-3 text-base mb-3 font-medium text-white transition duration-200 hover:bg-purple-600 active:bg-brand-700">
                            Explore the Mountains of Opportunity
                        </button>



                    </div>
                    <div>
                        <img class="mx-auto pt-3 px-4" src="images/image1.png">
                    </div>
                </div>
            </div>

            <div class="flex justify-center">
                <div>
                    <img class="mt-10 h-16 animate-[pulse_1.0s_ease-in-out_infinite]" src="images/arrow.png">
                </div>
                <div>
                    <button @click="showModel = true" class="mt-6 flex  rounded-xl bg-purple-800 px-5 py-3 text-base mb-3 font-medium text-white transition duration-200 hover:bg-purple-600 active:bg-brand-700">
                        Instructions
                    </button>
                </div>
            </div>


            <div v-if="showModel" class=" flex justify-center items-center">
                <div class="w-full h-full bg-cyan-100 bg-opacity-80 top-0 fixed sticky-0">
                    <div class="py-16 px-4 md:px-20 flex justify-center items-center">
                        <div class="w-96 md:w-auto  relative flex flex-col justify-center items-center bg-white py-16 px-4 ">
                            <div class="">
                                <iframe
                                    src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                </iframe>
                            </div>
                            <button @click="showModel = false" class="text-gray-800 dark:text-gray-400 absolute top-8 right-8 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800" aria-label="close">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18 6L6 18" stroke="currentColor" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M6 6L18 18" stroke="currentColor" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="py-10">
                <h1 class="px-10 pb-3 text-xl font-bold">Filters</h1>
                <main-filters></main-filters>
            </div>
        </div>
    </public-layout>
</template>

<script setup>
import PublicLayout from "@/Pages/PublicLayout.vue";
import MainFilters from "@/Pages/PublicApp/Components/MainFilters.vue";
import {ref} from "vue";

const showModel = ref(false);
</script>

<style scoped>

</style>
