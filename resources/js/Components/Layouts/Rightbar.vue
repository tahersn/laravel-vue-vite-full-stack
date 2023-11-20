<script setup>
import { ref } from 'vue';
import Magnify from 'vue-material-design-icons/Magnify.vue';
import DotsHorizontal from 'vue-material-design-icons/DotsHorizontal.vue';

let randImg2 = ref(`https://picsum.photos/id/${(Math.random() * 200).toFixed(0)}/100`);
</script>

<template>
    <div class="z-10 lg:block hidden lg:w-4/12 h-screen border-l border-gray-800 pl-4">
        <div class="w-full p-1 mt-2 px-4 lg:flex items-center rounded-full hidden bg-[#212327]">
            <Magnify fillColor="#5e5c5c" :size="25" />
            <input class="
                    appearance-none
                    w-full
                    border-0
                    py-2
                    bg-[#212327]
                    text-gray-100
                    placeholder-gray-500
                    leading-tight
                    focus:ring-0
                " type="text" placeholder="Search Twitter">
        </div>
        <div class="w-full rounded-lg lg:block hidden   bg-[#232427]">
            <div class="w-full p-4 mt-6 text-white font-extrabold text-[20px]">
                what's happening
            </div>
            <div class="h-[80px] rounded-lg hover:bg-gray-800 cursor-pointer transition duration-200 ease-in-out">
                <div class="flex p-3 justify-between h-[80px] py-3">
                    <div>
                        <div class="text-[14px] text-gray-400 ">
                            Tennis tournement live
                        </div>
                        <div class="w-full text-white font-extrabold mb-6 text-[17px]">
                            Austrian Open 2023
                        </div>

                    </div>
                    <img class="rounded-xl" :src="randImg2" alt="" />
                </div>

            </div>
            <div class=" rounded-lg hover:bg-gray-800 cursor-pointer transition duration-200 ease-in-out">
                <div class="flex p-3 justify-between ">
                    <div>
                        <div class="text-[14px] text-gray-400 ">
                            Trending in UK
                        </div>
                        <div class="w-full text-white font-extrabold  text-[17px]">
                            Doomsday Clock
                        </div>
                        <div class="text-[14px] text-gray-400 ">
                            1.200 Tweets
                        </div>
                    </div>
                    <DotsHorizontal fillColor="#5e5c5c" />
                </div>

            </div>
            <div class=" rounded-lg hover:bg-gray-800 cursor-pointer transition duration-200 ease-in-out">
                <div class="flex p-3 justify-between ">
                    <div>
                        <div class="text-[14px] text-gray-400 ">
                            Trending Sports
                        </div>
                        <div class="w-full text-white font-extrabold  text-[17px]">
                            Tennis
                        </div>
                        <div class="text-[14px] text-gray-400 ">
                            98.200 Tweets
                        </div>
                    </div>
                    <DotsHorizontal fillColor="#5e5c5c" />
                </div>

            </div>
            <div class=" rounded-lg hover:bg-gray-800 cursor-pointer transition duration-900 ease-in-out">
                <div class="flex p-3 justify-between ">
                    <div>
                        <div class="text-[14px] text-gray-400 ">
                            Politics Trending
                        </div>
                        <div class="w-full text-white font-extrabold  text-[17px]">
                            Dimocracy
                        </div>
                        <div class="text-[14px] text-gray-400 ">
                            72.232 Tweets
                        </div>
                    </div>
                    <DotsHorizontal fillColor="#5e5c5c" />
                </div>

            </div>
        </div>
    </div>
</template>