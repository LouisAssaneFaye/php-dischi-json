const {createApp} = Vue;

createApp({
    data(){
        return{
            apiUrl:'./server.php',
            items:[],
        }
    },
    methods: {
        getItems(){
            axios.get(this.apiUrl, {
                params: {}
              })
              .then((response)=> {
                console.log(response);
                this.items=response;
              })
              .catch(function (error) {
                console.log(error);
              })
              .finally(function () {
                
              });  
        }
    },
    created(){
        this.getItems();
    }

}).mount('#app')
