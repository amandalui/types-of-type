<template>
  <div class="spacer--small">
    <div class="expressive-wrapper spacer--medium flex"> 
      <div class="pointer column--et-refresh button--refresh center" @click="animate">
        <img src="/static/images/expressive-type/refresh.svg" alt="refresh">
      </div>
      <expressive-type-sub-section
        :name="kr.name"
        :alt="name"
        :lang="'kr'"
        :texts="texts"
        :type-index="typeIndex"
        :bus="bus"
        :blurring="blurring"
      >
      </expressive-type-sub-section>
      <expressive-type-sub-section
        :name="en.name"
        :alt="name"
        :lang="'en'"
        :texts="texts"
        :type-index="typeIndex"
        :bus="bus"
        :blurring="blurring"
      >
      </expressive-type-sub-section>
    </div>
    <div class="clear" :class="!isLast && 'rule spacer--medium'"></div>
  </div>
</template>

<script>
  import Vue from 'vue'
  import ExpressiveTypeSubSection from './ExpressiveTypeSubSection'

  const bus = new Vue()

  // TODO: Write emitter to type-sub-section

  export default {
    name: 'expressive-type-section',
    props: {
      blurring: Boolean,
      name: String,
      en: Object,
      kr: Object,
      texts: Array,
      typeIndex: Number,
      isLast: Boolean
    },
    data () {
      return { bus }
    },
    methods: {
      animate () {
        this.bus.$emit(`${this.typeIndex}`)
      }
    },
    components: {
      ExpressiveTypeSubSection
    }
  }
</script>
