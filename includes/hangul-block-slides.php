<style>
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

<div id="hangul-block-slides" class="content--first blue clear">
  <div class="column--single spacer--small">
    <div
      class="column--single center img--100 relative transition-opacity"
      @click="nextSlide()"
    >
      <img
        v-for="slide in slides"
        :class="{ hidden: slideNum !== slide, 'absolute top-left': slide !== 0 }"
        :src="`images/hangul-blocks/slide-${slide + 1}.svg`"
        alt="Hangul Blocks"
      >
    </div>
      <img src="./images/hangul-blocks/slide-translation.svg" alt="na noon han gook een ee a neeb nee da">
    <h3 class="spacer--small caps center text--blue">(I am not Korean)</h3>
  </div>
</div>

<script>
  new Vue({
    el: '#hangul-block-slides',
    data: {
      slideNum: 0,
      slides: [ ...Array(4).keys() ]
    },
    methods: {
      nextSlide() {
        this.slideNum = (this.slideNum + 1) % this.slides.length
      }
    }
  }) 
</script>
