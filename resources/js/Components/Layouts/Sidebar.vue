<script setup>
import { ref } from 'vue';
import Twitter from 'vue-material-design-icons/Twitter.vue';
import Feather from 'vue-material-design-icons/Feather.vue';

import MenuItem from '@/Components/MenuItem.vue';
import TweetModal from '@/Components/TweetModal.vue';
import Modal from '@/Components/Modal.vue';

let randImg1 = ref(`https://picsum.photos/id/${(Math.random() * 100).toFixed(0)}/100`);

let createTweet = ref(false);

const closeTweet = () => {
    createTweet.value = false;
}
</script>

<template>
    <div class="lg:w-3/12 w-[60px] h-[100vh] max-w-[350px] lg:px-4 lg:mx-auto">
        <div class="p-2 px-3 mb-4">
            <Twitter fillColor="#FFFFFF" :size="37" />
        </div>
        <MenuItem iconString="home" />
        <MenuItem iconString="hash" />
        <MenuItem iconString="bell" />
        <MenuItem iconString="mail" />
        <MenuItem iconString="user" />
        <button @click="createTweet = true" class="lg:w-full
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
            <span class="bloc lg:hidden">
                <Feather />
            </span>
        </button>
    </div>

    <TweetModal :show="createTweet" @close="closeTweet" :profileImg="randImg1" />
</template>