<template>
  <div>
    <!-- Header -->
    <header class="w-full bg-gray-100 shadow-md">
      <div class="flex justify-between items-center px-10 py-4">
        <!-- Logo -->
        <h1 class="text-[20px] font-black text-shadow-lg">Mr.Nghia</h1>

        <!-- Menu Desktop -->
        <div class="hidden md:flex items-center gap-8">
          <a href="#" class="text-gray-700 font-medium hover:text-blue-500 transition">Home</a>
          <a href="#" class="text-gray-700 font-medium hover:text-blue-500 transition">About</a>
          <a href="#" class="text-gray-700 font-medium hover:text-blue-500 transition">Skill</a>
          <a href="#" class="text-gray-700 font-medium hover:text-blue-500 transition">Services</a>
          <a href="#" class="text-gray-700 font-medium hover:text-blue-500 transition">Blog</a>
          <a
            href="#"
            class="bg-blue-500 text-white font-semibold px-4 py-2 rounded-[15px] hover:bg-blue-600 transition shadow-md"
          >
            Contact Us
          </a>
        </div>

        <!-- Nút mở menu mobile -->
        <button @click="open = !open" class="md:hidden text-3xl text-gray-700 focus:outline-none">
          <ion-icon :name="open ? 'close-outline' : 'menu-outline'"></ion-icon>
        </button>
      </div>

      <!-- Menu Mobile -->
      <transition name="slide">
        <nav v-if="open" class="md:hidden bg-white shadow-inner">
          <ul class="flex flex-col items-center gap-4 py-4">
            <li><a href="#" class="text-gray-700 hover:text-blue-500">Home</a></li>
            <li><a href="#" class="text-gray-700 hover:text-blue-500">About</a></li>
            <li><a href="#" class="text-gray-700 hover:text-blue-500">Skill</a></li>
            <li><a href="#" class="text-gray-700 hover:text-blue-500">Services</a></li>
            <li><a href="#" class="text-gray-700 hover:text-blue-500">Blog</a></li>
            <li><a href="#" class="text-gray-700 hover:text-blue-500">Contact</a></li>
          </ul>
        </nav>
      </transition>
    </header>

    <!-- Ảnh banner -->
    <section class="p-6 bg-yellow-50 justify-center flex flex-col md:flex-row gap-[100px]">
      <div class="md:w-1/3 w-full aspect-square rounded-full overflow-hidden">
        <img src="../../img/anh_thay3.jpg" alt="Banner" class="w-full h-full object-cover" />
      </div>
      <div class="w-full md:w-1/3 justify-center flex flex-col gap-4">
        <h1 class="font-black text-[35px]">Hey I'm Mr.Nghia</h1>
        <h3 class="font-medium text-[25px]">I'm a Desiger</h3>
        <p>
          Tôi là Hà Trọng Nghĩa, một lập trình viên web có tinh thần học hỏi cao và đam mê công
          nghệ. Tôi có kinh nghiệm làm việc với HTML, CSS, JavaScript, PHP, cùng các framework hiện
          đại như Vue.js, Laravel và TailwindCSS. Mục tiêu của tôi là không ngừng phát triển kỹ
          năng, tạo ra những sản phẩm web tối ưu, thân thiện với người dùng và có giá trị thực tế.
        </p>
        <div class="flex items-center gap-4 text-2xl text-gray-700 mt-4">
          <a href="" class="text-3xl"><ion-icon name="logo-github"></ion-icon></a>
          <a href="" class="text-3xl"><ion-icon name="logo-facebook"></ion-icon></a>
          <a href="" class="text-3xl"><ion-icon name="logo-instagram"></ion-icon></a>
          <a href="" class="text-3xl"><ion-icon name="logo-youtube"></ion-icon></a>
        </div>
      </div>
    </section>
  </div>
</template>

<script setup>
import { ref } from 'vue'
const open = ref(false)
</script>

<style scoped>
/* Hiệu ứng trượt cho menu mobile */
.slide-enter-active,
.slide-leave-active {
  transition: all 0.3s ease;
}
.slide-enter-from,
.slide-leave-to {
  opacity: 0;
  transform: translateY(-10px);
}
</style>
