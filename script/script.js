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
          // this.getToDo();
          this.todolist = res.data;
          this.newToDoText = "";
        });
    },
    deleteTask(i) {
      const data = {
        deleteIndex: i,
      };
      axios
        .post(this.url, data, {
          headers: { "Content-Type": "multipart/form-data" },
        })
        .then((res) => {
          console.log(res.data);
          // this.getToDo();
          this.todolist = res.data;
        });
      //chiamoaxios
      //gli passo un oggetto data con l'indice
      //l'indice lo utilizzerĂ  nell'array per eliminare il Task
    },
    toggleDoneTask(i) {
      const data = {
        toggleToDo: i,
      };
      axios
        .post(this.url, data, {
          headers: { "Content-Type": "multipart/form-data" },
        })
        .then((res) => {
          console.log(res.data);
          // this.getToDo();
          this.todolist = res.data;
        });
    },
  },
  mounted() {
    this.getToDo();
  },
}).mount("#app");
