<template id="hangul-block">
  <div
    class="column--one-third-static center img--140px"
    @click="startAnimation()"
  >
    <img
      alt="p-a"
      class="block-pa pointer"
      :src="`images/hangul-blocks/${blockName}-${currentFrame}.svg`"
    />
  </div>
</template>

<div class="column--single text--blue" id="hangul-blocks">
  <hangul-block
    v-for="block in blocks"
    :key="block.name"
    :block-name="block.name"
    :num-frames="block.numFrames"
  >
  </hangul-block>
</div>

<script>
  const FRAME_DURATION = 400

  const BLOCKS = [
    { name: 'pa', numFrames: 5 },
    { name: 'hwa', numFrames: 6 },
    { name: 'pal', numFrames: 6 },
    { name: 'so', numFrames: 5 },
    { name: 'son', numFrames: 6 },
    { name: 'won', numFrames: 7 }
  ]

  function updateFrame() {
    if (this.currentFrame === this.numFrames - 1) {
      this.currentFrame = 0
      this.isAnimating = false
      return
    }
    this.currentFrame += 1
    setTimeout(updateFrame.bind(this), FRAME_DURATION)
  }

  Vue.component('hangul-block', {
    template: '#hangul-block',
    props: {
      blockName: String,
      numFrames: Number
    },
    data: function() {
      return {
        isAnimating: false,
        currentFrame: 0,
        frames: [ ...Array(this.numFrames).keys() ]
      }
    },
    methods: {
      startAnimation() {
        if (this.isAnimating) return
        this.isAnimating = true
        updateFrame.call(this)
      }
    }
  })

  new Vue({ el: '#hangul-blocks', data: { blocks: BLOCKS } })
</script>
