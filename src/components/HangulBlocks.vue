<template>
  <div class="column--single text--blue" id="hangul-blocks">
    <hangul-block
      v-for="block in blocks"
      :key="block.name"
      :block-name="block.name"
      :num-frames="block.numFrames"
    >
    </hangul-block>
  </div>
</template>

<script>
  import HangulBlock from './HangulBlock'

  const blocks = [
    { name: 'pa', numFrames: 5 },
    { name: 'hwa', numFrames: 6 },
    { name: 'pal', numFrames: 6 },
    { name: 'so', numFrames: 5 },
    { name: 'son', numFrames: 6 },
    { name: 'won', numFrames: 7 }
  ]

  export default {
    name: 'hangul-blocks',
    data () { return { blocks } },
    components: {
      HangulBlock
    }
  }
</script>
