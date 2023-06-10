import { createApp } from '../vue.js';
import { apiBaseUrl, send } from "../global.js";
import moment from "../moment.min.js";
export default createApp({
    data() {
        return {
            loading: true
        }
    },
    async created() {
        const now = new Date(new Date().toLocaleString('en', {timeZone: 'Asia/Taipei'}));
        const date = now.getFullYear() + "-" + now.getMonth() + "-" + now.getDay();
        console.log(moment());
    },
    methods: {


    }
}).mount('#app')
