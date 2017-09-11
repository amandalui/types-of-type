<script>
  animationData = {}
  bus = new Vue()
</script>
<script src="animations/expressive-type/en-playground-in.js"></script>
<script src="animations/expressive-type/en-playground-out.js"></script>
<script src="animations/expressive-type/kr-playground-in.js"></script>
<script src="animations/expressive-type/kr-playground-out.js"></script>
<script src="animations/expressive-type/en-sunflower-in.js"></script>
<script src="animations/expressive-type/en-sunflower-out.js"></script>
<script src="animations/expressive-type/kr-sunflower-in.js"></script>
<script src="animations/expressive-type/kr-sunflower-out.js"></script>
<script src="animations/expressive-type/en-friendly-in.js"></script>
<script src="animations/expressive-type/en-friendly-out.js"></script>
<script src="animations/expressive-type/kr-friendly-out.js"></script>
<script src="animations/expressive-type/kr-friendly-in.js"></script>

<template id="bodymovin-template">
  <div @click="play" class="pointer" ref="bodymovin"></div>
</template>

<script>
  Vue.component('bodymovin', {
    template: '#bodymovin-template',
    props: {
      typeIndex: Number,
      lang: String,
      options: {
        type: Object,
        required: true
      },
      height: Number,
      width: Number,
    },
    data () {
      return {
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
      otherLang() {
        return this.lang === 'en' ? 'kr' : 'en'
      }
    },
    methods: {
      play(emit = true) {
        if (emit) {
          bus.$emit(`play-animation-${this.typeIndex}-${this.otherLang}`)
        }
        this.anim.destroy()
        this.nextAnimation()
        this.anim.onComplete = () => {
          this.anim.destroy()
          this.nextAnimation()
          this.anim.onComplete = null
        }
      },
      nextAnimation() {
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
      },
    },
    mounted () {
      this.nextAnimation()
    },
    created() {
      bus.$on(`play-animation-${this.typeIndex}-${this.lang}`, () => {
        this.play(false)
      })
    }
  })
</script>

<template id="expressive-type-sub-section-template">
  <div class="column--half center spacer--small"> 
      <bodymovin 
        v-if="hasAnimationData"
        :options="{ loop: false, animationData }"
        :type-index="typeIndex"
        :lang="lang"
      >
      </bodymovin>
      <img
        v-if="!hasAnimationData"
        :src="'/images/expressive-type/' + code + '.svg'"
        :alt="alt"
      >
      <br />
      <span class="text--brown caption caps">Typeface</span>
      <br />
      <span class="caps bold">{{ name }}</span>
  </div>
</template>

<script>
  Vue.component('expressive-type-sub-section', {
    template: '#expressive-type-sub-section-template',
    props: {
      name: String,
      alt: String,
      lang: String,
      texts: Array,
      typeIndex: Number
    },
    computed: {
      hasAnimationData() {
        return !!animationData[`${this.code}-in`]
      },
      animationData() {
        return [].concat(...this.texts.map(text =>
          [
            animationData[`${this.lang}-${text}-in`],
            animationData[`${this.lang}-${text}-out`]
          ]
        ))
      },
      code() {
        return `${this.lang}-${this.texts[0]}`
      }
    }
  })  
</script>

<template id="expressive-type-section-template">
  <div class="spacer--small">
      <div class="expressive-wrapper spacer--medium">
        <expressive-type-sub-section
          :name="kr.name"
          :alt="name"
          :lang="'kr'"
          :texts="texts"
          :type-index="typeIndex"
        >
        </expressive-type-sub-section>
        <expressive-type-sub-section
          :name="en.name"
          :alt="name"
          :lang="'en'"
          :texts="texts"
          :type-index="typeIndex"
        >
        </expressive-type-sub-section>
      </div>
      <div class="clear" :class="!isLast && 'rule spacer--medium'"></div>
  </div>
</template>

<script>
  Vue.component('expressive-type-section', {
    template: '#expressive-type-section-template',
    props: {
      name: String,
      en: Object,
      kr: Object,
      texts: Array,
      typeIndex: Number,
			isLast: Boolean
    }
  })
</script>

<div id="expressive-type-app">
  <div class="content--first lightpink text--darkgreen clear">
      <div class="column--single img--100">
          <div class="column--single">
              <expressive-type-section
                v-for="(animation, index) in animations"
                :name="animation.name"
                :en="animation.en"
                :kr="animation.kr"
                :key="index"
                :type-index="index"
                :texts="animation.texts"
								:is-last="index === Object.keys(animations).length - 1"
              >
              </expressive-type-section>
              <div class="spacer--small clear"></div>
          </div>
      </div>
  </div>
</div>

<script>
  new Vue({
    el: '#expressive-type-app',
    data: {
      animations: [{
        texts: ['playground', 'sunflower', 'friendly'],
          name: 'Playground',
          en: {
            name: 'Sofia Soft',
          },
          kr: {
            name: 'BM Jua',
          }
        },
        {
          texts: ['dearfriend'],
          name: 'Dear Friend',
          en: {
            name: 'Kinescope',
          },
          kr: {
            name: 'Pocheon Makgeoli',
          }
        },
        {
          texts: ['volcano'],
          name: 'Volcano',
          en: {
            name: 'Freckle Face',
          },
          kr: {
            name: 'Jeju Hallasan',
          }
        },
        {
          texts: ['environmental'],
          name: 'Environmental',
          en: {
            name: 'Amatic',
          },
          kr: {
            name: 'Sangsangtokki Blossom'
          }
        },
        {
          texts: ['seventies'],
          name: 'Seventies',
          en: {
            name: 'Grad',
          },
          kr: {
            name: 'Bom Param'
          }
        },
        {
          texts: ['historical'],
          name: 'Historical',
          en: {
            name: 'Givry',
          },
          kr: {
            name: 'N/A'
          }
        }
      ]
    },
  })
</script>
