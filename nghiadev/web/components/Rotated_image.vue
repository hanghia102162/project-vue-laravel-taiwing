<script setup>
import { ref, onMounted, onBeforeUnmount } from 'vue'

const images = [
  "../img/pic2.jpg",
  "../img/9a11baea-b8c2-492a-b4c1-beb821f11447.jpg",
  "../img/8707e4bd-6dc4-40fe-88ab-84e33a7e60d8.jpeg"
]

const current = ref(0)
const direction = ref('next') // next hoặc prev

function next() {
  direction.value = 'next'
  current.value = (current.value + 1) % images.length
}

function prev() {
  direction.value = 'prev'
  current.value = (current.value - 1 + images.length) % images.length
}

// helper: xác định vị trí ảnh
function getPosition(index) {
  if(index === current.value) return 'active'
  if(direction.value === 'next') return (index === (current.value - 1 + images.length) % images.length) ? 'left' : 'right'
  if(direction.value === 'prev') return (index === (current.value + 1) % images.length) ? 'right' : 'left'
  return 'right'
}
// Auto-play khi component mount
let intervalId = null
onMounted(() => {
  intervalId = setInterval(next, 3000) // 3s chuyển ảnh
})

// Dọn interval khi component bị destroy
onBeforeUnmount(() => {
  clearInterval(intervalId)
})
</script>

<template>
  <div class="mt-[12vh] w-full h-[300px] flex justify-center items-center relative overflow-hidden">
    
    <!-- nút Prev -->
    <button @click="prev" class="absolute left-[75px] w-[50px] h-[50px] rounded-full bg-transparent text-white z-[2] flex justify-center items-center backdrop-blur-sm">
      <ion-icon name="arrow-back-outline"></ion-icon>
    </button>

    <!-- slider -->
    <div class="w-[85%] h-[300px] relative rounded-[18px] overflow-hidden bg-[antiquewhite] flex justify-center items-center">
      <img v-for="(img, index) in images" :key="index" :src="img"
           class="absolute top-0 left-0 w-full h-full object-cover rounded-[18px] transition-all duration-1000 ease-in-out"
           :class="{
             'translate-x-0 opacity-100 z-10': getPosition(index) === 'active',
             '-translate-x-full opacity-0 z-0': getPosition(index) === 'left',
             'translate-x-full opacity-0 z-0': getPosition(index) === 'right'
           }" />
    </div>

    <!-- nút Next -->
    <button @click="next" class="absolute right-[75px] w-[50px] h-[50px] rounded-full bg-transparent text-white z-[2] flex justify-center items-center backdrop-blur-sm">
      <ion-icon name="arrow-forward-outline"></ion-icon>
    </button>

  </div>
</template>
