<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- vuejs -->
        <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
        <!-- /vuejs -->

        <!-- axios -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous"></script>
        <!-- /axios -->

        <!-- google font -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
        <!-- /google font -->

        <!-- css -->
        <link rel="stylesheet" href="css/style.css">
        <!-- /css -->

        <title>Dischi</title>
    </head>

    <body>

        <div id="app">

            <!-- intestazione -->
           <header>
                <img class="logo" src="img/logo.png" alt="Spotify logo">
           </header>
           <!-- /intestazione -->

           <!-- corpo principale -->
           <main>
               <div class="container">

                    <!-- card -->
                    <div v-for="album in dischi" class="card">
                        <img class="album-cover" :src="album.poster" :alt="album.title">
                        <h2 class="album-title">{{ album.title}}</h2>
                        <p>{{ album.author }}</p>
                        <p>{{ album.year }}</p>
                    </div>
                    <!-- /card -->

                </div>
           </main>
           <!-- /corpo principale -->

        </div>
        
        <!-- javascript -->
        <script src="js/app.js"></script>
        <!-- /javascript -->
    </body>


</html>