<template>

  <div>

    <nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation">
      <div class="navbar-brand">
        <a class="navbar-item" v-scroll-to="'#home'">
          <i class="fa fa-cutlery" aria-hidden="true"></i>
        </a>
        <div class="navbar-burger" @click="toggleMenu" :class="{ 'is-active' : isActive }">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="navbar-menu is-transparent" :class="{ 'is-active' : isActive }">
        <a class="navbar-item" v-scroll-to="'#events'">
          Events
        </a>
        <a class="navbar-item" v-scroll-to="'#about'">
          About
        </a>
        <a class="navbar-item" v-scroll-to="'#testimonials'">
          Testimonials
        </a>
        <a class="navbar-item" v-scroll-to="'#contact'">
          Contact
        </a>
      </div>
    </nav>

    <section class="hero is-home is-fullheight" id="home">
    <div class="hero-body">
      <div class="container">
      <slot name="home"></slot>
    </div>
    </div>
    <nav class="level">
    <div class="level-item has-text-centered">
    <i class="fa fa-chevron-circle-down fa-5x is-inverted" aria-hidden="true" style="color:rgb(149, 64, 79);" v-scroll-to="'#events'"></i>
    </div>
    </nav>
    </section>

    <section class="hero is-events is-fullheight" id="events">
      <div class="hero-body">
        <div class="container">

      <slot name="events"></slot>

    </div>
      </div>
    </section>

    <section class="hero is-about is-fullheight" id="about">
        <div class="hero-body">
          <div class="container">

      <slot name="about"></slot>

          </div>
        </div>
    </section>

    <section class="hero is-testimonials is-fullheight" id="testimonials">
      <div class="hero-body">
        <div class="container">

      <slot name="testimonials"></slot>

        </div>
      </div>
    </section>

    <section class="hero is-contact is-fullheight" id="contact">
      <div class="hero-body">
        <div class="container">

      <slot name="contact"></slot>

        </div>
      </div>
    </section>

    <section class="hero is-landingfooter">
  <div class="hero-body">
    <div class="container">

      <slot name="footer"></slot>

    </div>
  </div>
</section>

  </div>

</template>

<script>

export default {

  data: function () {
    return {
      isActive: false,
    }
  },

  methods: {

    toggleMenu: function() {
      this.isActive = !this.isActive;
    },

  }
}
</script>
