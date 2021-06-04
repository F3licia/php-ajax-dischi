const app = new Vue ({
    el: "#app",
    data:{
       recordsList:{}
    },
    methods: {
        fetchData(){
           axios.get("server.php")
           .then(resp => {
                 this.recordsList = resp.data;
           })
        }
    },

    mounted() {
        this.fetchData();
    }
})