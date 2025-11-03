<template>
  <div class="p-[100px] mt-[35px] flex gap-[110px] items-start">
    <!-- Bên trái -->
    <div class="flex-1">
      <div>
        <h2 class="text-[25px] font-black mb-4">Lộ trình học Front-end</h2>
        <p class="mb-3">
          Hầu hết các websites hoặc ứng dụng di động đều có 2 phần là Front-end và Back-end.
          Front-end là phần giao diện người dùng nhìn thấy và có thể tương tác, đó chính là các ứng
          dụng mobile hay những website bạn đã từng sử dụng. Vì vậy, nhiệm vụ của lập trình viên
          Front-end là xây dựng các giao diện đẹp, dễ sử dụng và tối ưu trải nghiệm người dùng.
        </p>
        <p class="mb-3">
          Tại Việt Nam,
          <a
            href="https://jobsgo.vn/muc-luong-lap-trinh-frontend/ha-noi.html"
            class="text-blue-600 hover:underline"
            >lương trung bình</a
          >
          cho lập trình viên front-end vào khoảng 16.000.000đ / tháng.
        </p>
        <p class="mb-3">
          Dưới đây là các khóa học F8 đã tạo ra dành cho bất cứ ai theo đuổi sự nghiệp trở thành một
          lập trình viên Front-end.
        </p>
        <p>
          Các khóa học có thể chưa đầy đủ, F8 vẫn đang nỗ lực hoàn thiện trong thời gian sớm nhất.
        </p>
      </div>
      <!--  -->
      <div v-for="(post, index) in posts" :key="index" class="py-6 mt-[15px]">
        <h1 class="font-black text-[25px]">{{ post.title }}</h1>
        <p class="my-[15px]">{{ post.content }}</p>
        <div
          class="mt-35px border-[2px] border-[rgba(0,0,0,0.3)] rounded-lg rounded-[5px] py-[15px] flex gap-5"
        >
          <img
            :src="post.authorAvatar"
            alt="tacgia"
            class="w-[299px] h-[273px] ml-[15px] rounded-lg object-cover"
          />
          <div>
            <h1 class="font-black text-[25px]">{{ post.name }}</h1>
            <h2 class="text-[rgb(255,0,0)]">{{ post.status }}</h2>
            <p class="mt-25px">{{ post.course_content }}</p>
            <button
              class="p-6 bg-[#64a3ea] rounded-[15px] mt-[15px] font-[15px] text-black hover:bg-[#1268b9] transition-all ease-in hover:-translate-y-2 hover:scale-105 hover:text-white"
            >
              xem khóa học
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Bên phải -->
    <div class="w-[280px] flex justify-center">
      <Wrapper class="rounded-2xl overflow-hidden" />
    </div>
  </div>
</template>

<script setup>
import Wrapper from '../../components/icon/Wrapper.vue'
const posts = [
  {
    title: '1. Tìm hiểu về ngành IT',
    content:
      'Để theo ngành IT - Phần mềm cần rèn luyện những kỹ năng nào? Bạn đã có sẵn tố chất phù hợp với ngành chưa? Cùng thăm quan các công ty IT và tìm hiểu về văn hóa, tác phong làm việc của ngành này nhé các bạn.',
    authorAvatar: '../../img/anh_thay.jpg',
    name: 'Kiến Thức Nhập Môn IT',
    status: 'Miễn phí',
    course_content:
      'Để có cái nhìn tổng quan về ngành IT - Lập trình web các bạn nên xem các videos tại khóa này trước nhé.',
  },
  {
    title: '2. Nhập môn HTML & CSS',
    content:
      'Bắt đầu hành trình lập trình web với HTML và CSS. Học cách xây dựng giao diện website cơ bản và hiểu cấu trúc của một trang web.',
    authorAvatar: '../../img/anh_thay_2.jpg',
    name: 'Thiết kế giao diện web',
    status: 'Miễn phí',
    course_content:
      'Khóa học giúp bạn nắm chắc nền tảng HTML, CSS và thực hành xây dựng giao diện web cơ bản.',
  },
  {
    title: '3. Lập trình JavaScript cơ bản',
    content:
      'Tìm hiểu cú pháp, biến, hàm và các thao tác với DOM. Làm quen với ngôn ngữ không thể thiếu của Frontend Developer.',
    authorAvatar: '../../img/images.png',
    name: 'Lập trình JavaScript',
    status: 'Miễn phí',
    course_content:
      'Sau khóa này bạn sẽ có thể viết các đoạn script xử lý tương tác người dùng, và hiểu rõ cách hoạt động của JavaScript trên trình duyệt.',
  },
  {
    title: '4. Làm quen với Backend PHP & MySQL',
    content:
      'Khám phá cách tạo website động bằng PHP và kết nối cơ sở dữ liệu MySQL. Học cách tạo trang đăng nhập, đăng ký và lưu trữ dữ liệu.',
    authorAvatar: '../../img/php_mysql.png',
    name: 'Lập trình Backend cơ bản',
    status: 'Miễn phí',
    course_content:
      'Khóa học giúp bạn hiểu backend hoạt động thế nào và thực hành với PHP, MySQL để xây dựng hệ thống hoàn chỉnh.',
  },
]
</script>
