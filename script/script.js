const { createApp } = Vue;

createApp({
  data() {
    return {
      message: "Hello Vue!",
      todolist: [],
      url: "./server.php",
    };
  },
  methods: {
    getToDo() {
      axios.get(this.url).then((res) => {
        console.log(res.data);
        this.todolist = res.data;
      });
    },
  },
  mounted() {
    this.getToDo();
  },
}).mount("#app");
