<template>
    <h1><strong> Contact Us </strong></h1> <hr>

<div class="container mt-5">
  <img src="/images/dell.jpg" alt="" style="width:100%;">
  <div class="centered">
    <h2 class="mt-2"> <strong>LAPLINK</strong> </h2> <hr>
    <h4> LapLink-BOHOL CENTER <br>
        Tagbilaran City, Philippines <br>
        Website: www.laplinkbohol.com <br>
        Mobile No: 09975674927 <br>
        Facebook: laplinkbohol <br>
        Instagram: @laplinkbohol <br>
        Twitter: @laplinkbohol <br>
</h4>
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

<style>
.container {
  position: relative;
}
img {
width: 60%;
height: 610px;
border-radius: 5px;
}
.centered {
  position: absolute;
  top: 30%;
  left:75%;
  transform: translate(-50%, -50%);
  background-color:  #f7f7f7;
  color: rgb(54, 27, 46);
  padding: 10px;
  border-radius: 5px;
}
</style>
