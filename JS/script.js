import { createApp } from 'vue';

createApp({
    data() {
        return {
            apiUrl: 'script.php',
            tasksList: [],
        }
    },
    methods: {
        tasksListReader() {
            axios.get(this.apiUrl).then((res) => {
                this.tasksList = res.data;
            });
        },
    }
}).mount('app');