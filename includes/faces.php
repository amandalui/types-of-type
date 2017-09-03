<div id="faces-app" class="center-align center cf">
  <div class="left dib column--half-br center kr-sans">
    <div
      v-for="value in koreanEyeOptions"
      v-bind:class="{ 'white': value === koreanEye }"
      class="dib pointer m1r"
      @click="koreanEye = value"
    >
      {{ value }}
    </div>
    <div class="faces-display spacer--medium center">{{ koreanEye }}{{ koreanMouth }}{{ koreanEye }}</div>
    <div
      v-for="value in koreanMouthOptions"
      v-bind:class="{ 'white': value === koreanMouth }"
      class="dib pointer m1r"
      @click="koreanMouth = value">
    
      {{ value }}
    </div>
  </div>
  <div class="dib column--half-br center">
    <div
      v-for="value in englishEyesOptions"
      v-bind:class="{ 'white': value === englishEyes }"
      class="dib pointer m1r"
      @click="englishEyes = value">
      {{ value }}
    </div>
    <div class="faces-display spacer--medium center">{{ englishEyes }} {{ englishMouth }}</div>
    <div
      v-for="value in englishMouthOptions"
      class="dib pointer m1r"
      v-bind:class="{ 'white': value === englishMouth }"
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
      koreanEyeOptions: ['ㅠ', 'ㅇ', 'ㅎ', '^'],
      koreanMouthOptions: ['_', 'ㅁ', 'ㅂ', 'ㅅ'],
      koreanEye: 'ㅠ',
      koreanMouth: '_'
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
</style>
