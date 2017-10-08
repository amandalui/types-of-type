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
        <type-category
           v-for="(category, idx) in categories"
           :key="category.id"
           :category="category"
           :isLast="idx === categories.length - 1"
           >
        </type-category>
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
  import { categories } from '@/data/type-categories.json'
  import TypeCategory from '@/components/TypeCategory'
  export default {
    name: 'type-categories',
    data () {
      return {
        categories
      }
    },
    components: {
      TypeCategory,
    },
  }
</script>
