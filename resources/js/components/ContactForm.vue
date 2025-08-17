<template>
    <section id="contact" class="bg-white py-5">
      <div class="container">
        <h2 class="text-center fw-bold mb-4">Contact Us</h2>
        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-6">
            <form @submit.prevent="submitForm">
              <div class="mb-3">
                <label class="form-label">Your Name</label>
                <input type="text" class="form-control" v-model="form.name" placeholder="John Doe">
              </div>
              <div class="mb-3">
                <label class="form-label">Your Email</label>
                <input type="email" class="form-control" v-model="form.email" placeholder="you@example.com">
              </div>
              <div class="mb-3">
                <label class="form-label">Message</label>
                <textarea class="form-control" v-model="form.message" rows="4" placeholder="How can we help?"></textarea>
              </div>
              <button type="submit" class="btn btn-primary w-100">Send</button>
            </form>
          </div>
        </div>
      </div>
    </section>
  </template>
  
  <script>
  export default {
    name: "ContactForm",
    data() {
      return {
        form: {
          name: "",
          email: "",
          message: "",
        },
      };
    },
    methods: {
      submitForm() {
        alert(`Thanks, ${this.form.name}! We’ll contact you at ${this.form.email}.`);
      },
    },
  };
  </script>
  