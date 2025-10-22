<script setup>
  const emit = defineEmits(['close'])
</script>
<template>
  <div class="fixed inset-0  bg-opacity-50 flex justify-center items-center z-[200] "
    @click.self="emit('close')">
    <div class="absolute bg-[#f2fafb]/70 w-[420px] h-[460px] shadow-[0_0_35px_rgba(0,0,0,0.9)] rounded-lg flex flex-col justify-center items-center">
        <h1 class="text-center mt-[25px] font-bold text-2xl  text-[rgb(73,159,229)]">Hệ Thống học trực tuyến </h1>
        <!--  -->
        <div class="relative w-[350px] mt-[25px] border-b-2 pl-6">
          <input type="text" id="name" required 
            placeholder=" " class="peer pr-10 w-full h-[30px] bg-transparent outline-none">
          <label for="name" class="absolute left-5.5 top-[50%]
            transform -translate-y-1/2
            transition-all duration-500
            peer-focus:top-[-10px]
            peer-valid:top-[-10px]
            
                ">Name</label>
          <span class="absolute right-[8px]"><ion-icon name="person-outline"></ion-icon></span>
        </div>
        <!--  -->
        <div class="relative w-[350px] mt-[25px] border-b-2 pl-6">
          <input type="Password" required 
            placeholder=" "  class="peer w-full h-[30px] bg-transparent outline-none">
            <label for="" class="absolute left-5.5 top-[50%]
            transform -translate-y-1/2 
            transition-all duration-500 
            peer-focus:top-[-10px]
            peer-valid:top-[-10px]
            ">Password</label>
          <span class="absolute right-[8px]"><ion-icon name="eye-off-outline"></ion-icon></span>
        </div>
          <div class="flex justify-end space-x-2 mt-[40px]">
        <button @click="emit('close')" class="px-4 py-2 bg-gray-400 rounded-xl text-white rounded transition-transform duration-300 hover:bg-gray-500 hover:drop-shadow-[0_3px_4px_rgba(0,0,0,0.2)] hover:-translate-y-[5px]" >
          Hủy
        </button>
        <button class="px-4 py-2 rounded-xl bg-[#1797f9] text-white transition-transform duration-300 rounded hover:bg-[#0c7dd1] hover:-translate-y-[5px]
         hover:drop-shadow-[0_3px_4px_rgba(0,0,0,0.2)]">
          Đăng kí
        </button>
        </div>

    </div>
    

  </div>
</template>