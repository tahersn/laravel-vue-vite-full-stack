<script setup>
import { ref, Transition } from 'vue';
import { router } from '@inertiajs/vue3';

import Sidebar from '@/Components/Layouts/Sidebar.vue';
import Rightbar from '@/Components/Layouts/Rightbar.vue';

const showingNavigationDropdown = ref(false);

</script>

<template>
    <div class=" w-full">
            <Sidebar class=""/>

            <!-- Start main content -->
            <div class="lg:w-7/12 w-11/12 border-x border-gray-800 relative ">
                <div class=" bg-black bg-opacity-50 backdrop-blur-md z-10 w-full">
                    <div class="border-gray-800 border-b w-full">
                        <div class="w-full text-white text-[22px] font-extrabold p-4">
                            Home
                        </div>
                        <div class="flex">
                            <div
                                class="flex items-center justify-center w-full h-[60px] text-white text-[17px] font-extrabold p-4 hover:bg-gray-500 hover:bg-opacity-30 cursor-pointer transition duration-200 ease-in-out">
                                <div class="inline-block text-center border-b-4 border-b-[#1C9CEF] h-[60px]">
                                    <div class="my-auto mt-4">For you </div>
                                </div>
                            </div>
                            <div
                                class="w-full h-[60px] text-gray-500 text-[17px] font-extrabold p-4 hover:bg-gray-500 hover:bg-opacity-30 cursor-pointer transition duration-200 ease-in-out">
                                <div class="text-center"> Following </div>
                            </div>
                        </div>
                    </div>
                    <slot />
                </div>
            </div>
            <!-- End main content -->

            <div class="absolute top-0 z-0 h-full overflow-auto scrollbar-hide ">

                <div class="mt-[126px]">

                </div>
                <!-- <slot /> -->
                <div class="pb-4"></div>
            </div>

            <Rightbar />

        </div>

    </div>
</template>
