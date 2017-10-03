<template>
    <div
      ref="el"
      :class="className"
    >
      <div :class="`content-timeline ${milestone.color}`">
        <div class="caps bottom-br">
          <span class="serif">{{ milestone.year }}</span>
          <span class="bold">{{ milestone.title }}</span>
        </div>
        <br />
        <img :src="`/static/images/origins-of-type/${milestone.img}`" :alt="`${milestone.alt}`">
        <p class="caption serif">{{ milestone.caption }}</p>
      </div>
    </div>
</template>

<script>
  import { throttle } from 'lodash/fp'
  export default {
    name: 'milestone',
    props: {
      scrollBottom: Number,
      milestone: Object,
    },
    data () {
      return {
        offsetTop: null,
        hasActivated: false,
      }
    },
    mounted () {
      this.setOffsetTop = throttle(100, this.setOffsetTop)
      setTimeout(this.setOffsetTop, 500)
      window.addEventListener('resize', this.setOffsetTop)
    },
    destroyed () {
      window.removeEventListener('resize', this.setOffsetTop)
    },
    computed: {
      className: function () {
        return [
          'container-timeline',
          `${this.milestone.side}-timeline`,
          `slide-fade-enter${this.isActive() ? '-active' : `-${this.milestone.side}`}`,
        ]
      }
    },
    methods: {
      isActive () {
        if (this.hasActivated) return true
        if (typeof this.offsetTop !== 'number') return false
        if (typeof this.scrollBottom !== 'number') return false
        const isInView = this.offsetTop < this.scrollBottom
        if (isInView) this.hasActivated = true
        return isInView
      },
      setOffsetTop () {
        this.offsetTop = this.$refs.el.getBoundingClientRect().top + window.scrollY
      },
    },
  }
</script>

<style scoped>
  .slide-fade-enter-active {
    transition: all 1s ease;
  }
  .slide-fade-enter-right {
    transform: translateX(10px);
    opacity: 0;
  }
  .slide-fade-enter-left {
    transform: translateX(-10px);
    opacity: 0;
  }
</style>

