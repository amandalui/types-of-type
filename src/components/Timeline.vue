<template>
  <div>
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
    <div class="text--blue">
      <milestone
             :key="lastMilestone.title"
             :milestone="lastMilestone"
             :scrollBottom="scrollBottom"
             >
      </milestone>
    </div>
  </div>
</template>

<script>
  import { throttle } from 'lodash/fp'
  import { milestones } from '@/data/timeline.json'
  import Milestone from './Milestone'

  const SCROLL_BOTTOM_OFFSET_RATIO = 0.2

  function getScrollBottom () {
    return window.scrollY + window.innerHeight - window.innerHeight * SCROLL_BOTTOM_OFFSET_RATIO
  }

  export default {
    name: 'timeline',
    data () {
      return {
        milestones: milestones.slice(0, -1),
        lastMilestone: milestones.slice(-1)[0],
        scrollBottom: 0,
      }
    },
    mounted () {
      this.updateScrollBottom = throttle(100, this.updateScrollBottom)
      setTimeout(() => this.updateScrollBottom(), 500)
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

