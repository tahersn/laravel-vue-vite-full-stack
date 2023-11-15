<script setup >
import {toRefs} from 'vue';
// import Home from 'vue-material-design-icons/Home.vue';
// import Pound from 'vue-material-design-icons/Pound.vue';
// import BellOutLine from 'vue-material-design-icons/BellOutline.vue';
// import MailOutline from 'vue-material-design-icons/MailOutline.vue';
// import AccountOutline from 'vue-material-design-icons/AccountOutline.vue';

const props = defineProps({
    iconString: String,
});

const {iconString} = toRefs(props);
let icon = null;

// if (iconString.value==='Home') 
//     icon = Home;
//  if (iconString.value==='Pound') 
//     icon = Pound;
//  if (iconString.value==='BellOutline') 
//     icon = BellOutLine;
//  if (iconString.value==='MailOutline') 
//     icon = MailOutline;
//  if (iconString.value==='AccountOutline') 
//     icon = AccountOutline;

</script>

<template>
   <div class="w-full lg:inline-block hover:bg-gray-900 p-2 px-4 lg-pr-6 rounded-full crsor-pointer transition duration-200 ease-in-out">
    <div class="flex items-center"> 
       <vue-feather :type="iconString" stroke="white"></vue-feather>
        <!-- <component :is="icon" fillColor="#FFFFFF" :size="30" /> -->
        <span class="hidden lg:block ml-2 text-white text-[24px] pl-4 mt-0.5 font-extrabold">{{iconString}}</span>


    </div>

   </div>
</template>

