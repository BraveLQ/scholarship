<script setup>
import {Link} from "@inertiajs/vue3";
</script>

<template>
    <div>
        <div class="p-6 lg:p-8 bg-white border-b border-gray-200">


            <div class="flex mx-auto grid grid-cols-1 lg:grid-cols-4 gap-y-8 md:gap-x-8 text-white pb-10">
                <div class="bg-amber-400 rounded-3xl border-2">
                    <Link :href="route('fields.index')">
                        <div class="px-5 py-3">
                            <h1 class="text-primary font-bold text-xl py-3">Field</h1>
                            <p class="w-4/5">Field Dashboard</p>
                        </div>
                    </Link>
                </div>
                <div class="bg-green-400 rounded-3xl border-2 ">
                    <Link :href="route('majors.index')">
                        <div class="px-5 py-3">
                            <h1 class="text-primary font-bold text-xl py-3">Major</h1>
                            <p class="w-4/5">Major Dashboard</p>
                        </div>
                    </Link>
                </div>
                <div class="bg-blue-400 rounded-3xl border-2 ">
                    <Link :href="route('countries.index')">
                        <div class="px-5 py-3">
                            <h1 class="text-primary font-bold text-xl py-3">Country</h1>
                            <p class="w-4/5">Country Dashboard</p>
                        </div>
                    </Link>
                </div>
                <div class="bg-red-400 rounded-3xl border-2s">
                    <Link :href="route('scholarships.index')">
                        <div class="px-5 py-3">
                            <h1 class="text-primary font-bold text-xl py-3">Scholarship</h1>
                            <p class="w-4/5">Scholarship Dashboard</p>
                        </div>
                    </Link>
                </div>
                <div class="bg-fuchsia-400 rounded-3xl border-2">
                    <Link :href="route('faqs.index')">
                        <div class="px-5 py-3">
                            <h1 class="text-primary font-bold text-xl py-3">FAQ</h1>
                            <p class="w-4/5">FAQ Dashboard</p>
                        </div>
                    </Link>
                </div>
                <div class="bg-pink-400 rounded-3xl border-2">
                    <Link :href="route('success-stories.index')">
                        <div class="px-5 py-3">
                            <h1 class="text-primary font-bold text-xl py-3">Success Stories</h1>
                            <p class="w-4/5">Success Stories Dashboard</p>
                        </div>
                    </Link>
                </div>
            </div>

        </div>
    </div>
</template>
