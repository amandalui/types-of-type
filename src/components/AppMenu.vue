<template>

  <div class="menu column--single">

    <div class="menu__section_title">The Basics</div>

    <router-link @click.native="select" to="origins-of-type">
      <div class="menu__item">
        <div class="menu__left">
          <div class="menu__icon">
            <img src="/static/images/menu/ic-origins-of-type.png">
          </div>
          <div class="menu__title">
              Origins of Type
          </div>
        </div>
        <div class="menu__arrow">
          &rarr;
        </div>
      </div>
    </router-link>

    <div class="spacer--small clear"></div>

    <router-link @click.native="select" to="hangul-blocks">
      <div class="menu__item">
        <div class="menu__left">
          <div class="menu__icon">
            <img src="/static/images/menu/ic-hangul-blocks.png">
          </div>
          <div class="menu__title">
              Hangul Blocks
          </div>
        </div>
        <div class="menu__arrow">
          &rarr;
        </div>
      </div>
    </router-link>

    <div class="spacer--small clear"></div>

    <router-link @click.native="select" to="letter-form-anatomy">
      <div class="menu__item">
        <div class="menu__left">
          <div class="menu__icon">
            <img src="/static/images/menu/ic-letter-form-anatomy.png">
          </div>
          <div class="menu__title">
              Letter-form Anatomy
          </div>
        </div>
        <div class="menu__arrow">
          &rarr;
        </div>
      </div>
    </router-link>

    <div class="spacer--small clear"></div>

    <router-link @click.native="select" to="type-categories">
      <div class="menu__item">
        <div class="menu__left">
          <div class="menu__icon">
            <img src="/static/images/menu/ic-type-categories.png">
          </div>
          <div class="menu__title">
              Type Categories
          </div>
        </div>
        <div class="menu__arrow">
          &rarr;
        </div>
      </div>
    </router-link>

    <div class="spacer--small clear"></div>

    <div class="menu__section_title">Connotative</div>

    <router-link @click.native="select" to="italics-dashes">
      <div class="menu__item">
        <div class="menu__left">
          <div class="menu__icon">
            <img src="/static/images/menu/ic-italics-dashes.png">
          </div>
          <div class="menu__title">
            Italics, -, &ndash;, &mdash;, and &tilde;
          </div>
        </div>
        <div class="menu__arrow">
          &rarr;
        </div>
      </div>
    </router-link>

    <div class="spacer--small clear"></div>

    <router-link @click.native="select" to="emoticons-text">
      <div class="menu__item">
        <div class="menu__left">
          <div class="menu__icon">
            <img src="/static/images/menu/ic-emoticons-text.png">
          </div>
          <div class="menu__title">
            Emoticons &amp; Text
          </div>
        </div>
        <div class="menu__arrow">
          &rarr;
        </div>
      </div>
    </router-link>

    <div class="spacer--small clear"></div>

    <router-link @click.native="select" to="expressive-type">
      <div class="menu__item">
        <div class="menu__left">
          <div class="menu__icon">
            <img src="/static/images/menu/ic-expressive-type.png">
          </div>
          <div class="menu__title">
            Expressive Type
          </div>
        </div>
        <div class="menu__arrow">
          &rarr;
        </div>
      </div>
    </router-link>

    <div class="spacer--small"></div>
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
