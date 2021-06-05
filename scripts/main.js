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
                     genre : this.searchBy.genres,
                    }
           })
           .then(resp => {
                 this.recordsList = resp.data;
           })
        },
        search(){            //ripete la chiamata stavolta coi nuovi parametri input
            this.fetchData()
        }
    },

    mounted() {
        this.fetchData();
    }
})


