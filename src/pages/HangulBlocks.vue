<template>
  <div class="dark">
    <!-- HEADER -->
    <div class="header-wrap clear">
      <div class="header-container">
          <div class="header-section-title caps rotate">
            The Basics
          </div>
          <div class="header-content">
              <span class="header-section-number">1&ndash;2</span>
              <h1>Hangul Blocks</h1>
              <p class="header-section-desc">Making words is like playing Tetris&mdash;from the start Korean letters were created modularly.</p>
          </div>
      </div>
    </div>
      
    <!-- SIDE NAV -->
    <div class="side-nav side-nav-left center">
        <div class="rotate">
            <router-link to="/origins-of-type">&#9650;<br />Origins of Type</router-link>
        </div>
    </div>
    <div class="side-nav side-nav-right center">
        <div class="rotate">
            <router-link to="/letter-form-anatomy">Letter-form Anatomy<br />&#9660;</router-link>
        </div>
    </div>

    <!-- CONTENT -->
    <div class="content--first blue clear">
      <hangul-blocks-slides></hangul-blocks-slides>
    </div>
    <div class="content mediumblue">
      <div class="spacer--medium"></div>
      <div class="column--single">
          <div class="column--single text--lightpink rule img--100">
              <h2 class="center caps">Consonants are Square</h2>
              <p class="serif center">Based on the physical forms of the tongue, mouth, and throat.</p>
              <div class="flex--center">
                  <div class="column--one-fourth spacer--medium">
                      <img src="/static/images/hangul-blocks/consonants.gif" alt="Hangul Consonants">
                  </div>
                  <div class="column--three-fourths">
                      <img src="/static/images/hangul-blocks/consonants-array.svg" alt="Hangul Consonants Array">
                  </div>
              </div>
              <div class="clear"></div>
          </div>
          <div class="column--single text--yellow img--100 spacer--medium">
              <h2 class="center caps">Vowels are Rectangular</h2>
              <p class="serif center">Based on the harmony of the earth, yin (earth) and yang (sky).</p>
              <div class="flex--center">
                  <div class="column--one-fourth spacer--medium">
                      <img src="/static/images/hangul-blocks/vowels.gif" alt="Hangul Vowels">
                  </div>
                  <div class="column--three-fourths">
                      <img src="/static/images/hangul-blocks/vowels-array.svg" alt="Hangul Vowels Array">
                  </div>
              </div>
          </div>
      </div>
      <div class="spacer--small"></div>
    </div>
    <div class="content lightblue">
      <div class="spacer--medium"></div>
      <div class="column--single text--blue">
          <div class="column--single">
              <h2 class="center caps">Character Blocks</h2>
              <div class="serif center caption">
                  <img class="img--middle img--icon" src="/static/images/tap-icon.svg" alt="TAP"> Tap each character block
              </div>
              <div class="clear spacer--small"></div>
              <div class="serif center caption clear">
                  <div class="column--one-third">
                      <img class="img--middle" src="/static/images/hangul-blocks/key--consonant-first.png" alt="First Consonant"> First Consonant <span class="kr-serif">(초성)</span> 
                  </div>
                  <div class="column--one-third">
                      <img class="img--middle" src="/static/images/hangul-blocks/key--vowel.png" alt="Vowel(s)"> Vowel(s) <span class="kr-serif">(중성)</span>
                  </div>
                  <div class="column--one-third">
                      <img class="img--middle" src="/static/images/hangul-blocks/key--consonant-second.png" alt="Vowel(s)"> Last Consonant <span class="kr-serif">(종성)</span>
                  </div>
              </div>

              <div class="spacer--small clear"></div>
          </div>
              <br />
          <hangul-blocks></hangul-blocks>
      </div>
      <div class="clear spacer--medium"></div>
      <div class="spacer--medium center">
        <router-link class="button caps" to="/letter-form-anatomy">Next Chapter</router-link>
      </div>  
      <div class="spacer--small"></div>
    </div>
  </div>
</template>

<script>
import HangulBlocksSlides from '@/components/HangulBlocksSlides'
import HangulBlocks from '@/components/HangulBlocks'

export default {
  name: 'hangul-blocks-page',
  data () {
    return {}
  },
  components: {
    HangulBlocks,
    HangulBlocksSlides
  }
}
</script>
