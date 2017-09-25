<template>
  <div>
    <div class="timeline text--blue img--100">
      <h3 class="column--half caps center timeline-descriptor">Korean</h3>
      <h3 class="column--half caps center timeline-descriptor">English</h3>
      <div class="clear"></div>
      <milestone
           v-for="milestone in milestones"
           :key="milestone.title"
           :milestone="milestone"
           :scrollBottom="scrollBottom"
           >
      </milestone>
      </div>
    </div>
  </div>
</template>

<script>
  import { milestones } from '@/data/timeline.json'
  import Milestone from './Milestone'

  const SCROLL_BOTTOM_OFFSET = 200

  function getScrollBottom () {
    return window.scrollY + window.innerHeight - SCROLL_BOTTOM_OFFSET
  }

  export default {
    name: 'timeline',
    data () {
      return {
        milestones,
        scrollBottom: getScrollBottom(),
      }
    },
    mounted () {
      this.updateScrollBottom()
      window.addEventListener('scroll', this.updateScrollBottom)
      window.addEventListener('resize', this.updateScrollBottom)
    },
    destroyed () {
      window.removeEventListener('scroll', this.updateScrollBottom)
      window.removeEventListener('resize', this.updateScrollBottom)
    },
    methods: {
      updateScrollBottom () {
        this.scrollBottom = getScrollBottom()
      },
    },
    components: {
      Milestone
    },
  }
</script>

