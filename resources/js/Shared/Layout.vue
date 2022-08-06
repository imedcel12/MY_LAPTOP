<template>

    <nav class="navbar navbar-expand-lg navbar-light mt-3">
  <div class="container">
    <a class="navbar-brand" href="/" style="color:white"> LapLink </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
            <Link class="nav-link" :class="{'selected': $page.component == 'Home'}" href="/" style="color:white"> Home </Link>
        </li>
        <li class="nav-item">
            <Link class="nav-link" :class="{'selected': $page.component == 'MyLaptop'}" href="/laptop" style="color:white"> Laptops </Link>
        </li>
        <li class="nav-item">
            <Link class="nav-link" :class="{'selected': $page.component == 'AboutUs'}" href="/about_us" style="color:white"> About Us </Link>
        </li>
                <li class="nav-item">
            <Link class="nav-link" :class="{'selected': $page.component == 'ContactUs'}" href="/contact_us" style="color:white"> Contact Us </Link>
        </li>
      </ul>
    </div>
  </div>
</nav>

<section class="container mt-4 p-4 rounded-3 shadow my-5" style="min-height: 800px;">
    <slot />
</section>
    <footer class="text-center my-3 text-light">
    Copyright &copy; 2022. All rights reserved.
    </footer>
</template>

<script setup>
import {Link} from '@inertiajs/inertia-vue3'
</script>

<style scoped>
section {
    background-color: rgb(163, 127, 160);
    opacity: 0.6;
}
.selected {
    color: rgb(241, 233, 233);
    border-bottom: 1px solid #FA26A0;
    transition-duration: 1s;
}

</style>
