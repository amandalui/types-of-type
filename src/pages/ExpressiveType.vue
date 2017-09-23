<template> 
  <div>
    <div class="header-wrap clear">
      <div class="header-container">
          <div class="header-section-title-conno caps rotate">
            Connotatives
          </div>
          <div class="header-content">
              <span class="header-section-number">2&ndash;3</span>
              <h1>Expressive Type</h1>
              <p class="header-section-desc">These typefaces are the divas of typography. Each one is connotative of mood, feeling, place, and/or time.</p>
          </div>
      </div>
    </div>
      
    <!-- SIDE NAV -->
    <div class="side-nav side-nav-left center">
        <div class="rotate link--darkpink">
            <router-link to="/emoticons-text">&#9650;<br />Emoticons &amp; Text</router-link>
        </div>
    </div>
    <div class="side-nav side-nav-right center">
        <div class="rotate link--darkpink">
            <router-link to="/about">About / Credits<br />&#9660;</router-link>
        </div>
    </div>

    <!-- CONTENT -->
    <div class="content--first lightpink text--darkgreen clear">
      <expressive-type-animations></expressive-type-animations>
      <div class="clear"></div>
      <div class="spacer--medium center link--end">
        <router-link class="caps" to="/about">About / Credits</router-link>
      </div>  
    </div> 
  </div>
</template>

<script>
import ExpressiveTypeAnimations from '@/components/ExpressiveTypeAnimations'

export default {
  name: 'expressive-type',
  data () {
    return {}
  },
  components: {
    ExpressiveTypeAnimations
  }
}
</script>
