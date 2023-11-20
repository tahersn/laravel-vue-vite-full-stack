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
     {{ tweet }}
    <div>
        <img class="rounded-full m-2 mt-3" width="50" :src="tweet.image" alt="">
       
    </div>
    
</template>
