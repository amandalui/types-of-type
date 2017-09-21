<template>
  <div>

    <div class="header-wrap clear">
      <div class="header-container">
          <div class="header-section-title-conno caps rotate">
            Connotatives
          </div>
          <div class="header-content">
              <span class="header-section-number">2&ndash;2</span>
              <h1>Emoticons &amp; Abbreviations</h1>
              <p class="header-section-desc">TLDR; :D Haha! <span class="kr-serif">ㅎ_ㅎ</span> OMG.. <span class="kr-serif">^ㅁ^</span></p>
          </div>
      </div>
    </div>
    
    <div class="side-nav side-nav-left center">
        <div class="rotate">
            <router-link to="/italics-dashes">&#9650;<br />Italics, -, &ndash;, &mdash;, and &tilde;</router-link>
        </div>
    </div>
    <div class="side-nav side-nav-right center">
        <div class="rotate">
            <router-link to="/expressive-type">Expressive Type<br />&#9660;</router-link>
        </div>
    </div>

    <div class="content--first yellow text--darkgreen clear">
      <div class="column--single spacer--small">
          <h3 class="spacer--small caps center">Make a Face</h3>
          <faces></faces>
      </div>
    </div>

    <div class="content darkyellow text--darkgreen">
      <div class="spacer--medium"></div>
      <div class="column--single">
          <div class="column--single">
              <h3 class="center caps">Abbreviations</h3>
              <div class="abbreviations-wrapper spacer--medium">
                  <div class="column--one-third spacer--small">           
                      <div class="arrow-container-white white-tri-right right-top center kr-sans">
                          <div class="abbrev-text-box">
                              ㅋㅋㅋ
                          </div>
                      </div><br />
                      <div class="arrow-container-yellow yellow-tri-right left-top center">
                          <div class="abbrev-text-box">
                              haha
                          </div>
                      </div>
                  </div>
                  <div class="column--two-thirds spacer--small">
                      <div class="column--single">
                          <h3><span class="kr-sans-bold">ㅋㅋㅋ</span> / haha</h3>
                          <p class="serif">To indicate laughter, literally kkkkkk.</p>
                      </div>
                  </div>
              </div>
              <div class="clear rule"></div>
              <div class="spacer--small"></div>
              <div class="abbreviations-wrapper spacer--medium">
                  <div class="column--two-thirds">
                      <div class="column--single spacer--small">
                          <h3><span class="kr-sans-bold">ㅎㅎㅎ</span> / heh</h3>
                          <p class="serif">To indicate breathes of laughter, literally hhh.</p>
                      </div>
                  </div>
                  <div class="column--one-third spacer--small">           
                      <div class="arrow-container-white white-tri-right right-top center kr-sans">
                          <div class="abbrev-text-box">
                              ㅎㅎㅎ
                          </div>
                      </div><br />
                      <div class="arrow-container-yellow yellow-tri-right left-top center">
                          <div class="abbrev-text-box">
                              heh
                          </div>
                      </div>
                  </div>
              </div>
              <div class="clear rule"></div>
              <div class="spacer--small"></div>
              <div class="abbreviations-wrapper  spacer--medium">
                  <div class="column--one-third spacer--small">           
                      <div class="arrow-container-white white-tri-right right-top center kr-sans">
                          <div class="abbrev-text-box">
                              ㅇㅋ
                          </div>
                      </div><br />
                      <div class="arrow-container-yellow yellow-tri-right left-top center">
                          <div class="abbrev-text-box">
                              OK
                          </div>
                      </div>
                  </div>
                  <div class="column--two-thirds">
                      <div class="column--single spacer--small">
                          <h3><span class="kr-sans-bold">ㅇㅋ</span> / OK</h3>
                          <p class="serif">The letter <span class="kr-serif">‘ㅇ’</span> looks like the letter ‘O’ and <span class="kr-serif">‘ㅋ’</span> is pronounced like the ‘k’ sound.</p>
                      </div>
                  </div>
              </div>
              <div class="clear rule"></div>
              <div class="spacer--small">
              <div class="abbreviations-wrapper spacer--medium">
                  <div class="column--two-thirds">
                      <div class="column--single spacer--small">
                          <h3><span class="kr-sans-bold">ㅅㄱ</span> / GG</h3>
                          <p class="serif">A casual of saying good game or good job. <span class="kr-serif">ㅅㄱ</span> is short hand for <span class="kr-serif">수고하세요.</span> The <span class="kr-serif">‘ㅅ’</span> represents the ‘s’ sound and <span class="kr-serif">‘ㄱ’</span> represents the ‘g’ sound.</p>
                      </div>
                  </div>
                  <div class="column--one-third spacer--small">           
                      <div class="arrow-container-white white-tri-right right-top center kr-sans">
                          <div class="abbrev-text-box">
                              ㅅㄱ
                          </div>
                      </div><br />
                      <div class="arrow-container-yellow yellow-tri-right left-top center">
                        <div class="abbrev-text-box">
                              GG
                          </div>
                      </div>
                  </div>
              </div>
              <div class="spacer--small clear"></div>
          </div>
        </div>
      </div>
      <div class="clear"></div>
      <div class="spacer--medium center">
        <router-link class="button caps" to="/expressive-type">Next Chapter</router-link>
      </div>  
    </div> 
  </div>
</template> 

<script>
import Faces from '@/components/Faces'

export default {
  name: 'emoticons-abbreviations',
  data () {
    return {}
  },
  components: {
    Faces
  }
}
</script>
