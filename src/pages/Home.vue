<template>
  <div>
    
    <div class="hero--wrap">
      <div class="hero--left">
        <img src="/static/images/index/types-of-type-index-logo.svg">
      </div>
      <div class="hero--right">
        <p class="hero--text">A guide to typography that compares English and Korean typeforms.</p>
        <!-- <p class="caption">(No Korean language knowledge needed)</p> -->
        <div class="spacer--small"></div>
        <p>
          <router-link class="button caps" to="/origins-of-type">Start Exploring &rarr;</router-link>
        </p>
      </div>
    </div>

    <div class="dark">
        <div class="spacer--medium"></div>
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
