<style>
  [v-cloak] {
    display: none;
  }
  .pointer {
    cursor: pointer;
  }
  .relative {
    position: relative;
  }
  .z4 { z-index: 4 }
  .z0 { z-index: 0 }
  .dropdown {
    width: 80vw;
    left: -24vw;
    position: absolute;
    top: 50px;
    height: 100vh;
    background-color: #333;
    transition: opacity 300ms;
    
  }
  @media (max-width: 768px) {
    .dropdown {
      width: 90vw;
      left: -29vw;
    }
  }
  .drop-enter-active, .drop-leave-active {
    transition: top .3s
  }
  .drop-enter, .drop-leave-to {
    top: -100vh
  }
</style>

<div id="header">
  <nav class="z4">
    <div class="column--one-third"><a href="/"><img class="nav__logo" src="images/types-of-type-horizontal.svg"></a></div>
    <div class="column--one-third center relative">
      <img class="pointer" @click="toggleMenu" src="images/nav-button.png">
      <transition name="drop">
        <div
          class="dropdown"
          v-if="menuIsOpen"
          v-cloak
        >
          <? include('includes/menu.php'); ?>
        </div>
      </transition>
    </div>
    <div class="column--one-third right"><a href="/about.php">About / Credits</a></div>
  </nav>
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
