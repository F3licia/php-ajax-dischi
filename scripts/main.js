const app = new Vue ({
    el: "#app",
    data:{
       recordsList:{},
       search: "",  
    },
    methods: {
        fetchData(){
           axios.get("server.php", {
                 params:{
                     genre : this.search
                    }
           })
           .then(resp => {
                 this.recordsList = resp.data;
           })
        },
        filter(){
            this.fetchData()
        }
    },

    mounted() {
        this.fetchData();
    }
})


