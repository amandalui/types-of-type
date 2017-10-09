<template>
  <div>
    <div class="spacer--small">
      <h2 class="caps center text--light spacer--tiny">
        {{category.name}}
      </h2>
      <div class="column--half-br-fluid center">
        <h3 class="text--light bold">
          {{category.korean.subCategory.english}}
          <span class="kr-sans">
            {{category.korean.subCategory.korean}}
          </span>
        </h3>
        <div class="relative">
          <img
            class="absolute show-hover spacer--tiny"
            :src="`/static/images/type-categories/${category.id}-kr-hover.svg`"
            :alt="`Korean ${category.name}`">
          </img>
          <img
            class="spacer--tiny"
            :src="`/static/images/type-categories/${category.id}-kr.svg`"
            :alt="`Korean ${category.name}`">
          </img>
        </div>
        <br/>
        <span class="text--light caption caps">Typeface</span>
        <br/>
        <span class="caps bold text--lightpink">
          {{category.korean.typeface}}
        </span>
        <p class="column--single serif caption--max-width text--darkgreen left spacer--small">
          {{category.korean.description}}
        </p>
      </div>
      <div class="column--half-br-fluid center">
        <h3 class="text--light bold">
          {{category.english.subCategory}}
        </h3>
        <div class="relative">
          <img
            class="absolute show-hover spacer--tiny"
            :src="`/static/images/type-categories/${category.id}-en-hover.svg`"
            :alt="`English ${category.name}`">
          </img>
          <img
            class="spacer--tiny"
            :src="`/static/images/type-categories/${category.id}-en.svg`"
            :alt="`English ${category.name}`">
          </img>
        </div>
        <br/>
        <span class="text--light caption caps">Typeface</span>
        <br />
        <span class="caps bold text--lightpink">
          {{category.english.typeface}}
        </span>
        <p class="column--single serif caption--max-width text--darkgreen left spacer--small">
          {{category.english.description}}
        </p>
      </div>
    </div>
    <div
      v-if="!isLast"
      class="clear rule spacer--medium"
      >
    </div>
  </div>
</template>

<script>
  export default {
    props: {
      isLast: Boolean,
      category: {
        id: String,
        name: String,
        korean: {
          subCategory: {
            english: String,
            korean: String,
          },
          typeface: String,
          description: String,
        },
        english: {
          subCategory: String,
          typeface: String,
          description: String,
        }
      }
    }
  }
</script>

<style scoped>
.relative {
  position: relative;
}
.absolute {
  position: absolute;
  top: 0;
  left: 0;
}
.show-hover {
  opacity: 0;
  transition: opacity 0.6s;
}
.show-hover:hover,
.show-hover:focus {
  opacity: 1;
}
</style>
