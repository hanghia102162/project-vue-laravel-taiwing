<script setup>
import Footer from '../components/Footer.vue'
import Header from '../components/header.vue'
import FontEnd from './view/FontEnd.vue'
import Introduce from './view/introduce.vue'
import { useRoute } from 'vue-router' // 🟢 Thêm dòng này
const route = useRoute()
</script>
<template>
  <div>
    <Header v-if="route.path !== '/introduce'" />
    <RouterView />
    <!-- <Introduce /> -->
    <Footer v-if="route.path !== '/introduce'" />
  </div>
</template>

<style scoped></style>
