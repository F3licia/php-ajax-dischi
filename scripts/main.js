const app = new Vue ({
    el: "#app",
    data:{
       recordsList:{},
       searchBy: {
          genres: "",  
       }
       
    },
    methods: {
        fetchData(){
           axios.get("server.php", {
                 params:{             //posso passare i parametri come argomenti nella chiamata ajax
                     genre : this.searchBy.genres
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


