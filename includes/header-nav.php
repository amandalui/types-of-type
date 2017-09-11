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
          <?php include('includes/menu.php'); ?>
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
