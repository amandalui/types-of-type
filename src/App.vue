<template>
  <div>
    <app-header></app-header>
    <transition :name="transitionName">
      <router-view></router-view>
    </transition>
    <app-footer></app-footer>
  </div>
</template>

<style scoped>
/*jj
  .fade-enter-active, .fade-leave-active {
    transition: opacity 0.5s;
  }

  .fade-enter, .fade-leave-to {
    opacity: 0;
  }
  */

.slide-right-leave-active, .slide-right-enter-active,
.slide-left-leave-active, .slide-left-enter-active {
  transition: 0.5s;
  width: 100%;
  position: absolute;
  top: 0;
}

.slide-right-enter, .slide-left-leave-to {
  transform: translate(100%, 0);
}

.slide-right-leave-to, .slide-left-enter {
  transform: translate(-100%, 0);
}

</style>

<script>
import AppHeader from '@/components/AppHeader'
import AppFooter from '@/components/AppFooter'

const routeOrder = ['/', '/origins-of-type', '/hangul-blocks', '/letter-form-anatomy', '/type-categories', '/italics-dashes', '/emoticons-text', '/expressive-type', '/about']

export default {
  name: 'app',
  components: {
    AppHeader,
    AppFooter
  },
  data () {
    return {
      transitionName: ''
    }
  },
  watch: {
    '$route' (to, from) {
      const toRight = routeOrder.indexOf(from.path) < routeOrder.indexOf(to.path)
      this.transitionName = toRight ? 'slide-right' : 'slide-left'
    }
  }
}
</script>

<style>
</style>
