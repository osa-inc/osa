import Vue from 'vue'
import Resource from 'vue-resource'
import App from './App'
import Vuex from 'vuex'

Vue.use(Resource)
Vue.use(Vuex)

/* eslint-disable no-new */
new Vue({
  el: '#app',
  render: h => h(App)
})
