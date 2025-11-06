import { createRouter, createWebHistory } from 'vue-router'

import Giaodien1 from '@/view/giaodien1.vue'
import Lotrinh from '@/view/Lotrinh.vue'
import baiviet from '@/view/baiviet.vue'
import FontEnd from '@/view/FontEnd.vue'
import BackEnd from '@/view/BackEnd.vue'
import introduce from '@/view/introduce.vue'
const routes = [
  { path: '/', name: 'Home', component: Giaodien1 },
  { path: '/lotrinh', name: 'Lotrinh', component: Lotrinh },
  { path: '/baiviet', name: 'baiviet', component: baiviet },
  { path: '/fontend', name: 'FontEnd', component: FontEnd },
  { path: '/backend', name: 'BackEnd', component: BackEnd },
  { path: '/introduce', name: 'introduce', component: introduce },
]

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes, // ✅ Truyền đúng biến routes vào đây

  // 👇 thêm đoạn này để mỗi lần chuyển trang thì cuộn lên đầu
  scrollBehavior(to, from, savedPosition) {
    // Nếu người dùng bấm nút quay lại (back), giữ nguyên vị trí cũ
    if (savedPosition) {
      return savedPosition
    } else {
      // Mặc định: cuộn lên đầu trang
      return { top: 0 }
    }
  },
})

export default router
