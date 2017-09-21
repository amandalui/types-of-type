/* eslint-disable */
import Vue from 'vue'
import Router from 'vue-router'
import Meta from 'vue-meta'
import Home from '@/pages/Home'
import About from '@/pages/About'
import OriginsOfType from '@/pages/OriginsOfType'
import ItalicsDashes from '@/pages/ItalicsDashes'
import HangulBlocks from '@/pages/HangulBlocks'
import EmoticonsAbbreviations from '@/pages/EmoticonsAbbreviations'
import LetterFormAnatomy from '@/pages/LetterFormAnatomy'
import ExpressiveType from '@/pages/ExpressiveType'
import TypeCategories from '@/pages/TypeCategories'

Vue.use(Router)
Vue.use(Meta)

export default new Router({
  mode: 'history',
  scrollBehavior(to, from, savedPosition) {
    return { x: 0, y: 0 }
  },
  routes: [
    {
      path: '/',
      name: 'Home',
      component: Home,
    },
    {
      path: '/about',
      name: 'About',
      component: About,
    },
    {
      path: '/origins-of-type',
      name: 'Origins of Type',
      component: OriginsOfType,
    },
    {
      path: '/italics-dashes',
      name: 'Italics Dashes',
      component: ItalicsDashes,
    },
    {
      path: '/hangul-blocks',
      name: 'Hangul Blocks',
      component: HangulBlocks,
    },
    {
      path: '/emoticons-abbreviations',
      name: 'Emoticons & Abbreviations',
      component: EmoticonsAbbreviations,
    },
    {
      path: '/letter-form-anatomy',
      name: 'Letter Form Anatomy',
      component: LetterFormAnatomy,
    },
    {
      path: '/expressive-type',
      name: 'Expressive Type',
      component: ExpressiveType,
    },
    {
      path: '/type-categories',
      name: 'Type Categories',
      component: TypeCategories,
    },
  ],
})
