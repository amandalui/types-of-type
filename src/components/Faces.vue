<template>
  <div id="faces-app" class="center-align center cf spacer--small">
    <div class="column--half-br dib center kr-sans">
      <face-features @change="change" :feature="koreanEye"></face-features>
      <div class="faces-display spacer--small">{{ koreanEye.active }}{{ koreanMouth.active }}{{ koreanEye.active }}</div>
      <face-features @change="change" :feature="koreanMouth"></face-features>
    </div>
    <div class="column--half-br dib center en-faces">
      <face-features @change="change" :feature="englishEyes"></face-features>
      <div class="faces-display spacer--small">{{ englishEyes.active }} {{ englishMouth.active }}</div>
      <face-features @change="change" :feature="englishMouth"></face-features>
    </div>
  </div>
</template>

<script>
  import FaceFeatures from './FaceFeatures'

  export default {
    name: 'faces',
    data () {
      return {
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
          options: ['ㅠ', 'ㅇ', 'ㅎ', '^'],
          active: 'ㅠ'
        },
        koreanMouth: {
          name: 'koreanMouth',
          options: ['ㅡ', 'ㅁ', 'ㅂ', 'ㅅ'],
          active: 'ㅡ'
        }
      }
    },
    mounted () {
      this.autoplayFeatures(2, 300) // 2 times, 300ms interval
    },
    methods: {
      change (feature, option) {
        if (!this.autoplayDone) return // disable manual change until autoplay finishes
        this[feature].active = option
      },
      autoplayFeatures (timesPerFeature = 2, interval = 300) {
        const eyeFeatures = ['englishEyes', 'koreanEye']
        const mouthFeatures = ['englishMouth', 'koreanMouth']

        const totalSteps = this.englishEyes.options.length * timesPerFeature
        let count = 0

        const loop = setInterval(() => {
          // Update eyes first
          eyeFeatures.forEach(f => {
            const feature = this[f]
            const currentIndex = feature.options.indexOf(feature.active)
            const nextIndex = (currentIndex + 1) % feature.options.length
            feature.active = feature.options[nextIndex]
          })

          // Then update mouths with a slight delay (e.g., 150ms)
          setTimeout(() => {
            mouthFeatures.forEach(f => {
              const feature = this[f]
              const currentIndex = feature.options.indexOf(feature.active)
              const nextIndex = (currentIndex + 1) % feature.options.length
              feature.active = feature.options[nextIndex]
            })
          }, 150)

          count++
          if (count >= totalSteps) {
            clearInterval(loop)
            this.autoplayDone = true
          }
        }, interval)
      }
    },
    // methods: {
    //   change (feature, option) {
    //     this[feature].active = option
    //   }
    // },
    components: {
      FaceFeatures
    }
  }
</script>

<style scoped>
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

  .center-align {
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

  .f1 { font-size: 3rem; }
  .f2 { font-size: 2.25rem; }
  .f3 { font-size: 1.5rem; }
  .f4 { font-size: 1.25rem; }
  .f5 { font-size: 1rem; }
  .f6 { font-size: .875rem; }
  .f7 { font-size: .75rem; }

  .bg-black { background-color: black; }

  .white { color: white; }
    
  .bg-white { background-color: white; }
</style>
