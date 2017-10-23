<template>
  <div id="header">
    <nav class="z4">
      <div class="column--one-third">
        <router-link @click.native="closeMenu" to="/">
          <img class="nav__logo" src="/static/images/types-of-type-horizontal.svg">
        </router-link>
      </div>
      <div class="column--one-third center relative ">
        <img class="pointer nav--button" @click="toggleMenu" src="/static/images/nav-button.png">
        <transition name="drop">
          <div
            class="dropdown"
            v-if="menuIsOpen"
            v-cloak
          >
            <app-menu @select="closeMenu">
            </app-menu>
          </div>
        </transition>
      </div>
      <div class="column--one-third right nav--top bold">
        <router-link @click.native="closeMenu" to="/about">About</router-link>
      </div>
    </nav>
  </div>
</template>

<script>
  import AppMenu from '@/components/AppMenu'

  export default {
    name: 'app-header',
    data () {
      return { menuIsOpen: false }
    },
    methods: {
      toggleMenu () {
        this.menuIsOpen = !this.menuIsOpen
        document.body.style.overflow = this.menuIsOpen ? 'hidden' : 'scroll'
      },
      closeMenu () {
        if (this.menuIsOpen) {
          this.menuIsOpen = false
          document.body.style.overflow = 'scroll'
        }
      }
    },
    components: {
      AppMenu
    }
  }
</script>
