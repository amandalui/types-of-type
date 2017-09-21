<template>
  <footer class="caption">
      <div class="center">
        &copy; 2013&ndash;{{ endYear }}  Amanda Lui
      </div>
  </footer>
</template>

<script>
  export default {
    name: 'app-footer',
    data () {
      const now = new Date().getYear()
      const endYear = now < 1900 ? now + 1900 : now
      return {
        endYear
      }
    }
  }
</script>
