<template>
  <div>
    <div class="header-index center">
      <img src="../images/index/types-of-type-index-logo.svg">
    </div>

    <div class="intro-index-wrap center light">
      <div class="intro-index">
          <h3 class="caps">A guide to typography with character</h3>
          <p>Compare Korean and English for a new perspective on type.</p>
      </div>
      <br />
      <p><router-link class="button caps" to="/origins-of-type">Let's get to it</router-link></p>
      <br />
      <div class="spacer--small"></div>
      <p class="caps caption">
        <img src="../images/index/a-to-z.png"><br />No Korean language knowledge needed.</p>
    </div>
      
    <div class="dark">
        <div class="spacer--medium"></div>
        <h3 class="caps center text--light">Contents</h3>
        <div class="spacer--tiny"></div>
        <app-menu></app-menu>

        <div class="spacer--medium clear"></div>
    </div>
  </div>
</template>
    
<script>
import AppMenu from '@/components/AppMenu'

export default {
  name: 'home',
  data () {
    return {}
  },
  components: {
    AppMenu
  }
}
</script>
