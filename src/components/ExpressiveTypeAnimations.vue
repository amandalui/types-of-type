<template>
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
</template>

<script>
  import ExpressiveTypeSection from './ExpressiveTypeSection'
  
  export default {
    name: 'expressive-type-animations',
    data () {
      return {
        animations: [{
          texts: ['playground', 'sunflower', 'friendly'],
          name: 'Playground',
          en: {
            name: 'Sofia Soft'
          },
          kr: {
            name: 'BM Jua'
          }
        },
        {
          // en broken
          texts: ['dearfriend', 'handwriting', 'thankyou'],
          name: 'Dear Friend',
          en: {
            name: 'Kinescope'
          },
          kr: {
            name: 'Pocheon Makgeoli'
          }
        },
        {
          texts: ['volcano', 'ukulele', 'pineapple'],
          name: 'Volcano',
          en: {
            name: 'Freckle Face'
          },
          kr: {
            name: 'Jeju Hallasan'
          }
        },
        {
          texts: ['environmental', 'trees', 'sustainable'],
          name: 'Environmental',
          en: {
            name: 'Amatic'
          },
          kr: {
            name: 'Sangsangtokki Blossom'
          }
        },
        {
          texts: ['seventies', 'disco', 'bellbottoms'],
          name: 'Seventies',
          en: {
            name: 'Grad'
          },
          kr: {
            name: 'Bom Param'
          }
        },
        {
          // all broken
          texts: ['historical', 'medieval', 'joseon'],
          name: 'Historical',
          en: {
            name: 'Givry'
          },
          kr: {
            name: 'N/A'
          }
        }]
      }
    },
    components: {
      ExpressiveTypeSection
    }
  }
</script>
