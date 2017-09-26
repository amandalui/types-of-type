<template>
    <div class="content--first lightpink clear show-small">
        <div class="hscroll-container">
          <div style="flex: 0 0 auto;">
            <img class="spacer--medium" src="/static/images/letter-form-anatomy/kr-anatomy.svg" alt="Korean Letter-form Anatomy">
          </div>
        </div>
        <div class="hscroll-container">
          <div style="flex: 0 0 auto;">
            <img class="spacer--medium" src="/static/images/letter-form-anatomy/en-anatomy.svg" alt="English Letter-form Anatomy">
          </div>
        </div>
    </div>
</template>

<style scope>
  .hscroll-container {
  width: 64%;
  margin: 0 auto;
  }
  
  .hscroll-container img {
    width: 100%;
  }

  @media (max-width: 768px) {
  .show-small {

    }
    
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
</style>

<script>
  export default {
    name: 'LetterFormScroll'
  }
</script>

<script>

</script>