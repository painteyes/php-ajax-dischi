<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">

    <script type='text/javascript' src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script type='text/javascript' src="https://cdn.cloudfare.come/ajax/libs/0.20/axios.min.js"></script>
</head>
<body>

    <header>
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Spotify_logo_without_text.svg/2048px-Spotify_logo_without_text.svg.png" alt="">
    </header>

    <div id='root'>

        <section>

            <!-- <FilterSelected @selectionChanged='setSelectionValue'/> -->

            <div class="container"> 

                <AlbumCard v-for="(element,index) in filteredAlbums()" :key="index" />

                <div class="single-album">

                    <div class="single-album-poster">
                        <img :src="albumObject.poster" alt="">
                    </div>

                    <div class="single-album-title"> 
                        {{albumObject.title}}
                    </div>

                    <div class="single-album-author">
                        {{albumObject.author}}
                    </div>

                    <div class="single-album-year"> 
                        {{albumObject.year}}
                    </div>

                </div>

            </div>

        </section>

    </div>

    <script src='js/script.js'></script>
    
</body>
</html>