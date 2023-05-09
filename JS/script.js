const { createApp } = Vue;

createApp({

    data() {
        return {
            apiUrl: './script.php',
            tasksList: [],
            todoItem: '',
        }
    },

    methods: {

        tasksListReader() {
            axios.get(this.apiUrl).then((res) => {
                this.tasksList = res.data;
            });
        },
        uploadTask() {

            console.log(this.todoItem);

            const data = {
                todoItem: this.todoItem,
            };

            axios.post(this.apiUrl, data, { headers: { 'Content-Type': 'multipart/form-data' } }).then((res) => {
                this.todoItem = '';
            });
        },

    },
    mounted() {
        this.tasksListReader();
    },
}).mount('app');