<template id="face-features-template">
  <div>
    <div
      v-for="option in feature.options"
      class="dib pointer m1r"
      v-bind:class="{ 'bg-black white': option === feature.active }"
      @click="changeOption(option)">
      {{ option }}
    </div>
  </div>
</template>

<div id="faces-app" class="center tc cf">
  <div class="left w6 dib tc br">
    <face-features v-on:change="change" :feature="koreanEye"></face-features>
    <div class="f3">{{ koreanEye.active }}{{ koreanMouth.active }}{{ koreanEye.active }}</div>
    <face-features v-on:change="change" :feature="koreanMouth"></face-features>
  </div>
  <div class="right w6 dib tc">
    <face-features v-on:change="change" :feature="englishEyes"></face-features>
    <div class="f3">{{ englishEyes.active }} {{ englishMouth.active }}</div>
    <face-features v-on:change="change" :feature="englishMouth"></face-features>
  </div>
</div>

<script>
  Vue.component('face-features', {
    template: '#face-features-template',
    props: {
      feature: Object      
    },
    methods: {
      changeOption(option) {
        this.$emit('change', this.feature.name, option)
      }
    }
  })

new Vue({
  el: '#faces-app',
  data: {
    englishEyes: {
      name: 'englishEyes',
      options: [':', ';', 'X', '>:'],
      active: ':'
    },
    englishMouth: {
      name: 'englishMouth',
      options: [')', 'O', 'D', 'P'],
      active: ')'   
    },
    koreanEye: {
      name: 'koreanEye',
      options: ['ㅇ', '^', '-', '$'],
      active: 'ㅇ',
    },
    koreanMouth: {
      name: 'koreanMouth',
      options: ['ㅂ', 'ㅁ', 'ㅅ', '-'],
      active: 'ㅁ'
    }
  },
  methods: {
    change(feature, option) {
      this[feature].active = option 
    }      
  }
})
</script>

<style>
:root {
  --width-1: 16px;
  --width-2: 24px;
  --width-3: 32px;
  --width-4: 60px;
  --width-5: 100px;
  --width-6: 150px;

  --spacing-1: 16px;
  --spacing-2: 24px;
  --spacing-3: 32px;
  --spacing-4: 60px;
  --spacing-5: 100px;
}

  /* TODO: Change names so it doesn't collide with main stylesheet */
  .center {
    margin-right: auto;
    margin-left: auto;
  }

  .tc { text-align: center; }

  .w5 { width: var(--width-5); }
  .w6 { width: var(--width-6); }

  .dib { display: inline-block; }

  .cf {
    zoom: 1;
  }

  .cf:before, .cf:after {
    content: ' ';
    display: table;
  }

  .cf:after {
    clear: both;
  }

  .pointer {
    cursor: pointer;
  }

  .m1r {
    margin-right: var(--spacing-1);
  }

  .br {
    border-right: solid;
    border-right-width: .125rem;
  }

  .f1 { font-size: 3rem; }
  .f2 { font-size: 2.25rem; }
  .f3 { font-size: 1.5rem; }
  .f4 { font-size: 1.25rem; }
  .f5 { font-size: 1rem; }
  .f6 { font-size: .875rem; }
  .f7 { font-size: .75rem; }

  .bg-black { background-color: black; }

  .white { color: white; }
</style>
