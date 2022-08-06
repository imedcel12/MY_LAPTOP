<template>
    <h1><strong> About Us </strong></h1> <hr>

<div class="container mt-5">
  <img src="/images/key.jpg" alt="" style="width:100%;">
  <div class="content">
    <h1><strong> LapLink </strong></h1> <hr>
    <h3>
        <p>Laplink is your go-to store for all things tech. We're here to help you find the gadgets you need for your lifestyle.</p>
    </h3>
  </div>
</div>
</template>

<script setup>
import {ref} from 'vue'
import Layout from '../Shared/Layout.vue'
</script>

<script>
export default {
    layout: Layout,
}
</script>

<style scoped>
.container {
  position: relative;
}
img {
width: 60%;
height: 610px;
border-radius: 5px;
}
.container .content {
  position: absolute;
  bottom: 50%;
  background: rgb(54, 27, 46);
  background: rgb(54, 27, 46);
  color: #f7f7f7;
  width: 98%;
  padding: 20px;
}
</style>
