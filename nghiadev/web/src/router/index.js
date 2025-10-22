import { createRouter, createWebHistory } from 'vue-router'

import Giaodien1 from '@/view/giaodien1.vue'
import Lotrinh from '@/view/Lotrinh.vue'

const routes = [
  { path: '/', name: 'Home', component: Giaodien1 },
  { path: '/lotrinh', name: 'Lotrinh', component: Lotrinh }
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
  }
})

export default router
