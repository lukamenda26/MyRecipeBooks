import Vue from 'vue'
import ScoreStars from './components/ScoreStars.vue'
require('./bootstrap');


// HTMLをloadしたタイミングで発火させるeventを設定
// loadイベントを追加ver.

window.addEventListener('load', () => {
    const vueElement = document.querySelector('#vue');
    if (vueElement == null) return;
    const vue = new Vue({
      el: '#vue',
      components: {
          'score-stars': ScoreStars
      }
    })
  })