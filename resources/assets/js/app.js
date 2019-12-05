
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));


// jsがロードされるタイミングで#appのelementの存在チェックを行って、
// html上になければ、処理を中断すれば良いです
// 動作環境を作れなかったので、稼働確認はできていません。。。
window.addEventListener('load', () => {
  const vueElement = document.querySelector('#app');
  if (vueElement == null) return;
  const app = new Vue({
    el: '#app'
  });
})
