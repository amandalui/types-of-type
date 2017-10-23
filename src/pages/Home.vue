<template>
  <div>
    <div class="header-index center">
      <img src="/static/images/index/types-of-type-index-logo.svg">
    </div>

    <div class="intro-index-wrap center light spacer--medium">
      <div class="intro-index">
          <h3 class="caps">A guide to typography with character</h3>
          <p>Introducing the artform of typography  across two langauges, English and Korean.</p>
      </div>
          <p class="caps caption text--lightgray">(No Korean language knowledge needed)</p>
          <p class="spacer--tiny"></p>
      <p class="spacer--medium"><router-link class="button caps" to="/origins-of-type">Start Exploring</router-link></p>
    </div>
      
    <div class="dark">
        <div class="spacer--medium"></div>
        <h3 class="caps center text--light">Contents</h3>
        <div class="spacer--tiny"></div>
        <app-menu></app-menu>

        <div class="spacer--large clear"></div>
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
