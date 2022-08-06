<template>
    <h1><strong> My Laptops </strong></h1><hr>

    <div class="d-flex justify-content-between mt-5">
        <div class="card mb-3" v-for="laptop in laptops" :key="laptop.id">
            <div class="card-header bg-info text-dark text-center">
                <h2><strong>{{ laptop.brand }}</strong></h2>
                <h4><strong> Series: {{laptop.series}} </strong></h4>
            </div>
            <div class="card-body" style="background-color: pink;">
                <h3><strong>SPECS</strong> </h3>
                <ul v-for="laptop_detail in laptop.laptops_details" :key="laptop_detail.id">
                       <h5><strong>
                        <li>Description: {{ laptop_detail.description }}</li>
                       <li>Class: {{ laptop_detail.class }}</li>
                       <li>Processor: {{ laptop_detail.processor }}</li>
                       <li>Speed: {{ laptop_detail.speed }}</li>
                       <li>Screen Size: {{ laptop_detail.speed }}</li>
                       <li>Color: {{ laptop_detail.speed }}</li>
                       <li>Hard Disk Size: {{ laptop_detail.speed }}</li>
                       <li>CPU Model: {{ laptop_detail.speed }}</li>
                       <li>RAM Memory: {{ laptop_detail.speed }}</li>
                       <li>Operating System: {{ laptop_detail.speed }}</li>
                       <li>Card Description: {{ laptop_detail.speed }}</li>
                       <li>Graphics Copreocessor: {{ laptop_detail.speed }}</li>
                       </strong>
                       </h5>
                </ul>
            </div>
        </div>
    </div>
</template>

<script setup>
import Layout from '../Shared/Layout.vue'
</script>

<script>
export default {
    layout: Layout,
    props: {
        laptops: Array
    }
}
</script>


<style scoped>
.card {
    width: 380px;
    height: 630px;
}
</style>
