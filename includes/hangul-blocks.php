<style>
  .shown { display: block; }
  .hidden { display: none; }
</style>

<template id="hangul-block">
  <div class="column--one-third-static center img--140px" @click="startAnimation()">
    <div v-for="frame in frames" class="block-pa" :class="currentFrame === frame ? 'shown' : 'hidden'">
      <img :src="'images/hangul-blocks/' + blockName + '-' + frame + '.svg'" alt="p-a"></img>
    </div>
  </div>
</template>

<div class="column--single text--blue" id="hangul-blocks">
  <hangul-block v-for="block in blocks" :block-name="block.name" :num-frames="block.numFrames"></hangul-block>
</div>

<script>
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
        console.log('Starting animation')
        if (this.isAnimating) {
          return
        }
        this.isAnimating = true
        const updateFrame = () => {
          if (this.currentFrame === this.numFrames - 1) {
            this.currentFrame = 0
            this.isAnimating = false
            return
          }
          this.currentFrame += 1
          setTimeout(updateFrame, 400)
        }
        updateFrame()
      }
    }
  })

  new Vue({
    el: '#hangul-blocks',
    data: {
      blocks: [
        { name: 'pa', numFrames: 5 },
        { name: 'hwa', numFrames: 6 },
        { name: 'pal', numFrames: 6 },
        { name: 'so', numFrames: 5 },
        { name: 'son', numFrames: 6 },
        { name: 'won', numFrames: 7 }
      ]
    }
  })
</script>
