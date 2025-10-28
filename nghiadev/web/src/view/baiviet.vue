<template>
    <div class="p-[100px]">
        <h1 class="text-3xl font-bold text-gray-800 mb-3">
    Bài viết nổi bật
  </h1>
  <p class="text-gray-600 max-w-2xl">
    Tổng hợp các bài viết chia sẻ về kinh nghiệm tự học lập trình online và các kỹ thuật lập trình web.
  </p>

   <div class="mt-[35px] flex gap-8">
  <!-- Cột trái: Danh sách bài viết -->
  <div class="flex-1">
    <div
      v-for="(post, index) in posts"
      :key="index"
      class="flex items-start justify-between bg-[#f6f4f1] shadow-sm hover:shadow-md transition-all rounded-xl p-5 mb-6 cursor-pointer"
    >
      <!-- Bên trái -->
      <div class="flex-1 pr-5">
        <div class="flex items-center mb-3">
          <img
            :src="post.authorAvatar"
            alt="Tác giả"
            class="w-9 h-9 rounded-full object-cover mr-2"
          />
          <span class="font-semibold text-gray-800 text-sm">{{ post.author }}</span>
        </div>

        <h2 class="text-xl font-bold text-gray-900 leading-snug hover:text-blue-600">
          {{ post.title }}
        </h2>

        <p class="text-gray-600 mt-2 text-sm">{{ post.description }}</p>

        <div class="flex items-center gap-3 mt-3 text-sm text-gray-500">
          <span
            class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-xs font-medium"
          >
            {{ post.tag }}
          </span>
          <span>{{ post.time }}</span>
          <span>•</span>
          <span>{{ post.readTime }}</span>
        </div>
      </div>

      <!-- Ảnh thumbnail -->
      <div class="w-44 h-28 flex-shrink-0 relative">
        <img
          :src="post.thumbnail"
          alt="Ảnh bài viết"
          class="w-full h-full object-cover rounded-lg"
        />
      </div>
    </div>
  </div>

  <!-- Cột phải: Bộ lọc chủ đề -->
  <div class="w-[300px] p-6 h-fit">
    <p class="text-gray-800 font-semibold mb-3">Xem các bài viết theo chủ đề</p>

    <div class="flex flex-col gap-3">
      <button
        class="px-4 py-2 rounded-full text-sm font-medium bg-gray-100 hover:bg-gray-200 transition"
      >
        Front-end / Mobile apps
      </button>
      <button
        class="px-4 py-2 rounded-full text-sm font-medium bg-gray-100 hover:bg-gray-200 transition"
      >
        Back-end / DevOps
      </button>
      <div class="">
        <button
        class="px-4 py-2 rounded-full text-sm font-medium bg-gray-100 hover:bg-gray-200 transition"
      >
        UI / UX / Design
      </button>
      <button
        class="ml-[15px] px-4 py-2 rounded-full text-sm font-medium bg-gray-100 hover:bg-gray-200 transition"
      >
        Others
      </button>
      </div>
    </div>
  </div>
</div>

   
    </div>
</template>
<script setup lang="ts">
import { ref, onMounted } from 'vue'

// ✅ Mảng dữ liệu bài viết (sau này bạn có thể thay bằng fetch API)
const posts = ref([
  {
    author: 'Huyền Lê Ngọc',
    authorAvatar: 'https://avatars.githubusercontent.com/u/123456?v=4',
    title: 'TRẢI NGHIỆM HỌC THỬ REACT NATIVE, DEVOPS, C++ VÔ CÙNG CHẤT LƯỢNG CÙNG F8',
    description: 'Để giúp học viên mới cảm nhận rõ ràng chất lượng giảng dạy, F8 đã xây dựng 3 lớp học thử: C++, React Native và DevOps với lộ trình rõ ràng.',
    tag: 'React Native',
    time: '2 tháng trước',
    readTime: '2 phút đọc',
    thumbnail: 'https://fullstack.edu.vn/assets/images/blog/thumbnail/react-native-devops-cpp.jpg',
    overlayText: 'HỌC THỬ REACT NATIVE, DEVOPS, C++ VÔ CÙNG CHẤT LƯỢNG CÙNG F8'
  },
  {
    author: 'Sơn Đặng',
    authorAvatar: 'https://avatars.githubusercontent.com/u/7442850?v=4',
    title: 'Học lập trình web cơ bản với HTML, CSS, JavaScript',
    description: 'Khóa học miễn phí giúp bạn làm chủ kỹ năng nền tảng để xây dựng website đầu tiên.',
    tag: 'Frontend',
    time: '1 tháng trước',
    readTime: '5 phút đọc',
    thumbnail: 'https://fullstack.edu.vn/assets/images/blog/thumbnail/html-css-js.jpg',
    overlayText: 'BẮT ĐẦU HỌC LẬP TRÌNH WEB VỚI HTML - CSS - JS'
  },
    {
    author: 'Sơn Đặng',
    authorAvatar: 'https://avatars.githubusercontent.com/u/7442850?v=4',
    title: 'Học lập trình web cơ bản với HTML, CSS, JavaScript',
    description: 'Khóa học miễn phí giúp bạn làm chủ kỹ năng nền tảng để xây dựng website đầu tiên.',
    tag: 'Frontend',
    time: '1 tháng trước',
    readTime: '5 phút đọc',
    thumbnail: 'https://fullstack.edu.vn/assets/images/blog/thumbnail/html-css-js.jpg',
    overlayText: 'BẮT ĐẦU HỌC LẬP TRÌNH WEB VỚI HTML - CSS - JS'
  },
    {
    author: 'Sơn Đặng',
    authorAvatar: 'https://avatars.githubusercontent.com/u/7442850?v=4',
    title: 'Học lập trình web cơ bản với HTML, CSS, JavaScript',
    description: 'Khóa học miễn phí giúp bạn làm chủ kỹ năng nền tảng để xây dựng website đầu tiên.',
    tag: 'Frontend',
    time: '1 tháng trước',
    readTime: '5 phút đọc',
    thumbnail: 'https://fullstack.edu.vn/assets/images/blog/thumbnail/html-css-js.jpg',
    overlayText: 'BẮT ĐẦU HỌC LẬP TRÌNH WEB VỚI HTML - CSS - JS'
  },
    {
    author: 'Sơn Đặng',
    authorAvatar: 'https://avatars.githubusercontent.com/u/7442850?v=4',
    title: 'Học lập trình web cơ bản với HTML, CSS, JavaScript',
    description: 'Khóa học miễn phí giúp bạn làm chủ kỹ năng nền tảng để xây dựng website đầu tiên.',
    tag: 'Frontend',
    time: '1 tháng trước',
    readTime: '5 phút đọc',
    thumbnail: 'https://fullstack.edu.vn/assets/images/blog/thumbnail/html-css-js.jpg',
    overlayText: 'BẮT ĐẦU HỌC LẬP TRÌNH WEB VỚI HTML - CSS - JS'
  },
    {
    author: 'Sơn Đặng',
    authorAvatar: 'https://avatars.githubusercontent.com/u/7442850?v=4',
    title: 'Học lập trình web cơ bản với HTML, CSS, JavaScript',
    description: 'Khóa học miễn phí giúp bạn làm chủ kỹ năng nền tảng để xây dựng website đầu tiên.',
    tag: 'Frontend',
    time: '1 tháng trước',
    readTime: '5 phút đọc',
    thumbnail: 'https://fullstack.edu.vn/assets/images/blog/thumbnail/html-css-js.jpg',
    overlayText: 'BẮT ĐẦU HỌC LẬP TRÌNH WEB VỚI HTML - CSS - JS'
  }
])

// (Nếu bạn muốn gọi API động)
onMounted(async () => {
  // const res = await fetch('/api/posts')
  // posts.value = await res.json()
})
</script>