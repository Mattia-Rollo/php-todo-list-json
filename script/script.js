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
    deleteTask(i) {
      //chiamoaxios
      //gli passo un oggetto data con l'indice
      //l'indice lo utilizzerà nell'array per eliminare il Task
    },
  },
  mounted() {
    this.getToDo();
  },
}).mount("#app");
