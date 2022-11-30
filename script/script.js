const { createApp } = Vue;

createApp({
  data() {
    return {
      message: "Hello Vue!",
    };
  },
  methods: {
    getToDo(){
      console.log('ciao');
    }
  },
  mounted() {
    this.getToDo();
  },
}).mount("#app");
