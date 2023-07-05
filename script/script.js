const {createApp} = Vue;

createApp({
    data(){
        return{
            apiUrl:'./server.php',
        }
    },
    methods: {
        getItems(){
            axios.get('/user', {
                params: {}
              })
              .then(function (response) {
                console.log(response);
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
