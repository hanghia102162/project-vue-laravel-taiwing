import { createApp } from 'vue'
import { createPinia } from 'pinia'

import App from './App.vue'
import router from './router'
import '../assets/main.css'
import AOS from 'aos'
import 'aos/dist/aos.css'
const app = createApp(App)

app.use(createPinia())
app.use(router)

app.mount('#app')

AOS.init({
  offset: 100, // bắt đầu khi phần tử cách đáy viewport 100px
  duration: 800, // hiệu ứng mượt trong 0.8s
  easing: 'ease-in-out', // hiệu ứng chuyển động êm
  delay: 100, // trễ nhẹ để tạo nhịp
  once: false, // chạy lại khi cuộn lên
})
