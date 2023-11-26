<script setup>
import { onMounted, ref } from 'vue';
import {Link} from '@inertiajs/vue3';
import HeartOutline from 'vue-material-design-icons/HeartOutline.vue';
import ChartBar from 'vue-material-design-icons/ChartBar.vue';
import MessageOutline from 'vue-material-design-icons/MessageOutline.vue';
import Sync from 'vue-material-design-icons/Sync.vue';
import DotsHorizontal from 'vue-material-design-icons/DotsHorizontal.vue';
import TrashCanOutline from 'vue-material-design-icons/TrashCanOutline.vue';


defineProps({
   tweet: Object
});
let openOptions= ref()



</script>



<template>
    <div class="p-2" >
        
        <div>
            
            <div class="flex  flex-col p-4 justify-between">
                <div class="flex flex-row">
                    <div class="flex flex-col">
                        <div class="w-full flex flex-row items-center justify-between">
                            <div class="flex items-center flex-row ">
                                <img class="rounded-full m-2 mt-3" width="50" :src="tweet.image" alt="">
                                <h1 class="font-bold text-lg">{{tweet.name}}</h1>
                                <h1 class="text-gray-500 ml-2">{{tweet.username}}</h1>
                                <h1 class="text-gray-500 ml-2">·</h1>
                                <h1 class="text-gray-500 ml-2">{{tweet.time}}</h1>
                            </div>
                            <div class="flex p-2 ">
                                <div class="flex flex-row ml-4">
                                    <DotsHorizontal class="text-gray-500 w-6 h-6 hover:text-[#1C9CEF] cursor-pointer" @click="openOptions = !openOptions"/>
                                </div>
                                <div  v-if="openOptions" class="ml-2 flex flex-col bg-white rounded-xl shadow-xl">
                                    <Link as="button" method="delete" :href="route('tweets.destroy',{id:tweet.id})" class="flex flex-row p-2 cursor-pointer">
                                        <TrashCanOutline class="text-gray-500 w-6 h-6 hover:text-red-700  rounded-full justify-center" />
                                        <span class="text-gray-500 ml-2 hover:text-[#1C9CEF] hover:border-b-[#1C9CEF] hover:border-b ">Delete</span>
                                    </Link>
                                </div>
                            </div>

                        </div>
                        <div class="flex flex-row">
                            <h1 class="text-white font-extrabold ml-2">{{tweet.tweet}}</h1>
                            <!-- <video v-if="tweet.file" class="rounded-xl mt-2" width="500" controls/>
                                <source :src="tweet.file" type="video/mp4"> -->
                        </div>
                        <div v-if="tweet.file">
                            <div v-if="!tweet.is_video" class="rounded-xl">
                                <img :src="tweet.file" class="mt-2 object-fill rounded-xl w-full">
                            </div>
                            <div v-else>
                                <video class="rounded-xl" :src="tweet.file" controls></video>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row pt-2">
                    <div class="flex flex-row">
                        <HeartOutline class="text-gray-500 w-6 h-6 hover:text-red-700 cursor-pointer  rounded-full  justify-center "/>
                        <h1  class="text-gray-500 ml-2 hover:text-[#1C9CEF] hover:border-b-[#1C9CEF] hover:border-b cursor-pointer">{{tweet.likes}}</h1>
                    </div>
                    <div class="flex flex-row ml-4">
                        <ChartBar class=" hover:text-[#1C9CEF] cursor-pointer text-gray-500 w-6 h-6"/>
                        <h1 class="text-gray-500 ml-2 hover:text-[#1C9CEF] hover:border-b-[#1C9CEF] hover:border-b cursor-pointer">{{tweet.retweets}}</h1>
                    </div>
                    <div class="flex flex-row ml-4">
                        <MessageOutline class="text-gray-500 w-6 h-6 hover:text-[#1C9CEF] cursor-pointer"/>
                        <h1 class="text-gray-500 ml-2 hover:text-[#1C9CEF] hover:border-b-[#1C9CEF] hover:border-b cursor-pointer">{{tweet.comments}}</h1>
                    </div>
                    <div class="flex flex-row ml-4">
                        <Sync class="text-gray-500 w-6 h-6 hover:text-[#1C9CEF] cursor-pointer"/>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

  

    
    
</template>
