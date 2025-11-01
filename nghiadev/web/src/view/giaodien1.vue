<script setup>
import Rotated_image from '../../components/Rotated_image.vue'
import Videopro from '../../components/icon/Videopro.vue'
import Video from '../../components/icon/Video.vue'
import Article from '../../components/icon/Article.vue'
import Videooutstanding from '../../components/icon/Videooutstanding.vue'
</script>

<template>
  <Rotated_image />
  <div class="ml-[110px] mt-[35px] flex gap-1 relative">
    <h2 class="text-2xl font-extrabold">Khóa học pro</h2>
    <p class="bg-[#159ad8] p-2 rounded-[15px] top-0">Mới</p>
  </div>
  <!-- <Video /> -->
  <Videopro />
  <!--  -->
  <div class="px-[100px] my-[45px] mt-[35px]">
    <p>455.635+ người khác đã học</p>
    <h1 class="text-2xl font-extrabold">Khóa học miễn phí</h1>
  </div>
  <Video />

  <h1 class="px-[100px] my-[45px] text-2xl font-extrabold">Bài viết nổi bật</h1>
  <Article />
  <h1 class="px-[100px] my-[45px] text-2xl font-extrabold">Videos nổi bật</h1>
  <Videooutstanding />
</template>
<style>
/* body {
  background-color: rgba(96, 112, 27, 0.39);
} */
</style>
