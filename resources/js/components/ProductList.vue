<template>
    <section id="products" class="py-5">
      <div class="container">
        <div class="d-flex align-items-center justify-content-between mb-4">
          <h2 class="mb-0 fw-bold">Our Products</h2>
          <form class="d-none d-md-flex" role="search" @submit.prevent>
            <input v-model="search" class="form-control" type="search" placeholder="Search products...">
          </form>
        </div>
  
        <div class="row g-4">
          <ProductCard v-for="(p, i) in filteredProducts" :key="i" :product="p" />
        </div>
      </div>
    </section>
  </template>
  
  <script>
  import ProductCard from "./ProductCard.vue";
  
  export default {
    name: "ProductList",
    components: { ProductCard },
    data() {
      return {
        search: "",
        products: [
          { name: "Classic Sneakers", price: 49.99, img: "https://picsum.photos/seed/s1/600/400" },
          { name: "Leather Backpack", price: 89.0, img: "https://picsum.photos/seed/s2/600/400" },
          { name: "Smart Watch", price: 129.99, img: "https://picsum.photos/seed/s3/600/400" },
          { name: "Wireless Earbuds", price: 39.99, img: "https://picsum.photos/seed/s4/600/400" },
          { name: "Sunglasses", price: 24.5, img: "https://picsum.photos/seed/s5/600/400" },
          { name: "T-Shirt", price: 14.99, img: "https://picsum.photos/seed/s6/600/400" },
          { name: "Gaming Mouse", price: 29.99, img: "https://picsum.photos/seed/s7/600/400" },
          { name: "Portable Speaker", price: 59.0, img: "https://picsum.photos/seed/s8/600/400" },
        ],
      };
    },
    computed: {
      filteredProducts() {
        return this.products.filter((p) =>
          p.name.toLowerCase().includes(this.search.toLowerCase())
        );
      },
    },
  };
  </script>
  