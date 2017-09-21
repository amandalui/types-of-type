<template>
  <div>
    <div class="header-wrap clear">
      <div class="header-container">
          <div class="header-section-title-conno caps rotate">
            Connotatives
          </div>
          <div class="header-content">
              <span class="header-section-number">2&ndash;1</span>
              <h1>Italics, -, &ndash;, &mdash;, and &tilde;</h1>
              <p class="header-section-desc">Italics, scripts, and all of those dahses have uniqe purposes.</p>
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
            <router-link to="/emoticons-abbreviations">Emoticons &amp; Abbreviations<br />&#9660;</router-link>
        </div>
    </div>

    <div class="content--first mediumblue clear">
      <div class="column--single img--100 spacer--medium">
          <div class="column--single">
              <div class="column--half-br">
                  <h2 class="text--lightpink caps center">Italic</h2>
                  <div class="serif text--lightpink center">In a Font Family</div>
                  <p class="center spacer--small"><img src="../images/italics-dashes/kr-italic.svg" alt="Italic">
                  <br />
                  <span class="text--lightpink caption caps">Typeface</span><br /><span class="caps bold text--blue">Nanum Myeongjo, Skewed</span></p>
                  <div class="spacer--small center">
                      <img class="img--minirule" src="../images/mini-rule.svg" alt="divider">
                  </div>
                  <p class="center spacer--small"><img src="../images/italics-dashes/en-italic.svg" alt="Italic">
                  <br />
                  <span class="text--lightpink caption caps">Typeface</span><br /><span class="caps bold text--blue">Kepler Italic</span></p>
                  <p class="serif caption text--lightpink column--single spacer--small">Custom italics within a font family are not usually made in Korean. Possibly due to the roughly 11,000 charcters required to represent each character block combination, Korean italics are often simply skewed versions of the original font.</p>
              </div>
              <div class="column--half-br">
                  <h2 class="text--lightpink caps center">Script</h2>
                  <div class="serif text--lightpink center">Standalone Typeface</div>
                  <p class="center spacer--small"><img src="../images/italics-dashes/kr-script.svg" alt="Italic">
                  <br />
                  <span class="text--lightpink caption caps">Typeface</span><br /><span class="caps bold text--blue">Nanum Brush Script</span></p>
                  <div class="spacer--small center">
                      <img class="img--minirule" src="../images/mini-rule.svg" alt="divider">
                  </div>
                  <p class="center spacer--small"><img src="../images/italics-dashes/en-script.svg" alt="Italic">
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
              <div class="column--half lightpink spacer--small dashes--flex-item">
                  <h3 class="caps center">Hyphen</h3>
                  <div class="serif center">
                      Connect Two Words<br />
                      <img class="spacer--small" src="../images/italics-dashes/hyphen.svg" alt="Hyphen">
                  </div>
                  <p class="column--single caption serif">Hyphens are not needed in Korean—even when splitting words from the end of a line to the beginning of the next.</p><br />
                  <p class="column--single caption serif">e.g. Look at that good-looking, light-headed, T-rex!</p>
                  <div class="spacer--tiny"></div>
              </div>
              <div class="column--half light spacer--small dashes--flex-item">
                  <h3 class="caps center">En Dash</h3>
                  <div class="serif center">
                      Connect Ranges
                      <img class="spacer--small" src="../images/italics-dashes/endash.svg" alt="En Dash">
                  </div>
                  <p class="column--single caption serif">En dashes are used in the same way in both languages, replacing the words ‘to’ and ‘from’ when writing values.</p><br />
                  <p class="column--single caption serif">e.g. In class from 9AM–6PM please read pages 27–56 of the textbook this Monday–Wednesday.</p>
                  <div class="spacer--tiny"></div>
              </div>
              <div class="column--half light spacer--small">
                  <h3 class="caps center">Em Dash</h3>
                  <div class="serif center">
                      Connect Phrases
                      <img class="spacer--small" src="../images/italics-dashes/emdash.svg" alt="Em Dash">
                  </div>
                  <p class="column--single caption serif">The em dash emphasizes a break in thought, this usage remains the same between English and Korean. It can be used in place of commas.</p><br />
                  <p class="column--single caption serif">e.g. She decided—against her will—that she would not eat the entire cake—no matter how delicious—in one sitting.</p>
                  <div class="spacer--tiny"></div>
              </div>
              <div class="column--half lightpink spacer--small">
                  <h3 class="caps center">Tilde</h3>
                  <div class="serif center">
                      Approximately / Accent / Happy
                      <img class="spacer--small" src="../images/italics-dashes/tilde.svg" alt="Tilde">
                  </div>
                  <p class="column--single caption serif">Used as an accent overletters and also as a symbol for ‘approximately.’ In Korean it us ised in informal text to mean you are happy. The more tilde’s, the more happiness.</p><br />
                  <p class="column--single caption serif">e.g. Lets break the piñata in ~10 minutes; Thank you~~</p>
                  <div class="spacer--tiny"></div>
              </div>
          </div>
      </div>
          
      <div class="clear"></div>
      <div class="spacer--medium center">
          <router-link class="button caps" to="/emoticons-abbreviations">Next Chapter</router-link>
      </div>  
    </div>
  </div>
    <!-- hangul blocks slidershow -->
</template>
    
<script>
export default {
  name: 'italics-dashes',
  data () {
    return {}
  }
}
</script>
