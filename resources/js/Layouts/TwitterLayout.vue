<script setup>
import { ref } from 'vue';
import { router } from '@inertiajs/vue3';
import Twitter from 'vue-material-design-icons/Twitter.vue';
import Magnify from 'vue-material-design-icons/Magnify.vue';
import DotsHorizontal from 'vue-material-design-icons/DotsHorizontal.vue';
import Feather from 'vue-material-design-icons/Feather.vue';
import close from 'vue-material-design-icons/close.vue';
import ChevronDown from 'vue-material-design-icons/ChevronDown.vue';
import Earth from 'vue-material-design-icons/Earth.vue';
import ImageOutline from 'vue-material-design-icons/ImageOutline.vue';
import FileGifBox from 'vue-material-design-icons/FileGifBox.vue';
import ArrowLeft from 'vue-material-design-icons/ArrowLeft.vue';
import MenuItem from '@/Components/MenuItem.vue';
import Emoticon from 'vue-material-design-icons/Emoticon.vue';

let tweet = ref('');
let createTweet = ref(false);
let textarea = ref(null);
let file=ref('');
let showUpload=ref("");
let uploadType=ref("");

let randImg2 = ref(`https://picsum.photos/id/${(Math.random()*200).toFixed(0)}/100`);
let randImg1 = ref(`https://picsum.photos/id/${(Math.random()*200).toFixed(0)}/100`);


const showingNavigationDropdown = ref(false);


const getFile=(e)=>{
    file.value=e.target.files[0];
    showUpload.value=URL.createObjectURL(e.target.files[0]);
    uploadType.value=file.value.type.split(".").pop();
}
const closeMessageBox=()=>{
    createTweet.value=false;
    tweet.value="";
    showUpload.value="";
    uploadType.value="";
}
const textareaInput =(e)=>{
    textarea.value.style.height = 'auto';
    textarea.value.style.height = `${textarea.value.scrollHeight}px`;
}
</script>

<template>
    <div class="fixed w-full">
        <div class="max-w-[1400px] flex mx-auto">
            <div class="lg:w-3/12 w-[60px] h-[100vh] max-w-[350px] lg:px-4 lg:mx-auto">
              <div class="p-2 px-3 mb-4">
                <Twitter fillColor="#FFFFFF" :size="37" />
              </div> 
                <MenuItem iconString="home" />
                <MenuItem iconString="hash" />
                <MenuItem iconString="bell" />
                <MenuItem iconString="mail" />
                <MenuItem iconString="user" />
                <button class="lg:w-full
                               mt-8
                               ml-2
                               text-white
                               font-extrabold
                               text-[22px]
                               bg-[#1C9CEF]
                               p-3
                               px-3
                               rounded-full  
                               cursor-pointer 
                ">
                <span class="lg:block hidden ">Tweet</span>
                <span class="bloc lg:hidden"><Feather/></span>
            </button>
            </div>
            <div class="lg:w-7/12 w-11/12 border-x border-gray-800 relative">
                <div class=" bg-black bg-opacity-50 backdrop-blur-md z-10 absolute w-full">
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
                </div>
            </div>

            <div claass="absolute top-0 z-0 h-full overflow-auto scrollbar-hide ">

                <div class="mt-[126px]">

                </div>
                <!-- <slot/> -->
                <div class="pb-4"></div>
            </div>
            <div class="z-10 lg:block hidden lg:w-4/12 h-screen border-l border-gray-800 pl-4">
                <div class="w-full p-1 mt-2 px-4 lg:flex items-center rounded-full hidden bg-[#212327]">
                <Magnify fillColor="#5e5c5c" :size="25"/>
                    <input
                        class="
                            appearance-none
                            w-full
                            border-0
                            py-2
                            bg-[#212327]
                            text-gray-100
                            placeholder-gray-500
                            leading-tight
                            focus:ring-0
                        "
                        type="text"
                        placeholder="Search Twitter"
                    >
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
                            <img class="rounded-xl" :src="randImg2" alt=""/>
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
                    <div class=" rounded-lg hover:bg-gray-800 cursor-pointer transition duration-200 ease-in-out">
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
        </div>
       
    </div>

    <div id="OverlaySection" class="fixed  top-0 left-0 w-full h-screen bg-black md:bg-gray-400 md:bg-opacity-30 md:p-3">
        <div class="md:max-w-2xl  md:mx-auto md:mt-10 md:rounded-xl bg-black">
            <div
            class="flex w-full justify-between items-center rounded-full cursor-pointer md:inline-block p-2 m-2"
            >
            <div class="hover:bg-gray-800 inline-block p-2 rounded-full cursor-pointer">
                <close fillColor="#FFFFFF" :size="25" class="md:block hidden"/>
                <ArrowLeft fillColor="#FFFFFF" :size="25" class="md:hidden block"/>
            </div>
            <button 
            :disabled="!tweet"
            :class="tweet? 'bg-[#1C9CEF] text-white' :'bg-[#124D77] text-gray-400'"
            class="rounded-full font-extrabold cursor-pointer md:hidden text-[10px] p-1.5 px-4">
                Tweet
            </button>
        
        </div>
        <div class="w-full flex">
            <div class="ml-3.5 mr-4">
               <img class="rounded-full " width="55" :src="randImg1" alt="">
            </div>
            <div class="w-[calc(100%-100px)] cursor-pointer">
                <div class="inline-block">
                <div class="flex items-center border border-gray-700 rounded-full">
                    <span class="text-[#1C9CEF] p-0.5 pl-3.5 font-extrabold">
                        Everyone
                    </span>
                    <ChevronDown fillColor="#FFFFFF"  :size="25" class="ml-2"/>
                </div>
            </div>
            <div>
                <textarea
                    :oninput="textareaInput"
                    v-model="tweet"
                    placeholder="What's happening?"
                    rows="4"
                    cols="30"
                    ref="textarea"
                    class="w-full max-h-56 bg-black border-0 mt-2 focus:ring-0 text-white text-[20px] font-extrabold min-h-[120px]"
                ></textarea>
            </div>

            <div class="w-full">
                <video controls v-if="uploadType==='mp4'" :src="showUpload" class="rounded-xl overflow-auto"/>
                <img v-else :src="showUpload" class="rounded-xl min-w-full"/>
            </div>
            <div class="flex items-center py-2 font-extrabold text-[#1C9CEF]">
                <Earth class="pr-2" fillColor="#1C9CEF" :size="20"/>Everyone can reply
            </div>
            <div class="border-b border-b-gray-700"></div>
            <div class="flex items-center justify-between py-2">
                <div class="flex items-center">
                    <div class="hover:bg-gray-800 inline-block p-2 rounded-full cursor-pointer">
                            <label for="fileUpload" class="cursor-pointer">
                                <ImageOutline fillColor="#1C9CEF" :size="25"/>
                            </label>
                            <input type="file" id="fileUpload" class="hidden" @change="getFile">
                    </div>
                    <div class="hover:bg-gray-800 inline-block p-2 rounded-full cursor-pointer">
                            <FileGifBox fillColor="#1C9CEF" :size="25"/>
                    </div>
                    <div class="hover:bg-gray-800 inline-block p-2 rounded-full cursor-pointer">
                           <Emoticon fillColor="#1C9CEF" :size="25"/>
                    </div>
                </div>
                    <button 
                            :disabled="!tweet"
                            :class="tweet? 'bg-[#1C9CEF] text-white' :'bg-[#124D77] text-gray-400'"
                            class="rounded-full font-extrabold cursor-pointer md:block hidden text-[10px] p-1.5 px-4">
                                Tweet
                    </button>
            </div>
            
        </div>
    </div>

        </div>
    </div>
    
</template>
<style>
body {
    background-color: black;
}
</style>
