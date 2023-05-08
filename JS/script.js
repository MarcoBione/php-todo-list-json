import { createApp } from 'vue';

createApp({
    data() {
        return {
            task: 'array.php',
            taskList: [],
        }
    },
    methods: {
        getTasks() {
            axios.get(this.task).then(res => {
                this.taskList.push(res.data);
                console.log(taskList);
            });
        },

    }
}).mount('app');