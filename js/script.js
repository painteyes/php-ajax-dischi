Vue.config.devtools = true;

const app = new Vue ({

    el: '#root',

    data: {
        database: []
    }, 

    methods: {
        getAlbumApi: function() {
            axios.get('http://localhost:8888/php-ajax-dischi/server.php')
            .then((response) => {
               this.database = response.data;
               console.log(this.database)
            });
        }
    },

    created: function() {
        this.getAlbumApi();
    }

})