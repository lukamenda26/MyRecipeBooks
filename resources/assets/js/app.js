import Vue from 'vue'

require('./bootstrap');


// HTMLをloadしたタイミングで発火させるeventを設定
// loadイベントを追加ver.

window.addEventListener('load', () => {
    const vueElement = document.querySelector('#vue');
    if (vueElement == null) return;
    const vue = new Vue({
      el: '#vue',
      data: {
          score: 5
      },
      computed: {
          showStar: function() {
              if (this.score == 5) {
                  return "★★★★★"
              } else if (this.score == 4) {
                  return "★★★★"
              } else if (this.score == 3) {
                  return "★★★"
              } else if (this.score == 2) {
                  return "★★"
              } else {
                  return "★"
              }
          }
      }
    })
  })