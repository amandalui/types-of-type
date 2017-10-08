<template>
  <div>
    <v-touch
      @tap="changeOption(option)"
      v-for="option in feature.options"
      :key="option.name"
      class="dib pointer m1r"
      :class="{ 'white': option === feature.active }">
      {{ option }}
    </v-touch>
  </div>
</template>

<script>
  export default {
    name: 'face-features',
    props: {
      feature: Object
    },
    methods: {
      changeOption (option) {
        this.$emit('change', this.feature.name, option)
      }
    }
  }
</script>
