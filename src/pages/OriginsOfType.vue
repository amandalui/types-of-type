<template>
  <div>

    <div class="header-wrap clear">
        <div class="header-container">
          <div class="header-section-title caps rotate">
            The Basics
          </div>
          <div class="header-content">
            <span class="header-section-number">1&ndash;1</span>
            <h1>Origins of Type</h1>
            <p class="header-section-desc">A history of lines to letters: The Hangul alphabet (Korean alphabet) and the Latin alphabet (English alphabet).</p>
          </div>
        </div>
    </div>
      
    <div class="side-nav side-nav-right center">
        <div class="rotate">
            <router-link to="/hangul-blocks">Hangul Blocks<br />&#9660;</router-link>
        </div>
    </div>

    <div class="content--first split-bg clear">
      <div class="column--single spacer--medium">
        <div class="column--single">  
          <timeline></timeline>
        </div>
      </div>
      <div class="clear"></div>
      <div class="spacer--medium center">
        <router-link class="button caps" to="/hangul-blocks">Next Chapter</router-link>
      </div>
    </div>

  </div>
</template>
    
<script>
  import Timeline from '@/components/timeline'

  export default {
    name: 'origins-of-type',
    data () {
      return {}
    },
    components: {
      Timeline
    }
  }
</script>
