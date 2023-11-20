<script setup>
import { Head, Link } from '@inertiajs/vue3';
import TwitterLayout from '@/Layouts/TwitterLayout.vue';
import { comment } from 'postcss';
import Tweet from '@/Components/Tweet.vue';

</script>

<template>
    <Head title="Welcome" />
    <TwitterLayout>
        <div class="text-white">
           <div class="flex">
               <Tweet :tweet="{
                name:'John Doe',
                username:'@johndoe',
                time:'2h',
                handle:'@johndoe',
                image:'https://randomuser.me/api/portraits/men/40.jpg',
                tweet:'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatibus.',
                file:'/videos/videoplayback.mp4',
                is_video:true,
                comments:10,
                retweets:20,
                likes:30,
                analytics:81
               }" />
           </div>
           <div class="border-b border-b-gray-800 mt-2"></div> 
        </div>
    </TwitterLayout>
</template>

<!-- <style>
.bg-dots-darker {
    background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E");
}
@media (prefers-color-scheme: dark) {
    .dark\:bg-dots-lighter {
        background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E");
    }
}
</style> -->
