VTTCue.config.devtools = true;

const app = new Vue ({
    el: '#root',
    data: {
        database: []
    }, 
    methods: {
        getAlbumApi: function() {
            axios.get('http://localhost:8888/php-ajax-dischi/server.php')
        }.then((response) =>{
            this.databse = response;
        }),
    },
    created: function() {
        this.getAlbumApi();
    }
})