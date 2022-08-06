<template>
 <h1><strong> Home </strong></h1>
 <hr>
<main class="mt-5">
    <img src="/images/image2.jpg" alt="" />
  <p>
    <strong class="title"> <h1> LAPTOP </h1> <hr>
        With laptops functioning much like desktops despite their small size, purchasing a laptop for work, school or play seems like a no-brainer.
        Laptops afford you the best of both worlds with the maximum portability of a tablet or mini-notebook but larger memory size for all of your files, like a desktop.
        If you don't already own a laptop, consider the benefits of having a portable computer at your fingertips wherever you are and whenever you want.
    </strong>
</p>
</main>
</template>

<script setup>
import { ref } from 'vue'
import Layout from '../Shared/Layout.vue'
</script>

<script>
export default {
    layout: Layout
}
</script>

<style scoped>
main {
display: flex;
justify-content: space-between;
}
img {
width: 60%;
height: 610px;
border-radius: 5px;
}
p {
width: 40%;
padding: 5px;
background: rgb(54, 27, 46);
height: 610px;
border-radius: 5px;
margin-left: 5px;

}
.title {
font-size: 27px;
text-align: justify;
color: #f7f7f7;
}
</style>
