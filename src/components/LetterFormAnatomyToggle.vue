<template>
      <div class="column--single img--140 text--blue">
      <div class="column--single">
<!--BEGIN VIEW ALL-->
      <transition name="fade">
              <div
                v-if="currentTab === tabs.all"
                class="column--single"
              >
                  <div class="column--half-left">
                        <h3 class="bold caps center">Korean Anatomy</h3>
                          <div class="spacer--small flex-h-center">
                              <div class="column--one-fourth">
                                  <img src="/static/images/letter-form-anatomy/01-kr-pillars.svg" alt="Pillars">
                              </div>
                              <div class="column--three-fourths">
                                  <div class="bold caps no-break">Pillars <span class="kr-sans-bold">(겸기둥)</span></div>
                                  <div class="serif caption--max-width">The two bars specific to letters <span class="kr-serif">ㅐ, ㅒ, ㅔ,</span> and <span class="kr-serif">ㅖ.</span></div>
                              </div>
                          </div>
                          <div class="spacer--small flex-h-center">
                              <div class="column--one-fourth">
                                  <img src="/static/images/letter-form-anatomy/02-kr-beak.svg" alt="Beak">
                              </div>
                              <div class="column--three-fourths">
                                  <div class="bold caps no-break">Beak <span class="kr-sans-bold">(부리)</span></div>
                                  <div class="serif caption--max-width">The top-most accent mark influenced from when the brush first touches paper.</div>
                              </div>
                          </div>
                          <div class="spacer--small flex-h-center">
                              <div class="column--one-fourth">
                                  <img src="/static/images/letter-form-anatomy/03-kr-hor-stem.svg" alt="Horizontal Stem">
                              </div>
                              <div class="column--three-fourths">
                                  <div class="bold caps no-break">Horizontal Stem <span class="kr-sans-bold">(기로줄기)</span></div>
                                  <div class="serif caption--max-width">A horizontal stroke with at least one stroke prior.</div>
                              </div>
                          </div>
                          <div class="spacer--small flex-h-center">
                              <div class="column--one-fourth">
                                  <img src="/static/images/letter-form-anatomy/04-kr-vertex.svg" alt="Vertex">
                              </div>
                              <div class="column--three-fourths">
                                  <div class="bold caps no-break">Vertex <span class="kr-sans-bold">(꼭지점)</span></div>
                                  <div class="serif caption--max-width">Similar to the dotted i, the vertex is specific to the top part of letters <span class="kr-serif">ㅊ</span> and <span class="kr-serif">ㅎ.</span></div>
                              </div>
                          </div>
                          <div class="spacer--small flex-h-center">
                              <div class="column--one-fourth">
                                  <img src="/static/images/letter-form-anatomy/05-kr-side-stroke.svg" alt="Side Stroke">
                              </div>
                              <div class="column--three-fourths">
                                  <div class="bold caps no-break">Side Stroke <span class="kr-sans-bold">(곁줄기)</span></div>
                                  <div class="serif caption--max-width">Specific to the letters <span class="kr-serif">ㅓ, ㅏ, ㅔ,</span> and <span class="kr-serif">ㅖ.</span> It is shorter than the horizontal stem.</div>
                              </div>
                          </div>
                          <div class="spacer--small flex-h-center">
                              <div class="column--one-fourth">
                                  <img src="/static/images/letter-form-anatomy/06-kr-stem-joint.svg" alt="Stem Joint">
                              </div>
                              <div class="column--three-fourths">
                                  <div class="bold caps no-break">Stem Joint <span class="kr-sans-bold">(이음줄기)</span></div>
                                  <div class="serif caption--max-width">Refers to what happens when a letter connects upwards toward the letter next to it.</div>
                              </div>
                          </div>
                          <div class="spacer--small flex-h-center">
                              <div class="column--one-fourth">
                                  <img src="/static/images/letter-form-anatomy/07-kr-short-column.svg" alt="Short Column">
                              </div>
                              <div class="column--three-fourths">
                                  <div class="bold caps">Short Column <span class="kr-sans-bold no-break">(짧은기둥)</span></div>
                                  <div class="serif caption--max-width">The part that sticks out vertically, specific to the letters <span class="kr-serif">ㅗ</span> and <span class="kr-serif">ㅜ.</span></div>
                              </div>
                          </div>
                          <div class="spacer--small flex-h-center">
                              <div class="column--one-fourth">
                                  <img src="/static/images/letter-form-anatomy/08-kr-bow.svg" alt="Bow">
                              </div>
                              <div class="column--three-fourths">
                                  <div class="bold caps no-break">Bow <span class="kr-sans-bold">(보)</span></div>
                                  <div class="serif caption--max-width">A horizontal stroke, normally with only one or two strokes prior or after.</div>
                              </div>
                          </div>
                          <div class="spacer--small flex-h-center">
                              <div class="column--one-fourth">
                                  <img src="/static/images/letter-form-anatomy/09-kr-vertical-stem.svg" alt="Vertical Stem">
                              </div>
                              <div class="column--three-fourths">
                                  <div class="bold caps no-break">Vertical Stem <span class="kr-sans-bold">(세로줄기)</span></div>
                                  <div class="serif caption--max-width">A long vertical stroke that is followed by at least one vertical stroke.</div>
                              </div>
                          </div>
                          <div class="spacer--small flex-h-center">
                              <div class="column--one-fourth">
                                  <img src="/static/images/letter-form-anatomy/10-kr-round-stem.svg" alt="Round Stem">
                              </div>
                              <div class="column--three-fourths">
                                  <div class="bold caps no-break">Round Stem <span class="kr-sans-bold">(둥근줄기)</span></div>
                                  <div class="serif caption--max-width">Only found in the letters <span class="kr-serif">ㅇ</span> and <span class="kr-serif">ㅎ.</span></div>
                              </div>
                          </div>
                          <div class="spacer--small flex-h-center">
                              <div class="column--one-fourth">
                                  <img src="/static/images/letter-form-anatomy/11-kr-topknot.svg" alt="Topknot">
                              </div>
                              <div class="column--three-fourths">
                                  <div class="bold caps no-break">Topknot <span class="kr-sans-bold">(상투)</span></div>
                                  <div class="serif caption--max-width">An accent from the initial brush mark on paper.</div>
                              </div>
                          </div>
                  </div>
                  <div class="column--half-right text--blue">
                        <h3 class="bold caps center">English Anatomy</h3>
                          <div class="spacer--small flex-h-center">
                              <div class="column--one-fourth">
                                  <img src="/static/images/letter-form-anatomy/01-en-counter.svg" alt="Counter">
                              </div>
                              <div class="column--three-fourths">
                                  <div class="bold caps">Counter</div>
                                  <div class="serif caption--max-width">Enclosed spaces.</div>
                              </div>
                          </div>
                          <div class="spacer--small flex-h-center">
                              <div class="column--one-fourth">
                                  <img src="/static/images/letter-form-anatomy/02-en-arch.svg" alt="Arch">
                              </div>
                              <div class="column--three-fourths">
                                  <div class="bold caps">Arch</div>
                                  <div class="serif caption--max-width">Upper curves.</div>
                              </div>
                          </div>
                          <div class="spacer--small flex-h-center">
                              <div class="column--one-fourth">
                                  <img src="/static/images/letter-form-anatomy/03-en-serif.svg" alt="Serif">
                              </div>
                              <div class="column--three-fourths">
                                  <div class="bold caps">Serif</div>
                                  <div class="serif caption--max-width">From the process of carving letters into stone. The serif marks the first strike into the stone.</div>
                              </div>
                          </div>
                          <div class="spacer--small flex-h-center">
                              <div class="column--one-fourth">
                                  <img src="/static/images/letter-form-anatomy/04-en-serif-bracket.svg" alt="Serif Brakcet">
                              </div>
                              <div class="column--three-fourths">
                                  <div class="bold caps">Serif Bracket</div>
                                  <div class="serif caption--max-width">The style of the serif connected to the stem.</div>
                              </div>
                          </div>
                          <div class="spacer--small flex-h-center">
                              <div class="column--one-fourth">
                                  <img src="/static/images/letter-form-anatomy/05-en-outstroke.svg" alt="Outstroke">
                              </div>
                              <div class="column--three-fourths">
                                  <div class="bold caps">Outstroke</div>
                                  <div class="serif caption--max-width">A stylized serif, used to end the last stroke of a letter.</div>
                              </div>
                          </div>
                          <div class="spacer--small flex-h-center">
                              <div class="column--one-fourth">
                                  <img src="/static/images/letter-form-anatomy/06-en-ascender.svg" alt="Ascender">
                              </div>
                              <div class="column--three-fourths">
                                  <div class="bold caps">Ascender</div>
                                  <div class="serif caption--max-width">The part of a stem that rises above the meanline.</div>
                              </div>
                          </div>
                          <div class="spacer--small flex-h-center">
                              <div class="column--one-fourth">
                                  <img src="/static/images/letter-form-anatomy/07-en-stem.svg" alt="Stem">
                              </div>
                              <div class="column--three-fourths">
                                  <div class="bold caps">Stem</div>
                                  <div class="serif caption--max-width">Any vertical stroke. </div>
                              </div>
                          </div>
                          <div class="spacer--small flex-h-center">
                              <div class="column--one-fourth">
                                  <img src="/static/images/letter-form-anatomy/08-en-descender.svg" alt="Descender">
                              </div>
                              <div class="column--three-fourths">
                                  <div class="bold caps">Desender</div>
                                  <div class="serif caption--max-width">The part that hangs below the baseline.</div>
                              </div>
                          </div>
                          <div class="spacer--small flex-h-center">
                              <div class="column--one-fourth">
                                  <img src="/static/images/letter-form-anatomy/09-en-bowl.svg" alt="Bowl">
                              </div>
                              <div class="column--three-fourths">
                                  <div class="bold caps">Bowl</div>
                                  <div class="serif caption--max-width">Any rounded part that contains a counter space.</div>
                              </div>
                          </div>
                          <div class="spacer--small flex-h-center">
                              <div class="column--one-fourth">
                                  <img src="/static/images/letter-form-anatomy/10-en-beak.svg" alt="Beak">
                              </div>
                              <div class="column--three-fourths">
                                  <div class="bold caps">Beak</div>
                                  <div class="serif caption--max-width">The extension of the serif, usually located at the top of letters.</div>
                              </div>
                          </div>
                          <div class="spacer--small flex-h-center">
                              <div class="column--one-fourth">
                                  <img src="/static/images/letter-form-anatomy/11-en-finial.svg" alt="FInial">
                              </div>
                              <div class="column--three-fourths">
                                  <div class="bold caps">Finial/End Stroke</div>
                                  <div class="serif caption--max-width">An unstylized way of ending the last stroke.</div>
                              </div>
                          </div>
                  </div>
              </div>
      </transition>
      <transition name="fade">
              <div
                v-if="currentTab === tabs.korean"
              >
                  <div class="column--single">
                        <h3 class="bold caps center">Korean Anatomy</h3>
                        <div class="column--half-left">
                          <div class="spacer--small flex-h-center">
                              <div class="column--one-fourth">
                                  <img src="/static/images/letter-form-anatomy/01-kr-pillars.svg" alt="Pillars">
                              </div>
                              <div class="column--three-fourths">
                                  <div class="bold caps no-break">Pillars <span class="kr-sans-bold">(겸기둥)</span></div>
                                  <div class="serif caption--max-width">The two bars specific to letters <span class="kr-serif">ㅐ, ㅒ, ㅔ,</span> and <span class="kr-serif">ㅖ.</span></div>
                              </div>
                          </div>
                          <div class="spacer--small flex-h-center">
                              <div class="column--one-fourth">
                                  <img src="/static/images/letter-form-anatomy/02-kr-beak.svg" alt="Beak">
                              </div>
                              <div class="column--three-fourths">
                                  <div class="bold caps no-break">Beak <span class="kr-sans-bold">(부리)</span></div>
                                  <div class="serif caption--max-width">The top-most accent mark influenced from when the brush first touches paper.</div>
                              </div>
                          </div>
                          <div class="spacer--small flex-h-center">
                              <div class="column--one-fourth">
                                  <img src="/static/images/letter-form-anatomy/03-kr-hor-stem.svg" alt="Horizontal Stem">
                              </div>
                              <div class="column--three-fourths">
                                  <div class="bold caps no-break">Horizontal Stem <span class="kr-sans-bold">(기로줄기)</span></div>
                                  <div class="serif caption--max-width">A horizontal stroke with at least one stroke prior.</div>
                              </div>
                          </div>
                          <div class="spacer--small flex-h-center">
                              <div class="column--one-fourth">
                                  <img src="/static/images/letter-form-anatomy/04-kr-vertex.svg" alt="Vertex">
                              </div>
                              <div class="column--three-fourths">
                                  <div class="bold caps no-break">Vertex <span class="kr-sans-bold">(꼭지점)</span></div>
                                  <div class="serif caption--max-width">Similar to the dotted i, the vertex is specific to the top part of letters <span class="kr-serif">ㅊ</span> and <span class="kr-serif">ㅎ.</span></div>
                              </div>
                          </div>
                          <div class="spacer--small flex-h-center">
                              <div class="column--one-fourth">
                                  <img src="/static/images/letter-form-anatomy/05-kr-side-stroke.svg" alt="Side Stroke">
                              </div>
                              <div class="column--three-fourths">
                                  <div class="bold caps no-break">Side Stroke <span class="kr-sans-bold">(곁줄기)</span></div>
                                  <div class="serif caption--max-width">Specific to the letters <span class="kr-serif">ㅓ, ㅏ, ㅔ,</span> and <span class="kr-serif">ㅖ.</span> It is shorter than the horizontal stem.</div>
                              </div>
                          </div>
                          <div class="spacer--small flex-h-center">
                              <div class="column--one-fourth">
                                  <img src="/static/images/letter-form-anatomy/06-kr-stem-joint.svg" alt="Stem Joint">
                              </div>
                              <div class="column--three-fourths">
                                  <div class="bold caps no-break">Stem Joint <span class="kr-sans-bold">(이음줄기)</span></div>
                                  <div class="serif caption--max-width">Refers to what happens when a letter connects upwards toward the letter next to it.</div>
                              </div>
                          </div>
                        </div>
                        <div class="column--half-right">
                          <div class="spacer--small flex-h-center">
                              <div class="column--one-fourth">
                                  <img src="/static/images/letter-form-anatomy/07-kr-short-column.svg" alt="Short Column">
                              </div>
                              <div class="column--three-fourths">
                                  <div class="bold caps">Short Column <span class="kr-sans-bold no-break">(짧은기둥)</span></div>
                                  <div class="serif caption--max-width">The part that sticks out vertically, specific to the letters <span class="kr-serif">ㅗ</span> and <span class="kr-serif">ㅜ.</span></div>
                              </div>
                          </div>
                          <div class="spacer--small flex-h-center">
                              <div class="column--one-fourth">
                                  <img src="/static/images/letter-form-anatomy/08-kr-bow.svg" alt="Bow">
                              </div>
                              <div class="column--three-fourths">
                                  <div class="bold caps no-break">Bow <span class="kr-sans-bold">(보)</span></div>
                                  <div class="serif caption--max-width">A horizontal stroke, normally with only one or two strokes prior or after.</div>
                              </div>
                          </div>
                          <div class="spacer--small flex-h-center">
                              <div class="column--one-fourth">
                                  <img src="/static/images/letter-form-anatomy/09-kr-vertical-stem.svg" alt="Vertical Stem">
                              </div>
                              <div class="column--three-fourths">
                                  <div class="bold caps no-break">Vertical Stem <span class="kr-sans-bold">(세로줄기)</span></div>
                                  <div class="serif caption--max-width">A long vertical stroke that is followed by at least one vertical stroke.</div>
                              </div>
                          </div>
                          <div class="spacer--small flex-h-center">
                              <div class="column--one-fourth">
                                  <img src="/static/images/letter-form-anatomy/10-kr-round-stem.svg" alt="Round Stem">
                              </div>
                              <div class="column--three-fourths">
                                  <div class="bold caps no-break">Round Stem <span class="kr-sans-bold">(둥근줄기)</span></div>
                                  <div class="serif caption--max-width">Only found in the letters <span class="kr-serif">ㅇ</span> and <span class="kr-serif">ㅎ.</span></div>
                              </div>
                          </div>
                          <div class="spacer--small flex-h-center">
                              <div class="column--one-fourth">
                                  <img src="/static/images/letter-form-anatomy/11-kr-topknot.svg" alt="Topknot">
                              </div>
                              <div class="column--three-fourths">
                                  <div class="bold caps no-break">Topknot <span class="kr-sans-bold">(상투)</span></div>
                                  <div class="serif caption--max-width">An accent from the initial brush mark on paper.</div>
                              </div>
                          </div>
                        </div>
                  </div>
                  <div class="spacer--medium"></div>
              </div>
      </transition>
      <transition name="fade">
              <div
                v-if="currentTab === tabs.english"
              >
                  <div class="column--single text--blue">
                        <h3 class="bold caps center">English Anatomy</h3>
                        <div class="column--half-left">
                          <div class="spacer--small flex-h-center">
                              <div class="column--one-fourth">
                                  <img src="/static/images/letter-form-anatomy/01-en-counter.svg" alt="Counter">
                              </div>
                              <div class="column--three-fourths">
                                  <div class="bold caps">Counter</div>
                                  <div class="serif caption--max-width">Enclosed spaces.</div>
                              </div>
                          </div>
                          <div class="spacer--small flex-h-center">
                              <div class="column--one-fourth">
                                  <img src="/static/images/letter-form-anatomy/02-en-arch.svg" alt="Arch">
                              </div>
                              <div class="column--three-fourths">
                                  <div class="bold caps">Arch</div>
                                  <div class="serif caption--max-width">Upper curves.</div>
                              </div>
                          </div>
                          <div class="spacer--small flex-h-center">
                              <div class="column--one-fourth">
                                  <img src="/static/images/letter-form-anatomy/03-en-serif.svg" alt="Serif">
                              </div>
                              <div class="column--three-fourths">
                                  <div class="bold caps">Serif</div>
                                  <div class="serif caption--max-width">From the process of carving letters into stone. The serif marks the first strike into the stone.</div>
                              </div>
                          </div>
                          <div class="spacer--small flex-h-center">
                              <div class="column--one-fourth">
                                  <img src="/static/images/letter-form-anatomy/04-en-serif-bracket.svg" alt="Serif Brakcet">
                              </div>
                              <div class="column--three-fourths">
                                  <div class="bold caps">Serif Bracket</div>
                                  <div class="serif caption--max-width">The style of the serif connected to the stem.</div>
                              </div>
                          </div>
                          <div class="spacer--small flex-h-center">
                              <div class="column--one-fourth">
                                  <img src="/static/images/letter-form-anatomy/05-en-outstroke.svg" alt="Outstroke">
                              </div>
                              <div class="column--three-fourths">
                                  <div class="bold caps">Outstroke</div>
                                  <div class="serif caption--max-width">A stylized serif, used to end the last stroke of a letter.</div>
                              </div>
                          </div>
                          <div class="spacer--small flex-h-center">
                              <div class="column--one-fourth">
                                  <img src="/static/images/letter-form-anatomy/06-en-ascender.svg" alt="Ascender">
                              </div>
                              <div class="column--three-fourths">
                                  <div class="bold caps">Ascender</div>
                                  <div class="serif caption--max-width">The part of a stem that rises above the meanline.</div>
                              </div>
                          </div>
                        </div>
                        <div class="column--half-right">
                          <div class="spacer--small flex-h-center">
                              <div class="column--one-fourth">
                                  <img src="/static/images/letter-form-anatomy/07-en-stem.svg" alt="Stem">
                              </div>
                              <div class="column--three-fourths">
                                  <div class="bold caps">Stem</div>
                                  <div class="serif caption--max-width">Any vertical stroke. </div>
                              </div>
                          </div>
                          <div class="spacer--small flex-h-center">
                              <div class="column--one-fourth">
                                  <img src="/static/images/letter-form-anatomy/08-en-descender.svg" alt="Descender">
                              </div>
                              <div class="column--three-fourths">
                                  <div class="bold caps">Desender</div>
                                  <div class="serif caption--max-width">The part that hangs below the baseline.</div>
                              </div>
                          </div>
                          <div class="spacer--small flex-h-center">
                              <div class="column--one-fourth">
                                  <img src="/static/images/letter-form-anatomy/09-en-bowl.svg" alt="Bowl">
                              </div>
                              <div class="column--three-fourths">
                                  <div class="bold caps">Bowl</div>
                                  <div class="serif caption--max-width">Any rounded part that contains a counter space.</div>
                              </div>
                          </div>
                          <div class="spacer--small flex-h-center">
                              <div class="column--one-fourth">
                                  <img src="/static/images/letter-form-anatomy/10-en-beak.svg" alt="Beak">
                              </div>
                              <div class="column--three-fourths">
                                  <div class="bold caps">Beak</div>
                                  <div class="serif caption--max-width">The extension of the serif, usually located at the top of letters.</div>
                              </div>
                          </div>
                          <div class="spacer--small flex-h-center">
                              <div class="column--one-fourth">
                                  <img src="/static/images/letter-form-anatomy/11-en-finial.svg" alt="FInial">
                              </div>
                              <div class="column--three-fourths">
                                  <div class="bold caps">Finial/End Stroke</div>
                                  <div class="serif caption--max-width">An unstylized way of ending the last stroke.</div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
      </transition>
<!--END VIEW ALL-->
        </div>
      </div>
</template>

<script>
  import LetterFormScroll from './LetterFormAnatomyScroll'
  
  export default {
    name: 'LetterFormToggle',
    props: {
      tabs: Object,
      currentTab: String,
    },
    components: {
      LetterFormScroll
    }
  }
</script>

<style scoped>
  .fade-leave-active {
    overflow: hidden;
    opacity: 1;
    transition: opacity 0.4s;
  }

  .fade-enter-active {
    overflow: hidden;
    opacity: 1;
    transition: opacity 2s;
  }

  .fade-enter, .fade-leave-to {
    opacity: 0;
  }
</style>
