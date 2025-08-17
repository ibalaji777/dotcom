<template>
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
      <div class="card h-100 shadow-soft">
        <img :src="product.img" class="card-img-top" :alt="product.name">
        <div class="card-body d-flex flex-column text-center">
          <h5 class="card-title">{{ product.name }}</h5>
          <p class="text-muted mb-3">${{ product.price.toFixed(2) }}</p>
          <a href="#" class="btn btn-primary mt-auto w-100">Add to Cart</a>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    name: "ProductCard",
    props: {
      product: {
        type: Object,
        required: true,
      },
    },
  };
  </script>
  