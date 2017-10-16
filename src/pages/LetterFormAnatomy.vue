<template> 
  <div class="dark">

    <div class="header-wrap clear">
      <div class="header-container">
          <div class="header-section-title caps rotate">
            The Basics
          </div>
          <div class="header-content">
              <span class="header-section-number">1&ndash;3</span>
              <h1>Letter-form Anatomy</h1>
              <p class="header-section-desc">What are parts of letters called? Some parts exist in both the English and Korean alphabet&mdash;some don’t.</p>
          </div>
      </div>
    </div>
    
    <div class="side-nav side-nav-left center">
        <div class="rotate link--darkpink">
            <router-link to="/hangul-blocks">&#9650;<br />Hangul Blocks</router-link>
        </div>
    </div>

    <div class="side-nav side-nav-right center">
        <div class="rotate link--darkpink">
            <router-link to="/type-categories">Type Categories<br />&#9660;</router-link>
        </div>
    </div>

    <div class="content--first lightpink">
      <div class="sticky">
        <div class="column--single spacer--medium">
            <div class="column--one-fourth">&nbsp;</div>
            <div class="column--half center text--blue">            
                <div class="center caption caps column--one-third-static">
                  <div
                     @click="() => setTab(tabs.korean)"
                    :class="{ pointer: true, 'button--toggle': true, 'button--toggle-current': currentTab === tabs.korean }"
                  >
                    Korean
                  </div>
                </div>
                <div class="center caption caps column--one-third-static">
                    <div
                      @click="() => setTab(tabs.all)"
                      :class="{ pointer: true, 'button--toggle': true, 'button--toggle-current': currentTab === tabs.all }"
                    >
                      All
                    </div>
                </div>
                <div class="center caption caps column--one-third-static">
                    <div
                      @click="() => setTab(tabs.english)"
                      :class="{ pointer: true, 'button--toggle': true, 'button--toggle-current': currentTab === tabs.english }"
                    >
                      English
                    </div>
                </div>
            </div>
            <div class="column--one-fourth">&nbsp;</div>
        </div>
        <letter-form-scroll :current-tab="currentTab" :tabs="tabs"></letter-form-scroll>  
      </div>
      <letter-form-toggle :current-tab="currentTab" :tabs="tabs"></letter-form-toggle>          
      <div class="clear"></div>
      <div class="spacer--medium center">
          <router-link class="button caps" to="/type-categories">Next Chapter</router-link>
      </div>  
      <div class="spacer--small"></div>
    </div>
  </div>
</template>   

<script>
import LetterFormToggle from '@/components/LetterFormAnatomyToggle'
import LetterFormScroll from '@/components/LetterFormAnatomyScroll'

const tabs = {
  all: 'ALL',
  english: 'ENGLISH',
  korean: 'KOREAN',
}

export default {
  name: 'letter-form-anatomy',
  data () {
    return {
      tabs,
      currentTab: tabs.all,
    }
  },
  methods: {
    setTab (tab) {
      this.currentTab = tab
    }
  },
  components: {
    LetterFormToggle,
    LetterFormScroll
  }
}
</script>
