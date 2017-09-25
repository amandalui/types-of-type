<template> 
  <div class="dark">
    <div class="header-wrap clear">
      <div class="header-container">
          <div class="header-section-title caps rotate">
            The Basics
          </div>
          <div class="header-content">
              <span class="header-section-number">1&ndash;4</span>
              <h1>Type Categories</h1>
              <p class="header-section-desc">Compare Korean and English stroke variations to pair up similar type categories.</p>
          </div>
      </div>
    </div>
    
    <div class="side-nav side-nav-left center">
        <div class="rotate">
            <router-link to="/letter-form-anatomy">&#9650;<br />Letter-form Anatomy</router-link>
        </div>
    </div>
    <div class="side-nav side-nav-right center">
        <div class="rotate">
            <router-link to="/italics-dashes">Italics, -, &ndash;, &mdash;, and  &tilde;<br />&#9660;</router-link>
        </div>
    </div>

    <div class="content--first green clear">
      <div class="column--single img--100">
      <div class="column--single">
          <div class="spacer--small">
                  <h2 class="caps center text--light spacer--tiny">Old Style</h2>
                  <div class="column--half-br-fluid center">
                      <h3 class="text--light bold">Serif / Myeongjo <span class="kr-sans">(명조체)</span></h3>
                      <img class="spacer--tiny" src="../images/type-categories/01-kr-old-style.svg" alt="Korean Old Style"><br />
                      <span class="text--light caption caps">Typeface</span><br />
                      <span class="caps bold text--lightpink">Apple Myeongjo</span>
                      <p class="column--single serif caption--max-width text--darkgreen left spacer--small">The letters in this category have strokes that are based off of traditional calligraphy.</p>
                  </div>
                  <div class="column--half-br-fluid center">
                      <h3 class="text--light bold">Serif / Humanist / Old Style</h3>
                      <img class="spacer--tiny" src="../images/type-categories/01-en-old-style.svg" alt="English Old Style"><br />
                      <span class="text--light caption caps">Typeface</span><br />
                      <span class="caps bold text--lightpink">Garamond</span>
                      <p class="column--single serif caption--max-width text--darkgreen left spacer--small">The letters in this category have thicker strokes and are based off of traditional calligraphy.</p>
                  </div>
          </div>
          <div class="clear rule spacer--medium"></div>
          <div class="spacer--small">
                  <h2 class="caps center text--light spacer--tiny">Transitional</h2>
                  <div class="column--half-br-fluid center">
                      <h3 class="text--light bold">Serif / Myeongjo <span class="kr-sans">(명조체)</span></h3>
                      <img class="spacer--tiny" src="../images/type-categories/02-kr-transitional.svg" alt="Korean Transitional"><br />
                      <span class="text--light caption caps">Typeface</span><br />
                      <span class="caps bold text--lightpink">Nanum Myeongjo</span>
                      <p class="column--single serif caption--max-width text--darkgreen left spacer--small">The strokes are thinner and the serifs are more refined. Overall there is less direct influence from the calligraphic brush strokes.</p>
                  </div>
                  <div class="column--half-br-fluid center">
                      <h3 class="text--light bold">Serif / Transitional</h3>
                      <img class="spacer--tiny" src="../images/type-categories/02-en-transitional.svg" alt="English Transitional"><br />
                      <span class="text--light caption caps">Typeface</span><br />
                      <span class="caps bold text--lightpink">Baskerville</span>
                      <p class="column--single serif caption--max-width text--darkgreen left spacer--small">The contrast between thick and thin strokes is heightened and the serifs are more refined because of advances in printing technology.</p>
                  </div>
          </div>
          <div class="clear rule spacer--medium"></div>
          <div class="spacer--small">
                  <h2 class="caps center text--light spacer--tiny">Modern / Didone</h2>
                  <div class="column--half-br-fluid center">
                      <h3 class="text--light bold">Serif / Myeongjo <span class="kr-sans">(명조체)</span></h3>
                      <img class="spacer--tiny" src="../images/type-categories/03-kr-modern.svg" alt="Korean Modern"><br />
                      <span class="text--light caption caps">Typeface</span><br />
                      <span class="caps bold text--lightpink">Bigyo</span>
                      <p class="column--single serif caption--max-width text--darkgreen left spacer--small">Heightened contrast between thick and thin strokes are a required feature, however the contrast does not have to be an extreme amount.</p>
                  </div>
                  <div class="column--half-br-fluid center">
                      <h3 class="text--light bold">Serif / Modern / Didone</h3>
                      <img class="spacer--tiny" src="../images/type-categories/03-en-modern.svg" alt="English Modern"><br />
                      <span class="text--light caption caps">Typeface</span><br />
                      <span class="caps bold text--lightpink">Lust Didone</span>
                      <p class="column--single serif caption--max-width text--darkgreen left spacer--small">Extreme contrast between the thick and thin strokes become possible due to more advances in technology, usually featured with thin lined serifs.</p>
                  </div>
          </div>
          <div class="clear rule spacer--medium"></div>
          <div class="spacer--small">
                  <h2 class="caps center text--light spacer--tiny">Slab Serif</h2>
                  <div class="column--half-br-fluid center">
                      <h3 class="text--light bold">Slab Serif / Myeongjo <span class="kr-sans">(명조체)</span></h3>
                      <img class="spacer--tiny" src="../images/type-categories/04-kr-slab.svg" alt="Korean Slab Serif"><br />
                      <span class="text--light caption caps">Typeface</span><br />
                      <span class="caps bold text--lightpink">Seoul Hangang</span>
                      <p class="column--single serif caption--max-width text--darkgreen left spacer--small">The serifs are more square-like. There is little to no contrast between the thicks and thins of the strokes.</p>
                  </div>
                  <div class="column--half-br-fluid center">
                      <h3 class="text--light bold">Slab Serif / Egyptian</h3>
                      <img class="spacer--tiny" src="../images/type-categories/04-en-slab.svg" alt="English Slab Serif"><br />
                      <span class="text--light caption caps">Typeface</span><br />
                      <span class="caps bold text--lightpink">Adelle</span>
                      <p class="column--single serif caption--max-width text--darkgreen left spacer--small">The serifs are more square-like. There is little to no contrast between the thicks and thins of the strokes.</p>
                  </div>
          </div>
          <div class="clear rule spacer--medium"></div>
          <div class="spacer--small">
                  <h2 class="caps center text--light spacer--tiny">Humanist</h2>
                  <div class="column--half-br-fluid center">
                      <h3 class="text--light bold">Sans-Serif / Gothic <span class="kr-sans">(고딕체)</span></h3>
                      <img class="spacer--tiny" src="../images/type-categories/05-kr-humanist.svg" alt="Korean Humanist Gothic"><br />
                      <span class="text--light caption caps">Typeface</span><br />
                      <span class="caps bold text--lightpink">Nanum Gothic</span>
                      <p class="column--single serif caption--max-width text--darkgreen left spacer--small">The stroke shape and contrast is influenced by the original brush strokes from the written letters. There are no serifs.</p>
                  </div>
                  <div class="column--half-br-fluid center">
                      <h3 class="text--light bold">Sans-Serif / Humanist</h3>
                      <img class="spacer--tiny" src="../images/type-categories/05-en-humanist.svg" alt="English Humanist"><br />
                      <span class="text--light caption caps">Typeface</span><br />
                      <span class="caps bold text--lightpink">Calluna Sans</span>
                      <p class="column--single serif caption--max-width text--darkgreen left spacer--small">The stroke shape and contrast is influenced by calligraphy and it’s serifed predecessors. However, there are no serifs.</p>
                  </div>
          </div>
          <div class="clear rule spacer--medium"></div>
          <div class="spacer--small">
                  <h2 class="caps center text--light spacer--tiny">Geometric</h2>
                  <div class="column--half-br-fluid center">
                      <h3 class="text--light bold">Sans-Serif / Gothic <span class="kr-sans">(고딕체)</span></h3>
                      <img class="spacer--tiny" src="../images/type-categories/06-kr-geometric.svg" alt="Korean Geometric"><br />
                      <span class="text--light caption caps">Typeface</span><br />
                      <span class="caps bold text--lightpink">Nanum Square</span>
                      <p class="column--single serif caption--max-width text--darkgreen left spacer--small">The strokes have no contrast between the thicks and thins. The shapes of th eletters are highly influenced by perfectly geometric lines and circles.</p>
                  </div>
                  <div class="column--half-br-fluid center">
                      <h3 class="text--light bold">Sans-Serif / Geometric</h3>
                      <img class="spacer--tiny" src="../images/type-categories/06-en-geometric.svg" alt="English Geometric"><br />
                      <span class="text--light caption caps">Typeface</span><br />
                      <span class="caps bold text--lightpink">Futura</span>
                      <p class="column--single serif caption--max-width text--darkgreen left spacer--small">The strokes have little to no contrast between thicks and thins. The shapes of the letters are highly influenced by perfectly geometric lines and circles.</p>
                  </div>
          </div>
          <div class="clear rule spacer--medium"></div>
          <div class="spacer--small">
                  <h2 class="caps center text--light spacer--tiny">Grotesque</h2>
                  <div class="column--half-br-fluid center">
                      <h3 class="text--light bold">Sans-Serif / Gothic <span class="kr-sans">(고딕체)</span></h3>
                      <img class="spacer--tiny" src="../images/type-categories/07-kr-grotesque.svg" alt="Korean Grotesque"><br />
                      <span class="text--light caption caps">Typeface</span><br />
                      <span class="caps bold text--lightpink">Malgun Gothic</span>
                      <p class="column--single serif caption--max-width text--darkgreen left spacer--small">There is no contrast between the thick and thin strokes. The letters are more regulated when contrasted with one another.</p>
                  </div>
                  <div class="column--half-br-fluid center">
                      <h3 class="text--light bold">Sans-Serif / Grotesque</h3>
                      <img class="spacer--tiny" src="../images/type-categories/07-en-grotesque.svg" alt="English Grotesque"><br />
                      <span class="text--light caption caps">Typeface</span><br />
                      <span class="caps bold text--lightpink">Nimbus Sans</span>
                      <p class="column--single serif caption--max-width text--darkgreen left spacer--small">The stroke's thicks and thins have very slight contrast and the letters are more regulated when contrasted with one another.</p>
                  </div>
          </div>
          <div class="spacer--small clear"></div>
        </div>
      </div>
          
      <div class="clear"></div>
      <div class="spacer--medium center">
          <router-link class="button caps" to="/italics-dashes">Next Chapter</router-link>
      </div>  
    </div>
  </div>
</template>      

<script>
  export default {
    name: 'type-categories',
    data () {
      return {}
    }
  }
</script>
