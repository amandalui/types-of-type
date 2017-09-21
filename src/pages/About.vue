<template>
  <div class="about-wrap bg--about">
      <div class="about-container clear">
          <h2 class="center caps">About</h2>
          <h1 class="spacer--small">A guide to typography with character.</h1>
          <h3 class="serif">Types of Type is a playful guide to typography. By using a foreign language, it looks at type as shapes. This helps bring forward details that may be missed when looking at letters.</h3>
          <div class="spacer--small"></div>
          <div class="column--half spacer--small">
              <p><span class="bold">Writing and Design</span><br />
                  <span class="serif"><router-link to="/http://amandalui.com" target="_blank">Amanda Lui</router-link></span></p>
              <p><span class="bold">Website in collaboration with</span><br />
                  <span class="serif"><router-link to="/https://github.com/thisjeremiah" target="_blank">Jeremiah Montoya</router-link></span><br />
                  <span class="serif"><router-link to="/https://github.com/nathanspecht" target="_blank">Nathan Specht</router-link></span>
              </p>
              <p><span class="bold">Special Thanks</span><br />
                  <span class="serif"><router-link to="/http://romanjaster.com/" target="_blank">Roman Jaster</router-link></span><br />
                  <span class="serif"><router-link to="/http://soonsol.com/" target="_blank">Soonsol Hong</router-link></span><br />
                  <span class="serif"><router-link to="/http://cargocollective.com/herimshin" target="_blank">Herim Shin</router-link></span><br />
                  <span class="serif">Andrea Juhie Kim</span>
              </p>
              <p><span class="bold">Colophon</span><br />
                  <span class="serif">English type set in <router-link to="/https://fonts.google.com/specimen/Work+Sans" target="_blank">Work Sans</router-link> and <router-link to="/https://fonts.google.com/specimen/Bitter" target="_blank">Bitter</router-link>. Korean type set in <router-link to="/https://www.google.com/get/noto/help/cjk/" target="_blank">Noto Sans CJK</router-link> and <router-link to="/http://hangeul.naver.com/" target="_blank">Nanum Myeongjo</router-link></span>
              </p>
          </div>
          <div class="column--one-third spacer--small spacer--left caption">
              <p><span class="bold">Bibliography</span></p>
              <p>Boardly, John. “The Origins of Abc” I Love Typography. 07 Aug 2010. <router-link to="www.ilovetypeography.com" target="_blank">www.ilovetypeography.com</router-link></p>
              <p>Bringhurst, Robert. The Elements of Typographic Style. Point Roberts, WA: Hartley &amp; Marks, 2002.</p>
              <p>Graig, James and Susan E. Meyer Designing with Type: A Basic Course in Typography. New York: Watson-Guptill Publications, 1980.</p>
              <p>Glyph of the Day. <router-link to="www.glyphs.webfoot.com" target="_blank">www.glyphs.webfoot.com</router-link></p>
              <p>Kim, Young-hyun, and Sang-yeon Park. Tree With Deep Roots. SBS. Seoul, 2011. Television.</p>
              <p>Korean Typographics Association. KaNaDaRa. 4th ed. Vol 1. Seoul: Korean Typographics Association, 2012.</p>
          </div>
          <div class="clear"></div>
      </div>
    <div class="spacer--medium clear"></div>
  </div>
</template>

<script>
export default {
  name: 'about',
  data () {
    return {}
  }
}
</script>
