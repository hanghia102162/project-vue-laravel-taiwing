<template>
  <div class="grid grid-cols-4 gap-6 px-[100px] mt-[35px]">
    <div
      v-for="video in videos"
      :key="video.id"
      class="bg-white rounded-2xl shadow-lg overflow-hidden hover:scale-105 transition-all"
    >
      <!-- ẢNH VIDEO (thumbnail) -->
      <div class="relative">
        <img
          :src="video.thumbnail"
          alt="Thumbnail"
          class="w-full h-48 object-cover"
        />
        <div
          class="absolute bottom-2 right-2 bg-black bg-opacity-60 text-white text-xs px-2 py-1 rounded"
        >
          ⏱️ {{ video.duration }}
        </div>
      </div>

      <!-- PHẦN DƯỚI: THÔNG TIN -->
      <div class="p-4">
        <h3 class="text-lg font-semibold mb-1">{{ video.title }}</h3>
        <p class="text-gray-500 line-through">{{ formatPrice(video.oldPrice) }}</p>
        <p class="text-red-500 font-semibold mb-3">{{ formatPrice(video.price) }}</p>

        <div class="flex items-center justify-between text-gray-600 text-sm">
          <div class="flex items-center gap-1">
            <img src="../../img/8707e4bd-6dc4-40fe-88ab-84e33a7e60d8.jpeg" class="w-6 h-6 rounded-full" />
            <span>{{ video.author }}</span>
          </div>
          <div class="flex items-center gap-3">
            <span>👁️ {{ video.views }}</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue'

const videos = ref([])

onMounted(async () => {
  // Giả lập dữ liệu demo
  videos.value = [
    {
      id: 1,
      title: 'Khóa học Vue 3 cơ bản',
      thumbnail: 'https://i.ytimg.com/vi/qZXt1Aom3Cs/maxresdefault.jpg',
      price: 199000,
      oldPrice: 399000,
      author: 'Nguyễn Văn A',
      views: 12345,
      duration: '3h 20m',
    },
    {
      id: 2,
      title: 'Học Tailwind CSS nâng cao',
      thumbnail: 'https://i.ytimg.com/vi/pfaSUYaSgRo/maxresdefault.jpg',
      price: 149000,
      oldPrice: 299000,
      author: 'Trần Văn B',
      views: 8560,
      duration: '2h 45m',
    },
     {
      id: 2,
      title: 'Học Tailwind CSS nâng cao',
      thumbnail: 'https://i.ytimg.com/vi/pfaSUYaSgRo/maxresdefault.jpg',
      price: 149000,
      oldPrice: 299000,
      author: 'Trần Văn B',
      views: 8560,
      duration: '2h 45m',
    },
    {
      id: 2,
      title: 'Học Tailwind CSS nâng cao',
      thumbnail: 'https://i.ytimg.com/vi/pfaSUYaSgRo/maxresdefault.jpg',
      price: 149000,
      oldPrice: 299000,
      author: 'Trần Văn B',
      views: 8560,
      duration: '2h 45m',
    },
    {
      id: 2,
      title: 'Học Tailwind CSS nâng cao',
      thumbnail: 'https://i.ytimg.com/vi/pfaSUYaSgRo/maxresdefault.jpg',
      price: 149000,
      oldPrice: 299000,
      author: 'Trần Văn B',
      views: 8560,
      duration: '2h 45m',
    },
    {
      id: 2,
      title: 'Học Tailwind CSS nâng cao',
      thumbnail: 'https://i.ytimg.com/vi/pfaSUYaSgRo/maxresdefault.jpg',
      price: 149000,
      oldPrice: 299000,
      author: 'Trần Văn B',
      views: 8560,
      duration: '2h 45m',
    },
      {
      id: 2,
      title: 'Học Tailwind CSS nâng cao',
      thumbnail: 'https://i.ytimg.com/vi/pfaSUYaSgRo/maxresdefault.jpg',
      price: 149000,
      oldPrice: 299000,
      author: 'Trần Văn B',
      views: 8560,
      duration: '2h 45m',
    },
      {
      id: 2,
      title: 'Học Tailwind CSS nâng cao',
      thumbnail: 'https://i.ytimg.com/vi/pfaSUYaSgRo/maxresdefault.jpg',
      price: 149000,
      oldPrice: 299000,
      author: 'Trần Văn B',
      views: 8560,
      duration: '2h 45m',
    },
      {
      id: 2,
      title: 'Học Tailwind CSS nâng cao',
      thumbnail: 'https://i.ytimg.com/vi/pfaSUYaSgRo/maxresdefault.jpg',
      price: 149000,
      oldPrice: 299000,
      author: 'Trần Văn B',
      views: 8560,
      duration: '2h 45m',
    },
  ]
})

const formatPrice = (num) => num.toLocaleString('vi-VN') + 'đ'
</script>
