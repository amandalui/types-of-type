<template>
  <div class="dark">
    <div class="header-wrap clear">
      <div class="header-container">
          <div class="header-section-title-conno caps rotate">
            Connotatives
          </div>
          <div class="header-content">
              <span class="header-section-number">2&ndash;1</span>
              <h1>Italics, -, &ndash;, &mdash;, and &tilde;</h1>
              <p class="header-section-desc">Italics, scripts, and all of those dashes have unique purposes.</p>
          </div>
      </div>
    </div>
      
    <div class="side-nav side-nav-left center">
        <div class="rotate">
            <router-link to="/type-categories">&#9650;<br />Type Categories</router-link>
        </div>
    </div>
    <div class="side-nav side-nav-right center">
        <div class="rotate">
            <router-link to="/emoticons-text">Emoticons &amp; Text<br />&#9660;</router-link>
        </div>
    </div>

    <div class="content--first mediumblue clear">
      <div class="column--single img--100 spacer--medium">
          <div class="column--single">
              <div class="column--half-br">
                  <h2 class="text--lightpink caps center">Italic</h2>
                  <div class="serif text--lightpink center">In a Font Family</div>
                  <p class="center spacer--small"><img src="/static/images/italics-dashes/kr-italic.svg" alt="Italic">
                  <br />
                  <span class="text--lightpink caption caps">Typeface</span><br /><span class="caps bold text--blue">Nanum Myeongjo, Skewed</span></p>
                  <div class="spacer--small center">
                      <img class="img--minirule" src="/static/images/mini-rule.svg" alt="divider">
                  </div>
                  <p class="center spacer--small"><img src="/static/images/italics-dashes/en-italic.svg" alt="Italic">
                  <br />
                  <span class="text--lightpink caption caps">Typeface</span><br /><span class="caps bold text--blue">Kepler Italic</span></p>
                  <p class="serif caption text--lightpink column--single spacer--small">Custom italics within a font family are not usually made in Korean. Possibly due to the roughly 11,000 charcters required to represent each character block combination, Korean italics are often simply skewed versions of the original.</p>
              </div>
              <div class="column--half-br">
                  <h2 class="text--lightpink caps center">Script</h2>
                  <div class="serif text--lightpink center">Standalone Typeface</div>
                  <p class="center spacer--small"><img src="/static/images/italics-dashes/kr-script.svg" alt="Italic">
                  <br />
                  <span class="text--lightpink caption caps">Typeface</span><br /><span class="caps bold text--blue">Nanum Brush Script</span></p>
                  <div class="spacer--small center">
                      <img class="img--minirule" src="/static/images/mini-rule.svg" alt="divider">
                  </div>
                  <p class="center spacer--small"><img src="/static/images/italics-dashes/en-script.svg" alt="Italic">
                  <br />
                  <span class="text--lightpink caption caps">Typeface</span><br /><span class="caps bold text--blue">Braxton</span></p>
                  <p class="serif caption text--lightpink column--single spacer--small">The origin of the italic is based off of the natural angle of letters when written by hand. The English and Hangul scripts both have a hand written influence.</p>
              </div>
              <div class="clear"></div>
          </div>
      </div>
    </div>
    <div class="content lightblue clear">
      <div class="column--single img--100 spacer--large text--blue">
          <div class="spacer--small"></div>
          <div data-style="display: flex;" class="column--single dashes--flex">
              <div @mouseover="activate('hyphen')" @mouseout="disable('hyphen')" class="column--half lightpink spacer--small dashes--flex-item variable-height">
                  <h3 class="caps center">Hyphen</h3>
                  <div class="serif center">
                    Connect Two Words<br />
                  </div>
                  <div v-show="active.hyphen">
                    <img class="spacer--small" src="/static/images/italics-dashes/hyphen.svg" alt="Hyphen">
                    <p class="column--single caption serif">Hyphens are not needed in Korean—even when splitting words from the end of a line to the beginning of the next.</p><br />
                  </div>
                  <div v-show="!active.hyphen" class="column--single spacer--small black text-1">
                    Look at that good<span class="emphasis">-</span>looking, light<span class="emphasis">-</span>headed, T<span class="emphasis">-</span>rex!
                  </div>
                  <div class="spacer--tiny"></div>
              </div>
              <div @mouseover="activate('endash')" @mouseout="disable('endash')" class="column--half light spacer--small dashes--flex-item variable-height">
                  <h3 class="caps center">En Dash</h3>
                  <div class="serif center">
                    Connect Ranges
                  </div>
                  <div v-show="active.endash">
                    <img class="spacer--small" src="/static/images/italics-dashes/endash.svg" alt="En Dash">
                    <p class="column--single caption serif">En dashes are used in the same way in both languages, replacing the words ‘to’ and ‘from’ when writing values.</p><br />
                  </div>
                  <div v-show="!active.endash" class="black column--single spacer--small text-2">
                    In class from 9AM<span class="emphasis">–</span>6PM please read pages 27<span class="emphasis">–</span>56 of the textbook this Monday<span class="emphasis">–</span>Wednesday.
                  </div>
                  <div class="spacer--tiny"></div>
              </div>
              <div @mouseover="activate('emdash')" @mouseout="disable('emdash')" class="column--half white-or-pink spacer--small variable-height">
                  <h3 class="caps center">Em Dash</h3>
                  <div class="serif center">
                    Connect Phrases
                  </div>
                  <div v-show="active.emdash">
                    <img class="spacer--small" src="/static/images/italics-dashes/emdash.svg" alt="Em Dash">
                    <p class="column--single caption serif">The em dash emphasizes a break in thought, this usage remains the same between English and Korean. It can be used in place of commas.</p><br />
                  </div>
                  <div v-show="!active.emdash" class="black column--single spacer--small text-3">
                    She decided<span class="emphasis">—</span>against her will<span class="emphasis">—</span>that she would not eat the entire cake<span class="emphasis">—</span>no matter how delicious<span class="emphasis">—</span>in one sitting.
                  </div>
                  <div class="spacer--tiny"></div>
              </div>
              <div @mouseover="activate('tilde')" @mouseout="disable('tilde')" class="column--half pink-or-white spacer--small variable-height">
                  <h3 class="caps center">Tilde</h3>
                  <div class="serif center">
                    Approximately / Accent / Happy
                  </div>
                  <div v-show="active.tilde">
                    <img class="spacer--small" src="/static/images/italics-dashes/tilde.svg" alt="Tilde">
                    <p class="column--single caption serif">Used as an accent over letters and also as a symbol for ‘approximately.’ In Korean it is used in informal text to mean you are happy. The more tilde’s, the more happiness.</p><br />
                  </div>
                  <div v-show="!active.tilde" class="black column--single spacer--small black text-4">
                    Lets break the piñata in <span class="emphasis">~</span>10 minutes; Thank you<span class="emphasis">~~</span>
                  </div>
                  <div class="spacer--tiny"></div>
              </div>
          </div>
      </div>
          
      <div class="clear"></div>
      <div class="spacer--medium center">
          <router-link class="button caps" to="/emoticons-text">Next Chapter</router-link>
      </div>  
    </div>
  </div>
    <!-- hangul blocks slidershow -->
</template>

<style scoped>
  .emphasis {
    color: #f4af3e
  }

  .white-or-pink {
    background-color: #fff;
  }
  .pink-or-white {
    background-color: #fcdfeb;
  }

  @media (max-width: 768px) {
    .white-or-pink {
      background-color: #fcdfeb;
    }
    .pink-or-white {
      background-color: #fff;
    }
  }

  .variable-height {
    height: 500px;
    overflow: hidden;
  }

  @media screen and (max-width: 768px) {
    .text-1 {
      font-size: calc(33px + 4vw);
    }
    .text-2 {
      font-size: calc(23px + 4vw);
    }
    .text-3 {
      font-size: calc(20px + 4vw);
    }
    .text-4 {
      font-size: calc(35px + 4vw);
    }
  }

  @media screen and (min-width: 768px) and (max-width: 1150px) {
    .text-1 {
      font-size: calc(30px + 0.03 * (100vw - 768px));
    }
    .text-2 {
      font-size: calc(25px + 0.03 * (100vw - 768px));
    }
    .text-3 {
      font-size: calc(25px + 0.025 * (100vw - 768px));
    }
    .text-4 {
      font-size: calc(35px + 0.025 * (100vw - 768px));
    }
  }

  @media screen and (min-width: 1150px) {
    .text-1 {
      font-size: 45px;
    }
    .text-2 {
      font-size: 35px;
    }
    .text-3 {
      font-size: 33px;
    }
    .text-4 {
      font-size: 47px;
    }
  }

</style>
    
<script>
export default {
  name: 'italics-dashes',
  data () {
    return {
      active: {
        hyphen: true,
        endash: true,
        emdash: true,
        tilde: true
      }
    }
  },
  methods: {
    activate (key) {
      this.active[key] = false
    },
    disable (key) {
      this.active[key] = true
    }
  }
}
</script>
