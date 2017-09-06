<style>
  [v-cloak] {
    display: none;
  }
  #header > nav {
    z-index: 4;
  }
  .pointer {
    cursor: pointer;
  }
  .full-screen {
    z-index: 3;
    position: fixed;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
    background-color: #333;
    transition: opacity 300ms;
  }
  .fade-enter-active, .fade-leave-active {
    transition: opacity .3s
  }
  .fade-enter, .fade-leave-to {
    opacity: 0
  }
</style>

<div id="header">
  <nav>
    <div class="column--one-third"><a href="/"><img class="nav__logo" src="images/types-of-type-horizontal.svg"></a></div>
    <div class="column--one-third center"><img class="pointer" @click="toggleMenu" src="images/nav-button.png"></div>
    <div class="column--one-third right"><a href="/about.php">About / Credits</a></div>
  </nav>

  <transition name="fade">
    <div
      class="full-screen"
      v-if="menuIsOpen"
      v-cloak
    >
      <? include('includes/menu.php'); ?>
    </div>
  </transition>
</div>

<script>
  new Vue({
    el: '#header',
    data: { menuIsOpen: false },
    methods: {
      toggleMenu() {
        this.menuIsOpen = !this.menuIsOpen
        document.body.style.overflow = this.menuIsOpen ? 'hidden' : 'scroll'
      }
    }
  })
</script>
