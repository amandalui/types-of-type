<template>
<div id="hangul-blocks-slides" class="content--first blue clear">
  <div class="column--single spacer--small">
    <div class="progress-dots-container">
      <div class="cf progress-dots">
        <div
          v-for="(index, slide) in slides"
          @click="goToSlide(index)"
          :class="{ active: slideNum === slide }"
          class="progress-dot pointer"
        >
        </div>
     </div>
    </div>
    <v-touch
      class="column--single center img--100 relative transition-opacity"
      @tap="nextSlide()"
      @swipe-right="nextSlide()"
      @swipe-left="prevSlide()"
    >
      <img
        v-for="slide in slides"
        :class="{ hidden: slideNum !== slide, 'absolute top-left': slide !== 0 }"
        :src="`/static/images/hangul-blocks/slide-${slide + 1}.svg`"
        alt="Hangul Blocks"
      >      
    </v-touch>
      <img src="/static/images/hangul-blocks/slide-translation.svg" alt="na noon han gook een ee a neeb nee da">
    <p class="spacer--small caps center text--blue h3-responsive">(I am not Korean)</p>
  </div>
</div>
</template>

<script>
  const SLIDE_DURATION = 2000

  export default {
    name: 'hangul-blocks-slides',
    data () {
      return {
        playNextTimeout: null,
        slideNum: 0,
        slides: [ ...Array(4).keys() ]
      }
    },
    methods: {
      nextSlide () {
        if (this.playNextTimeout) clearTimeout(this.playNextTimeout)
        this.slideNum = (this.slideNum + 1) % this.slides.length
        this.autoPlay()
      },
      prevSlide () {
        if (this.playNextTimeout) clearTimeout(this.playNextTimeout)
        this.slideNum = this.slideNum > 0 ? this.slideNum - 1 : this.slides.length - 1
        this.autoPlay()
      },
      goToSlide (slideNum) {
        if (this.slideNum === slideNum) return
        if (this.playNextTimeout) clearTimeout(this.playNextTimeout)
        this.slideNum = slideNum
        this.autoPlay()
      },
      autoPlay () {
        this.playNextTimeout = setTimeout(this.nextSlide, SLIDE_DURATION)
      }
    },
    created () {
      this.autoPlay()
    }
  }
</script>

<style scoped>
  .cf:before,
    .cf:after   { content: " "; display: table; }
    .cf:after   { clear: both; }
    .cf         { *zoom: 1; }

  .progress-dots-container {
    margin-bottom: 40px;
  }

  .progress-dots {
    float: right;
    position: relative;
    left: -50%;
  }

  .progress-dot {
    float: left;
    height: 10px;
    width: 10px;
    border-radius: 100%;
    background-color: #047272;
    position: relative;
    left: 50%;
    margin-right: 40px;

    transition: background-color 0.6s linear;
    -moz-transition: background-color 0.6s linear;    /* FF3.7+ */
    -o-transition: background-color 0.6s linear;      /* Opera 10.5 */
    -webkit-transition: background-color 0.6s linear; /* Saf3.2+, Chrome */
  }
  @media(max-width: 768px) {
  .progress-dot {
    height: 5px;
    width: 5px;
  }
  }

  .progress-dot:last-of-type {
    margin-right: 0px;
  }

  .progress-dot.active {
    background-color: white;
  }

  .relative {
    position: relative;
  }

  .absolute {
    position: absolute;
  }

  .top-left {
    top: 0;
    left: 0;
  }

  .hidden {
    opacity: 0;
  }

  .shown {
    opacity: 1;
  }

  .transition-opacity img {
    transition: 0.6s linear;
    -moz-transition: 0.6s linear;    /* FF3.7+ */
    -o-transition: 0.6s linear;      /* Opera 10.5 */
    -webkit-transition: 0.6s linear; /* Saf3.2+, Chrome */
  }
</style>
