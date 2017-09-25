<template>
  <div class="menu column--single dark">
    <div class="column--half-static">
      <h3 class="caps center">The Basics</h3>
      <div class="menu__item">
        <router-link @click.native="select" to="origins-of-type">
          <img src="/static/images/menu/menu--origins-of-type.png"><br />
          <div class="column--three-fourths menu__title">Origins of Type</div>
          <div class="column--one-fourth right">1-1</div>
        </router-link>
      </div>
      <div class="menu__item">
        <router-link @click.native="select" to="hangul-blocks">
          <img src="/static/images/menu/menu--hangul-blocks.png"><br />
          <div class="column--three-fourths menu__title">Hangul Blocks</div>
          <div class="column--one-fourth right">1-2</div>
        </router-link>
      </div>
      <div class="menu__item">
        <router-link @click.native="select" to="letter-form-anatomy">
          <img src="/static/images/menu/menu--letter-form-anatomy.png"><br />
          <div class="column--three-fourths menu__title">Letter-form Anatomy</div>
          <div class="column--one-fourth right">1-3</div>
        </router-link>
      </div>
      <div class="menu__item">
        <router-link @click.native="select" to="type-categories">
          <img src="/static/images/menu/menu--type-categories.png"><br />
          <div class="column--three-fourths menu__title">Type Categories</div>
          <div class="column--one-fourth right">1-4</div>
        </router-link>
      </div>
    </div>
    <div class="column--half-static">
      <h3 class="caps center">Connotative</h3>
      <div class="menu__item">
        <router-link @click.native="select" to="italics-dashes">
          <img src="/static/images/menu/menu--dashes.png"><br />
          <div class="column--three-fourths menu__title">Italcs, -, &ndash;, &mdash;, and &tilde;</div>
          <div class="column--one-fourth right">2-1</div>
        </router-link>
      </div>
      <div class="menu__item">
        <router-link @click.native="select" to="emoticons-text">
          <img src="/static/images/menu/menu--emoticons-abbreviations.png"><br />
          <div class="column--three-fourths menu__title">Emoticons &amp; Text</div>
          <div class="column--one-fourth right">2-2</div>
        </router-link>
      </div>
      <div class="menu__item">
        <router-link @click.native="select" to="expressive-type">
          <img src="/static/images/menu/menu--expressive-type.png"><br />
          <div class="column--three-fourths menu__title">Expressive Type</div>
          <div class="column--one-fourth right">2-3</div>
        </router-link>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    name: 'app-menu',
    methods: {
      select () {
        this.$emit('select')
      }
    }
  }
</script>
