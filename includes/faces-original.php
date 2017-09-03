<div id="faces-app" class="center tc cf">
  <div class="left w6 dib tc br">
    <div
      v-for="value in koreanEyeOptions"
      v-bind:class="{ 'bg-black white': value === koreanEye }"
      class="dib pointer m1r"
      @click="koreanEye = value"
    >
      {{ value }}
    </div>
    <div class="f3">{{ koreanEye }}{{ koreanMouth }}{{ koreanEye }}</div>
    <div
      v-for="value in koreanMouthOptions"
      v-bind:class="{ 'bg-black white': value === koreanMouth }"
      class="dib pointer m1r"
      @click="koreanMouth = value">
    
      {{ value }}
    </div>
  </div>
  <div class="right w6 dib tc">
    <div
      v-for="value in englishEyesOptions"
      v-bind:class="{ 'bg-black white': value === englishEyes }"
      class="dib pointer m1r"
      @click="englishEyes = value">
      {{ value }}
    </div>
    <div class="f3">{{ englishEyes }} {{ englishMouth }}</div>
    <div
      v-for="value in englishMouthOptions"
      class="dib pointer m1r"
      v-bind:class="{ 'bg-black white': value === englishMouth }"
      @click="englishMouth = value"
    >
      {{ value }}
    </div>
  </div>
</div>

<script>
  new Vue({
    el: '#faces-app',
    data: {
      englishEyesOptions: [':', ';', 'X', '>:'],
      englishMouthOptions: [')', 'O', 'D', 'P'],
      englishEyes: ':',
      englishMouth: ')',
      koreanEyeOptions: ['ㅇ', '^', '-', '$'],
      koreanMouthOptions: ['ㅂ', 'ㅁ', 'ㅅ', '-'],
      koreanEye: 'ㅇ',
      koreanMouth: 'ㅁ'
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

  /* TODO: Change name so it doesn't collide with main stylesheet */
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
