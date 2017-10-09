<template>
  <div class="column--half-et center spacer--small"> 
      <expressive-type-animation
        v-if="hasAnimationData"
        :bus="bus"
        :options="{ loop: false, animationData }"
        :type-index="typeIndex"
        :lang="lang"
        :blurring="blurring"
      >
      </expressive-type-animation>
      <img
        v-if="!hasAnimationData"
        :src="`/static/images/expressive-type/${code}.svg`"
        :alt="alt"
      >
      <br />
      <span class="text--brown caption caps">Typeface</span>
      <br />
      <span class="caps bold">{{ name }}</span>
  </div>
</template>

<script>
  import ExpressiveTypeAnimation from './ExpressiveTypeAnimation'
  import * as animationData from '@/animations/expressive-type'

  export default {
    name: 'expressive-type-sub-section',
    props: {
      name: String,
      blurring: Boolean,
      alt: String,
      lang: String,
      texts: Array,
      typeIndex: Number,
      bus: Object
    },
    computed: {
      hasAnimationData () {
        return !!animationData[`${this.code}_in`]
      },
      animationData () {
        return [].concat(...this.texts.map(text =>
          [
            animationData[`${this.lang}_${text}_in`],
            animationData[`${this.lang}_${text}_out`]
          ]
        ))
      },
      code () {
        return `${this.lang}_${this.texts[0]}`
      }
    },
    components: {
      ExpressiveTypeAnimation
    }
  }
</script>
