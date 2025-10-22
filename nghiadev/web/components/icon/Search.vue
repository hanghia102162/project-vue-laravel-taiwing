<script>
document.addEventListener('DOMContentLoaded', function () {
  const button = document.querySelector('.btn')
  const search = document.querySelector('.search')
  const input = document.querySelector('.input')

  button.addEventListener('click', () => {
    search.classList.toggle('active')
    input.value = '' // Đúng thuộc tính
  })
})
//
</script>
<template>
  <div class="header-top-between">
    <div class="search">
      <button class="btn">
        <ion-icon name="search-circle-outline" class="icon"></ion-icon>
      </button>
      <input type="text" class="input" placeholder="Tìm kiếm khóa học ,bài viết ,video..." />
    </div>
  </div>
</template>
<style scoped></style>
<style>
.header-top-between .search {
  position: relative;
  height: 50px;
  pointer-events: auto;
}
.header-top-between .input {
  border-radius: 18px;
  border: 0px;
  background-color: #fff;
  font-size: 18px;
  padding: 15px;
  height: 50px;
  width: 50px;
  transition: 0.5s ease;
}
.header-top-between .btn {
  background-color: #fff;
  border-radius: 18px;
  display: flex;
  justify-content: center;
  align-items: center;
  border: 0;
  height: 50px;
  width: 50px;
  position: absolute;
  top: 0;
  left: 0;
  font-size: 24px;
  cursor: pointer;
}
.search.active .input {
  width: 350px;
  padding-left: 55px;
}
.btn:focus,
.input:focus {
  outline: none;
}
.icon {
  transition: 0.7s;
}
</style>
