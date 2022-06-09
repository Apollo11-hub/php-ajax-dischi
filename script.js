
const app = new Vue({
  el: '#app',
  data: {

  },
  
  mounted() {
    this.getApi()
  },

  methods: {
    getApi(){
      console.log('ciao');
    }
  },
})