<template id="expressive-type-sub-section-template">
  <div class="column--half center spacer--small">
      <img :src="'/images/expressive-type/' + code + '.svg'" :alt="alt">
      <br />
      <span class="text--brown caption caps">Typeface</span>
      <br />
      <span class="caps bold">{{ name }}</span>
  </div>
</template>

<script>
  // TODO: Replace images with animations
  Vue.component('expressive-type-sub-section', {
    template: '#expressive-type-sub-section-template',
    props: {
      name: String,
      alt: String,
      code: String
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
