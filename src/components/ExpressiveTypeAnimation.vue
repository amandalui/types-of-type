<template>
  <div ref="bodymovin"></div>
</template>

<script>
  import bodymovin from 'bodymovin'

  export default {
    name: 'expressive-type-animation',
    props: {
      typeIndex: Number,
      lang: String,
      options: {
        type: Object,
        required: true
      },
      height: Number,
      width: Number,
      bus: Object
    },
    data () {
      return {
        isAnimating: true,
        index: 0,
        length: 6,
        style: {
          width: this.width ? `${this.width}px` : '100%',
          height: this.height ? `${this.height}px` : '100%',
          overflow: 'hidden',
          margin: '0 auto'
        }
      }
    },
    computed: {
      otherLang () {
        return this.lang === 'en' ? 'kr' : 'en'
      }
    },
    methods: {
      play () {
        if (this.isAnimating) return
        this.isAnimating = true
        this.anim.destroy()
        this.nextAnimation()
        this.anim.onComplete = () => {
          this.anim.destroy()
          this.nextAnimation()
          this.anim.onComplete = () => {
            this.isAnimating = false
            this.anim.onComplete = null
          }
        }
      },
      nextAnimation () {
        this.anim = bodymovin.loadAnimation({
          container: this.$refs.bodymovin,
          renderer: 'svg',
          loop: this.options.loop !== false,
          autoplay: this.options.autoplay !== false,
          animationData: this.options.animationData[this.index],
          rendererSettings: this.options.rendererSettings
        })
        this.anim.setSpeed(1.6)
        this.index = (this.index + 1) % this.length
      }
    },
    mounted () {
      this.nextAnimation()
      this.anim.onComplete = () => {
        this.isAnimating = false
      }
    },
    created () {
      this.bus.$on(`${this.typeIndex}`, () => {
        this.play()
      })
    }

  }
</script>
