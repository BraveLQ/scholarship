<template>
    <div class="px-3 md:px-10">
        <div class="box row-span-3">
            <form class="flex grid grid-cols-1 md:grid-cols-4 p-4 border bg-white rounded-lg gap-3" @submit.prevent="submit">

                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Field</label>
                    <select  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option>asckasbc</option>
                        <option>asckasbc</option>
                    </select>
                </div>

                <div class="mb-6">
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Major/Backgrounds</label>
                    <input id="title" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Title for the scholarship" required>
                </div>

                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Country</label>
                    <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option>sdckbask</option>
                    </select>
                </div>


                <div class="mb-6 pt-6">
                    <button type="submit"  class="w-full rounded-xl bg-purple-800 px-5 py-3 text-base mb-3 font-medium text-white transition duration-200 hover:bg-purple-600 active:bg-brand-700">
                        Search
                    </button>
                </div>

            </form>
        </div>

    </div>
</template>

<script setup>

</script>

<style scoped>

</style>
