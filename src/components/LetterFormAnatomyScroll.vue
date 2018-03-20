<template>
    <div class="content show-small ">
      <transition name="fade">
        <div
          v-if="currentTab === tabs.korean || currentTab === tabs.all"
          class="horizontal-scroll-container"
        >
          <div class="horizontal-scroll-wrapper">
            <div>
              <img src="/static/images/letter-form-anatomy/kr-anatomy.svg" alt="Korean Letter-form Anatomy">
            </div>
          </div>
        </div>
      </transition>
      <transition name="fade">
        <div
          v-if="currentTab === tabs.english || currentTab === tabs.all"
          class="horizontal-scroll-container"
        >
          <div class="horizontal-scroll-wrapper">
            <div>
              <img src="/static/images/letter-form-anatomy/en-anatomy.svg" alt="English Letter-form Anatomy">
            </div>
          </div>
        </div>
      </transition>
    </div>
</template>

<style scoped>
  .fade-leave-active {
    max-height: 500px;
    opacity: 1;
    overflow: hidden;
    transition: opacity .5s, max-height .5s;
  }

  .fade-enter-active {
    max-height: 500px;
    opacity: 1;
    overflow: hidden;
    transition: opacity 1.5s, max-height .5s;
  }

  .fade-enter, .fade-leave-to {
    opacity: 0;
    max-height: 0px;
    overflow: hidden;
  }

  .horizontal-scroll-container {
    width: 50%;
    margin: 0 auto;
  }
  
  .horizontal-scroll-container img {
    width: 100%;
  }
  
  @media (min-width: 1500px) {
    .horizontal-scroll-container img {
    width: 70%;
    padding: 0 15%;
    }
  }

  @media (max-width: 768px) {
    .horizontal-scroll-container {
      width: 100%;
      overflow: hidden;
    }
  }

  /*
  @media (max-width: 768px) {
    .horizontal-scroll-container {
      width: 100%;
      height: 400px;
      overflow: hidden;
    }

    .horizontal-scroll-container ::-webkit-scrollbar { 
      display: none; 
    }

    .horizontal-scroll-wrapper {
      height: 0;
      overflow-y: auto;
      overflow-x: hidden;
      transform: rotate(-90deg);
      transform-origin: right top;

      width: 1500px;
      transform:rotate(-90deg) translateY(-1500px);
      padding: 1500px 0 0 0;
    }

    .horizontal-scroll-wrapper > div {
      width: 1500px;
      height: calc(1500px - 400px);
      transform: rotate(90deg);
      transform-origin: right top;
    }
  }
  */

  /*

  @media (max-width: 768px) {
      
    .hscroll-container {
      width: 100%; display: flex;
      flex-wrap: nowrap;
      overflow-x: auto;

      -webkit-overflow-scrolling: touch;
      -ms-overflow-style: -ms-autohiding-scrollbar;
    }
    
    .hscroll-container img {
      width: 300%;
      padding: 0 0 50px 10%;
      text-align: left;
    }
  }
  */
</style>

<script>
  export default {
    name: 'LetterFormScroll',
    props: {
      tabs: Object,
      currentTab: String,
    }
  }
</script>
