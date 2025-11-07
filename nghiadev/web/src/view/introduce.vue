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
          <a href="#services" class="text-gray-700 font-medium hover:text-blue-500 transition"
            >Services</a
          >
          <a href="#Skill" class="text-gray-700 font-medium hover:text-blue-500 transition"
            >Skill</a
          >
          <a href="#Education" class="text-gray-700 font-medium hover:text-blue-500 transition"
            >Education</a
          >
          <a href="#Blog" class="text-gray-700 font-medium hover:text-blue-500 transition">Blog</a>
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
      <div class="md:w-1/3 w-full aspect-square rounded-full overflow-hidden slide-in-left">
        <img
          src="../../img/anh_thay3.jpg"
          alt="Banner"
          class="w-full h-full object-cover hover:scale-150 transition-transform duration-500"
        />
      </div>
      <div class="w-full md:w-1/3 justify-center flex flex-col gap-4">
        <h1 id="typed" class="font-black text-[35px] slide-in-right">Hey I'm Mr.Nghia</h1>
        <h3 class="font-medium text-[25px] slide-in-top">I'm a Designer</h3>
        <p class="slide-in-top">
          Tôi là Hà Trọng Nghĩa, một lập trình viên web có tinh thần học hỏi cao và đam mê công
          nghệ. Tôi có kinh nghiệm làm việc với HTML, CSS, JavaScript, PHP, cùng các framework hiện
          đại như Vue.js, Laravel và TailwindCSS. Mục tiêu của tôi là không ngừng phát triển kỹ
          năng, tạo ra những sản phẩm web tối ưu, thân thiện với người dùng và có giá trị thực tế.
        </p>
        <div class="flex items-center gap-4 text-2xl text-gray-700 mt-4 slide-in-top">
          <a
            href="https://github.com/hanghia102162"
            class="text-3xl hover:[filter:drop-shadow(0_0_20px_rgba(128,128,128,0.8))] hover:tratifrom-y-[15px] rounded-[50%] hover:translate-y-[-15px] hover:scale-130 hover:brightness-125 transition-transform duration-1000"
            ><ion-icon name="logo-github"></ion-icon
          ></a>
          <a
            href="https://www.facebook.com/?locale=vi_VN"
            class="text-3xl rounded-[50%] hover:[filter:drop-shadow(0_0_20px_rgba(128,128,128,0.8))] hover:translate-y-[-15px] hover:scale-130 hover:brightness-125 transition-transform duration-1000"
            ><ion-icon name="logo-facebook"></ion-icon
          ></a>
          <a
            href=""
            class="text-3xl rounded-[50%] hover:[filter:drop-shadow(0_0_20px_rgba(128,128,128,0.8))] hover:translate-y-[-15px] hover:scale-130 hover:brightness-125 transition-transform duration-1000"
            ><ion-icon name="logo-instagram"></ion-icon
          ></a>
          <a
            href=""
            class="text-3xl rounded-[50%] hover:[filter:drop-shadow(0_0_20px_rgba(128,128,128,0.8))] hover:translate-y-[-15px] hover:scale-130 hover:brightness-125 transition-transform duration-1000"
            ><ion-icon name="logo-youtube"></ion-icon
          ></a>
        </div>
      </div>
    </section>
    <!-- services -->
    <div class="mt-[106px]" id="services">
      <h2 class="font-black flex justify-center items-center text-[55px]">Services</h2>
      <div class="grid md:grid-cols-3 gap-4 mt-[25px] p-9">
        <div
          class="col-span-1 h-auto p-6 rounded-lg shadow-md border-2 border-black hover:translate-y-[-5px] transition-transform duration-300"
        >
          <h2 class="font-black flex justify-center items-center text-[25px]">
            Fontend Development
          </h2>
          <p class="text-gray-800 leading-relaxed">
            Tôi là một Frontend Developer đam mê công nghệ, chuyên phát triển giao diện web bằng
            Vue.js và Tailwind CSS. Tôi yêu thích việc tạo ra những sản phẩm có giao diện hiện đại,
            tối giản và thân thiện với người dùng. Trong quá trình làm việc, tôi luôn chú trọng vào
            tính tương tác, hiệu suất và trải nghiệm người dùng (UX/UI). Với tinh thần học hỏi và
            sáng tạo, tôi không ngừng nâng cao kỹ năng để mang đến những giải pháp web tối ưu, linh
            hoạt và thẩm mỹ.
          </p>
        </div>
        <div
          class="col-span-1 h-auto p-6 rounded-lg shadow-md border-2 border-black hover:translate-y-[-5px] transition-transform duration-300"
        >
          <h2 class="font-black flex justify-center items-center text-[25px]">Graphic Designer</h2>
          <p class="text-gray-800 leading-relaxed">
            Tôi là một Graphic Designer sáng tạo, đam mê nghệ thuật và yêu thích việc biến ý tưởng
            thành những thiết kế trực quan đầy cảm xúc. Tôi có kinh nghiệm trong việc sử dụng các
            công cụ như Adobe Photoshop, Illustrator, Figma, và luôn chú trọng đến bố cục, màu sắc,
            và trải nghiệm thị giác. Mỗi dự án đối với tôi là một cơ hội để thể hiện sự sáng tạo, kể
            câu chuyện bằng hình ảnh và mang lại giá trị thẩm mỹ lẫn thông điệp rõ ràng. Tôi luôn
            không ngừng học hỏi để cập nhật xu hướng thiết kế mới, hướng tới việc tạo ra những sản
            phẩm chuyên nghiệp, tinh tế và ấn tượng.
          </p>
        </div>
        <div
          class="col-span-1 h-auto p-6 rounded-lg shadow-md border-2 border-black hover:translate-y-[-5px] transition-transform duration-300"
        >
          <h2 class="font-black flex justify-center items-center text-[25px]">Backend Developer</h2>
          <p class="text-gray-800 leading-relaxed">
            Tôi là một Backend Developer đam mê phát triển hệ thống và xử lý logic phía máy chủ. Tôi
            tập trung vào việc xây dựng kiến trúc backend ổn định, bảo mật và hiệu suất cao, giúp
            các ứng dụng web hoạt động trơn tru và đáng tin cậy. Tôi có kinh nghiệm làm việc với các
            công nghệ như PHP, Node.js, MySQL, và RESTful API, đồng thời luôn tuân thủ các nguyên
            tắc clean code và tối ưu hóa cơ sở dữ liệu. Với tinh thần học hỏi và trách nhiệm, tôi
            không ngừng nâng cao kỹ năng để tạo ra những sản phẩm bền vững, dễ mở rộng và đáp ứng
            tốt nhu cầu người dùng.
          </p>
        </div>
        <!--  -->
        <div
          class="col-span-1 h-auto p-6 rounded-lg shadow-md border-2 border-black hover:translate-y-[-5px] transition-transform duration-300"
        >
          <h2 class="font-black flex justify-center items-center text-[25px]">Backend Developer</h2>
          <p class="text-gray-800 leading-relaxed">
            Tôi là một Backend Developer đam mê phát triển hệ thống và xử lý logic phía máy chủ. Tôi
            tập trung vào việc xây dựng kiến trúc backend ổn định, bảo mật và hiệu suất cao, giúp
            các ứng dụng web hoạt động trơn tru và đáng tin cậy. Tôi có kinh nghiệm làm việc với các
            công nghệ như PHP, Node.js, MySQL, và RESTful API, đồng thời luôn tuân thủ các nguyên
            tắc clean code và tối ưu hóa cơ sở dữ liệu. Với tinh thần học hỏi và trách nhiệm, tôi
            không ngừng nâng cao kỹ năng để tạo ra những sản phẩm bền vững, dễ mở rộng và đáp ứng
            tốt nhu cầu người dùng.
          </p>
        </div>
        <div
          class="col-span-1 h-auto p-6 rounded-lg shadow-md border-2 border-black hover:translate-y-[-5px] transition-transform duration-300"
        >
          <h2 class="font-black flex justify-center items-center text-[25px]">Backend Developer</h2>
          <p class="text-gray-800 leading-relaxed">
            Tôi là một Backend Developer đam mê phát triển hệ thống và xử lý logic phía máy chủ. Tôi
            tập trung vào việc xây dựng kiến trúc backend ổn định, bảo mật và hiệu suất cao, giúp
            các ứng dụng web hoạt động trơn tru và đáng tin cậy. Tôi có kinh nghiệm làm việc với các
            công nghệ như PHP, Node.js, MySQL, và RESTful API, đồng thời luôn tuân thủ các nguyên
            tắc clean code và tối ưu hóa cơ sở dữ liệu. Với tinh thần học hỏi và trách nhiệm, tôi
            không ngừng nâng cao kỹ năng để tạo ra những sản phẩm bền vững, dễ mở rộng và đáp ứng
            tốt nhu cầu người dùng.
          </p>
        </div>
        <div
          class="col-span-1 h-auto p-6 rounded-lg shadow-md border-2 border-black hover:translate-y-[-5px] transition-transform duration-300"
        >
          <h2 class="font-black flex justify-center items-center text-[25px]">Backend Developer</h2>
          <p class="text-gray-800 leading-relaxed">
            Tôi là một Backend Developer đam mê phát triển hệ thống và xử lý logic phía máy chủ. Tôi
            tập trung vào việc xây dựng kiến trúc backend ổn định, bảo mật và hiệu suất cao, giúp
            các ứng dụng web hoạt động trơn tru và đáng tin cậy. Tôi có kinh nghiệm làm việc với các
            công nghệ như PHP, Node.js, MySQL, và RESTful API, đồng thời luôn tuân thủ các nguyên
            tắc clean code và tối ưu hóa cơ sở dữ liệu. Với tinh thần học hỏi và trách nhiệm, tôi
            không ngừng nâng cao kỹ năng để tạo ra những sản phẩm bền vững, dễ mở rộng và đáp ứng
            tốt nhu cầu người dùng.
          </p>
        </div>
      </div>
    </div>
    <!-- Skill -->
    <div id="Skill" class="mt-[106px]">
      <h2 class="font-black flex justify-center items-center text-[55px]">Skill</h2>
      <div
        class="grid p-4 md:grid-cols-5 gap-4 mt-[25px] w-[70%] justify-center items-center mx-auto rounded-full"
      >
        <div
          class="border-[1px] flex h-[50px] justify-center items-center rounded-full hover:-translate-y-1 hover:shadow-lg hover:shadow-blue-400/70 transition-all duration-300"
        >
          <ion-icon name="logo-figma"></ion-icon>
        </div>
        <div
          class="border-[1px] flex h-[50px] justify-center items-center rounded-full hover:-translate-y-1 hover:shadow-lg hover:shadow-blue-400/70 transition-all duration-300"
        >
          <ion-icon name="logo-github"></ion-icon>
        </div>
        <div
          class="border-[1px] flex h-[50px] justify-center items-center rounded-full hover:-translate-y-1 hover:shadow-lg hover:shadow-blue-400/70 transition-all duration-300"
        >
          <ion-icon name="logo-vue"></ion-icon>
        </div>
        <div
          class="border-[1px] flex h-[50px] justify-center items-center rounded-full hover:-translate-y-1 hover:shadow-lg hover:shadow-blue-400/70 transition-all duration-300"
        >
          <ion-icon name="logo-laravel"></ion-icon>
        </div>
        <div
          class="border-[1px] flex h-[50px] justify-center items-center rounded-full hover:-translate-y-1 hover:shadow-lg hover:shadow-blue-400/70 transition-all duration-300"
        >
          <ion-icon name="logo-javascript"></ion-icon>
        </div>
        <!--  -->
        <div
          class="border-[1px] flex h-[50px] justify-center items-center rounded-full hover:-translate-y-1 hover:shadow-lg hover:shadow-blue-400/70 transition-all duration-300"
        >
          <ion-icon name="logo-figma"></ion-icon>
        </div>
        <div
          class="border-[1px] flex h-[50px] justify-center items-center rounded-full hover:-translate-y-1 hover:shadow-lg hover:shadow-blue-400/70 transition-all duration-300"
        >
          <ion-icon name="logo-github"></ion-icon>
        </div>
        <div
          class="border-[1px] flex h-[50px] justify-center items-center rounded-full hover:-translate-y-1 hover:shadow-lg hover:shadow-blue-400/70 transition-all duration-300"
        >
          <ion-icon name="logo-vue"></ion-icon>
        </div>
        <div
          class="border-[1px] flex h-[50px] justify-center items-center rounded-full hover:-translate-y-1 hover:shadow-lg hover:shadow-blue-400/70 transition-all duration-300"
        >
          <ion-icon name="logo-laravel"></ion-icon>
        </div>
        <div
          class="border-[1px] flex h-[50px] justify-center items-center rounded-full hover:-translate-y-1 hover:shadow-lg hover:shadow-blue-400/70 transition-all duration-300"
        >
          <ion-icon name="logo-javascript"></ion-icon>
        </div>
      </div>
    </div>
    <!-- education -->
    <div id="Education" class="mt-[55px]">
      <h2 class="font-black flex justify-center items-center text-[55px]">My Education</h2>
      <div class="relative w-[90%] md:w-[70%] mx-auto mt-[55px]">
        <div
          class="absolute left-1/2 top-0 h-full w-[3px] bg-red-500 transform -translate-x-1/2"
        ></div>
        <!-- 1️⃣ Trái -->
        <div class="flex justify-between items-center w-full mb-8" data-aos="fade-left">
          <div class="w-[45%] bg-red-500 text-black p-4 rounded-md relative">
            <h3 class="font-bold text-lg">Năm nhất</h3>
            <p>Chả làm được cái đầu buồi gì ngoài ăn bám</p>
            <!-- Mũi tên -->
            <div
              class="absolute right-[-10px] top-1/2 -translate-y-1/2 w-0 h-0 border-t-[10px] border-b-[10px] border-l-[10px] border-t-transparent border-b-transparent border-l-red-500"
            ></div>
          </div>

          <!-- Icon giữa -->
          <div
            class="flex items-center justify-center w-[50px] h-[50px] bg-black border-[2px] border-red-500 rounded-full z-10"
          >
            <ion-icon name="school" class="text-red-500 text-2xl"></ion-icon>
          </div>
          <div class="w-[45%]"></div>
        </div>
        <!-- 2️⃣ Phải -->
        <div class="flex justify-between items-center w-full mb-8" data-aos="fade-right">
          <div class="w-[45%]"></div>

          <div
            class="flex items-center justify-center w-[50px] h-[50px] bg-black border-[2px] border-red-500 rounded-full z-10"
          >
            <ion-icon name="briefcase" class="text-red-500 text-2xl"></ion-icon>
          </div>

          <div class="w-[45%] bg-red-500 text-black p-4 rounded-md relative">
            <h3 class="font-bold text-lg">Năm 2</h3>
            <p>Cũng chả làm được cái đầu buồi gì</p>
            <div
              class="absolute left-[-10px] top-1/2 -translate-y-1/2 w-0 h-0 border-t-[10px] border-b-[10px] border-r-[10px] border-t-transparent border-b-transparent border-r-red-500"
            ></div>
          </div>
        </div>
        <!-- 1️⃣ Trái -->
        <div class="flex justify-between items-center w-full mb-8" data-aos="fade-left">
          <div class="w-[45%] bg-red-500 text-black p-4 rounded-md relative">
            <h3 class="font-bold text-lg">Năm 3</h3>
            <p>
              Như năm 2/p>
              <!-- Mũi tên -->
            </p>

            <div
              class="absolute right-[-10px] top-1/2 -translate-y-1/2 w-0 h-0 border-t-[10px] border-b-[10px] border-l-[10px] border-t-transparent border-b-transparent border-l-red-500"
            ></div>
          </div>

          <!-- Icon giữa -->
          <div
            class="flex items-center justify-center w-[50px] h-[50px] bg-black border-[2px] border-red-500 rounded-full z-10"
          >
            <ion-icon name="school" class="text-red-500 text-2xl"></ion-icon>
          </div>
          <div class="w-[45%]"></div>
        </div>
        <!-- 2️⃣ Phải -->
        <div class="flex justify-between items-center w-full mb-8" data-aos="fade-right">
          <div class="w-[45%]"></div>

          <div
            class="flex items-center justify-center w-[50px] h-[50px] bg-black border-[2px] border-red-500 rounded-full z-10"
          >
            <ion-icon name="briefcase" class="text-red-500 text-2xl"></ion-icon>
          </div>

          <div class="w-[45%] bg-red-500 text-black p-4 rounded-md relative">
            <h3 class="font-bold text-lg">NĂm 4</h3>
            <p>Chưa Giờ mới năm 3</p>
            <div
              class="absolute left-[-10px] top-1/2 -translate-y-1/2 w-0 h-0 border-t-[10px] border-b-[10px] border-r-[10px] border-t-transparent border-b-transparent border-r-red-500"
            ></div>
          </div>
        </div>
        <!-- trai -->
        <div class="flex justify-between items-center w-full mb-8" data-aos="fade-left">
          <div class="w-[45%] bg-red-500 text-black p-4 rounded-md relative">
            <h3 class="font-bold text-lg">High School</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid consequuntur.</p>
            <!-- Mũi tên -->
            <div
              class="absolute right-[-10px] top-1/2 -translate-y-1/2 w-0 h-0 border-t-[10px] border-b-[10px] border-l-[10px] border-t-transparent border-b-transparent border-l-red-500"
            ></div>
          </div>

          <!-- Icon giữa -->
          <div
            class="flex items-center justify-center w-[50px] h-[50px] bg-black border-[2px] border-red-500 rounded-full z-10"
          >
            <ion-icon name="school" class="text-red-500 text-2xl"></ion-icon>
          </div>
          <div class="w-[45%]"></div>
        </div>
        <!-- 2️⃣ Phải -->
        <div class="flex justify-between items-center w-full mb-8" data-aos="fade-right">
          <div class="w-[45%]"></div>

          <div
            class="flex items-center justify-center w-[50px] h-[50px] bg-black border-[2px] border-red-500 rounded-full z-10"
          >
            <ion-icon name="briefcase" class="text-red-500 text-2xl"></ion-icon>
          </div>

          <div class="w-[45%] bg-red-500 text-black p-4 rounded-md relative">
            <h3 class="font-bold text-lg">Thành Tự các năm học</h3>
            <p>Cháu ngoan bác hồ</p>
            <div
              class="absolute left-[-10px] top-1/2 -translate-y-1/2 w-0 h-0 border-t-[10px] border-b-[10px] border-r-[10px] border-t-transparent border-b-transparent border-r-red-500"
            ></div>
          </div>
        </div>
      </div>
    </div>
    <!-- Blog -->
    <section id="Blog" class="min-h-screen bg-black text-white flex flex-col items-center py-16">
      <h2 class="text-4xl font-bold mb-10">Contact<span class="text-red-500">Me</span></h2>

      <form class="w-[90%] md:w-[60%] flex flex-col gap-5">
        <input
          type="text"
          placeholder="Name"
          class="bg-transparent border border-red-500 focus:border-red-600 rounded-md px-4 py-3 outline-none text-white placeholder-gray-400 transition-all duration-300"
        />
        <input
          type="email"
          placeholder="Email"
          class="bg-transparent border border-red-500 focus:border-red-600 rounded-md px-4 py-3 outline-none text-white placeholder-gray-400 transition-all duration-300"
        />
        <input
          type="text"
          placeholder="Phone Number"
          class="bg-transparent border border-red-500 focus:border-red-600 rounded-md px-4 py-3 outline-none text-white placeholder-gray-400 transition-all duration-300"
        />
        <input
          type="text"
          placeholder="Subject"
          class="bg-transparent border border-red-500 focus:border-red-600 rounded-md px-4 py-3 outline-none text-white placeholder-gray-400 transition-all duration-300"
        />
        <textarea
          rows="5"
          placeholder="Your Message"
          class="bg-transparent border border-red-500 focus:border-red-600 rounded-md px-4 py-3 outline-none text-white placeholder-gray-400 transition-all duration-300 resize-none"
        ></textarea>

        <button
          type="submit"
          class="mt-4 bg-red-500 hover:bg-red-600 text-white font-semibold py-3 rounded-md transition-all duration-300"
        >
          Send Message
        </button>
      </form>
    </section>
  </div>
</template>

<script setup>
import { ref } from 'vue'
const open = ref(false)
//
import { onMounted } from 'vue'
import Typed from 'typed.js'

onMounted(() => {
  new Typed('#typed', {
    strings: ["Hey I'm Mr.Nghia", "Hey I'm a Designer", "Hey I'm a master coder"], // các chuỗi chữ để gõ
    typeSpeed: 80, // tốc độ gõ
    backSpeed: 40, // tốc độ xóa
    backDelay: 1500, // tạm dừng trước khi đổi chữ
    loop: true, // lặp lại vô hạn
    showCursor: true, // hiển thị con trỏ
    showCursor: false,
  })
})
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
/* Hiệu ứng slide-in-right cho tiêu đề */
@keyframes slideInRight {
  from {
    transform: translateX(100px);
    opacity: 0;
  }
  to {
    transform: translateX(0);
    opacity: 1;
  }
}
.slide-in-right {
  animation: slideInRight 1s ease-out forwards;
}
/* Hiệu ứng slide-in-top cho tiêu đề phụ */
@keyframes slideInTop {
  from {
    transform: translateY(100px);
    opacity: 0;
  }
  to {
    transform: translateY(0);
    opacity: 1;
  }
}

.slide-in-top {
  animation: slideInTop 1s ease-out forwards;
}
/* Hiệu ứng slide-in-left cho ảnh banner */
@keyframes slideInLeft {
  from {
    transform: translateX(-100px);
    opacity: 0;
  }
  to {
    transform: translateX(0);
    opacity: 1;
  }
}
.slide-in-left {
  animation: slideInLeft 1s ease-out forwards;
}
</style>
