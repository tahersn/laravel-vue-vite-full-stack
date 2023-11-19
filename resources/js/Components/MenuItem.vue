<script setup>
import { defineProps } from 'vue';
import { toRefs } from 'vue';

const props = defineProps({
  iconString: String,
});

const { iconString } = toRefs(props);
let iconLabel = null;

if (iconString.value === 'home') {
  iconLabel = "Home";
}
if (iconString.value === 'hash') {
  iconLabel = "Explore";
}
if (iconString.value === 'bell') {
  iconLabel = "Notifications";
}
if (iconString.value === 'mail') {
  iconLabel = "Messages";
}
if (iconString.value === 'user') {
  iconLabel = "Profile";
}
</script>

<template>
  <div class="w-full lg:inline-block hover:bg-gray-900 p-2 px-4 lg-pr-6 rounded-full cursor-pointer transition duration-200 ease-in-out">
    <div class="flex items-center">
      <!-- Assuming you have a component named vue-feather -->
      <vue-feather :type="iconString" stroke="white" ></vue-feather>
      <!-- <component :is="icon" fillColor="#FFFFFF" :size="30" /> -->
      <span class="hidden lg:block ml-2 text-white text-[24px] pl-4 mt-0.5 font-extrabold">{{ iconLabel }}</span>
    </div>
  </div>
  
</template>
