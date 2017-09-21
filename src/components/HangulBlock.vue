<template>
  <div
    class="column--one-third-static center img--140px"
    @click="startAnimation()"
  >
    <img
      alt="hangul block"
      class="block-pa pointer"
      :src="`/static/images/hangul-blocks/${blockName}-${currentFrame}.svg`"
    />
  </div>
</template>

<script>
  const FRAME_DURATION = 400

  function updateFrame () {
    if (this.currentFrame === this.numFrames - 1) {
      this.currentFrame = 0
      this.isAnimating = false
      return
    }
    this.currentFrame += 1
    setTimeout(updateFrame.bind(this), FRAME_DURATION)
  }

  export default {
    name: 'hangul-block',
    props: {
      blockName: String,
      numFrames: Number
    },
    data () {
      return {
        isAnimating: false,
        currentFrame: 0,
        frames: [ ...Array(this.numFrames).keys() ]
      }
    },
    methods: {
      startAnimation () {
        if (this.isAnimating) return
        this.isAnimating = true
        updateFrame.call(this)
      }
    }
  }
</script>
