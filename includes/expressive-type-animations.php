<script>
  animationData = {}
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
  <div class="pointer" @click="play" ref="bodymovin"></div>
</template>

<script>
  Vue.component('bodymovin', {
    template: '#bodymovin-template',
    props: {
      options: {
        type: Object,
        required: true
      },
      height: Number,
      width: Number,
    },
    data () {
      return {
        style: {
          width: this.width ? `${this.width}px` : '100%',
          height: this.height ? `${this.height}px` : '100%',
          overflow: 'hidden',
          margin: '0 auto'
        }
      }
    },
    methods: {
      play() {
        this.anim.goToAndPlay(0)
      }
    },
    mounted () {
      this.anim = bodymovin.loadAnimation({
          container: this.$refs.bodymovin,
          renderer: 'svg',
          loop: this.options.loop !== false,
          autoplay: this.options.autoplay !== false,
          animationData: this.options.animationData,
          rendererSettings: this.options.rendererSettings
        }
      );
      this.$emit('animCreated', this.anim)
    }
  })
</script>

<!--
-->

<template id="expressive-type-sub-section-template">
  <div class="column--half center spacer--small"> 
      <bodymovin v-if="hasAnimationData" :options="{ loop: false, animationData: animationData }"></bodymovin>
      <img v-if="!hasAnimationData" :src="'/images/expressive-type/' + code + '.svg'" :alt="alt">
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
      code: String
    },
    computed: {
      hasAnimationData() {
        return !!animationData[this.code + '-in']
      },
      animationData() {
        return animationData[this.code + '-in']
      }
    }
  })  
</script>

<template id="expressive-type-section-template">
  <div class="spacer--small">
      <div class="expressive-wrapper spacer--medium">
        <expressive-type-sub-section :name="en.name" :alt="name" :code="'en-' + code">
        </expressive-type-sub-section>
        <expressive-type-sub-section :name="kr.name" :alt="name" :code="'kr-' + code">
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
      code: String,
      en: Object,
      kr: Object,
			isLast: Boolean
    }
  })
</script>

<div id="expressive-type-app">
  <div class="content--first lightpink text--darkgreen clear">
      <div class="column--single img--100">
          <div class="column--single">
              <expressive-type-section
                v-for="(animation, key, index) in animations"
                :name="animation.name"
                :en="animation.en"
                :kr="animation.kr"
                :key="key"
                :code="key"
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
      animations: {
        playground: {
          name: 'Playground',
          en: {
            name: 'Sofia Soft',
          },
          kr: {
            name: 'BM Jua',
          }
        },
        dearfriend: {
          name: 'Dear Friend',
          en: {
            name: 'Kinescope',
          },
          kr: {
            name: 'Pocheon Makgeoli',
          }
        },
        volcano: {
          name: 'Volcano',
          en: {
            name: 'Freckle Face',
          },
          kr: {
            name: 'Jeju Hallasan',
          }
        },
        environmental: {
          name: 'Environmental',
          en: {
            name: 'Amatic',
          },
          kr: {
            name: 'Sangsangtokki Blossom'
          }
        },
        seventies: {
          name: 'Seventies',
          en: {
            name: 'Grad',
          },
          kr: {
            name: 'Bom Param'
          }
        },
        historical: {
          name: 'Historical',
          en: {
            name: 'Givry',
          },
          kr: {
            name: 'N/A'
          }
        }
      }
    },
  })
</script>
