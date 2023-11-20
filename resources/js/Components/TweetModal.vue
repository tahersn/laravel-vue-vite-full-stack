<script setup>
import { ref } from 'vue';

import close from 'vue-material-design-icons/close.vue';
import ChevronDown from 'vue-material-design-icons/ChevronDown.vue';
import Earth from 'vue-material-design-icons/Earth.vue';
import ImageOutline from 'vue-material-design-icons/ImageOutline.vue';
import FileGifBox from 'vue-material-design-icons/FileGifBox.vue';
import ArrowLeft from 'vue-material-design-icons/ArrowLeft.vue';
import Emoticon from 'vue-material-design-icons/Emoticon.vue';

const props = defineProps({
    show: {
        type: Boolean,
        default: false,
    },
    profileImg: {
        type: String,
        required: true,
    }
})

const emit = defineEmits(['close']);

let tweet = ref('');
let textarea = ref(null);
let file = ref('');
let showUpload = ref("");
let uploadType = ref("");

const getFile = (e) => {
    file.value = e.target.files[0];
    showUpload.value = URL.createObjectURL(e.target.files[0]);
    uploadType.value = file.value.type.split(".").pop();
}
const closeMessageBox = () => {
    tweet.value = "";
    showUpload.value = "";
    uploadType.value = "";
    emit('close');
}

const textareaInput = (e) => {
    textarea.value.style.height = 'auto';
    textarea.value.style.height = `${textarea.value.scrollHeight}px`;
}

</script>

<template>
    <Transition enter-active-class="ease-out duration-200" enter-from-class="opacity-0" enter-to-class="opacity-100"
        leave-active-class="ease-in duration-200" leave-from-class="opacity-100" leave-to-class="opacity-0">
        <div id="OverlaySection" v-if="props.show"
            class="fixed top-0 left-0 w-full h-screen transition delay-200 ease-in-out bg-black md:bg-gray-400 md:bg-opacity-30 md:p-3 z-50">
            <div class="md:max-w-2xl  md:mx-auto md:mt-10 md:rounded-xl bg-black">
                <div class="flex w-full justify-between items-center rounded-full cursor-pointer md:inline-block p-2 m-2">
                    <div @click="closeMessageBox()" class="hover:bg-gray-800 inline-block p-2 rounded-full cursor-pointer">
                        <close fillColor="#FFFFFF" :size="25" class="md:block hidden" />
                        <ArrowLeft fillColor="#FFFFFF" :size="25" class="md:hidden block" />
                    </div>
                    <button :disabled="!tweet" :class="tweet ? 'bg-[#1C9CEF] text-white' : 'bg-[#124D77] text-gray-400'"
                        class="rounded-full font-extrabold cursor-pointer md:hidden text-[10px] p-1.5 px-4">
                        Tweet
                    </button>

                </div>
                <div class="w-full flex">
                    <div class="ml-3.5 mr-4">
                        <img class="rounded-full " width="55" :src="profileImg" alt="">
                    </div>
                    <div class="w-[calc(100%-100px)] cursor-pointer">
                        <div class="inline-block">
                            <div class="flex items-center border border-gray-700 rounded-full">
                                <span class="text-[#1C9CEF] p-0.5 pl-3.5 font-extrabold">
                                    Everyone
                                </span>
                                <ChevronDown fillColor="#FFFFFF" :size="25" class="ml-2" />
                            </div>
                        </div>
                        <div>
                            <textarea :oninput="textareaInput" v-model="tweet" placeholder="What's happening?" rows="4"
                                cols="30" ref="textarea"
                                class="w-full max-h-56 bg-black border-0 mt-2 focus:ring-0 text-white text-[20px] font-extrabold min-h-[120px]"></textarea>
                        </div>

                        <div class="w-full">
                            <video controls v-if="uploadType === 'mp4'" :src="showUpload"
                                class="rounded-xl overflow-auto" />
                            <img v-else :src="showUpload" class="rounded-xl min-w-full" />
                        </div>
                        <div class="flex items-center py-2 font-extrabold text-[#1C9CEF]">
                            <Earth class="pr-2" fillColor="#1C9CEF" :size="20" />Everyone can reply
                        </div>
                        <div class="border-b border-b-gray-700"></div>
                        <div class="flex items-center justify-between py-2">
                            <div class="flex items-center">
                                <div class="hover:bg-gray-800 inline-block p-2 rounded-full cursor-pointer">
                                    <label for="fileUpload" class="cursor-pointer">
                                        <ImageOutline fillColor="#1C9CEF" :size="25" />
                                    </label>
                                    <input type="file" id="fileUpload" class="hidden" @change="getFile">
                                </div>
                                <div class="hover:bg-gray-800 inline-block p-2 rounded-full cursor-pointer">
                                    <FileGifBox fillColor="#1C9CEF" :size="25" />
                                </div>
                                <div class="hover:bg-gray-800 inline-block p-2 rounded-full cursor-pointer">
                                    <Emoticon fillColor="#1C9CEF" :size="25" />
                                </div>
                            </div>
                            <button :disabled="!tweet"
                                :class="tweet ? 'bg-[#1C9CEF] text-white' : 'bg-[#124D77] text-gray-400'"
                                class="rounded-full font-extrabold cursor-pointer md:block hidden text-[10px] p-1.5 px-4">
                                Tweet
                            </button>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </Transition>
</template>