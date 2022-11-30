const { createApp } = Vue;

createApp({
  data() {
    return {
      newToDoText: "",
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
    addToDo() {
      const data = {
        newToDoText: this.newToDoText,
      };
      axios
        .post(this.url, data, {
          headers: { "Content-Type": "multipart/form-data" },
        })
        .then((res) => {
          console.log(res.data);
          this.getToDo();
          this.newToDoText = "";
        });
    },
  },
  mounted() {
    this.getToDo();
  },
}).mount("#app");
