<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-dischi-json</title>
    <!-- bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- style.css -->
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>

    <div id="app">
        <header class="d-flex">
            <img class="img-fluid" src="./assets/img/logo.svg" alt="">
        </header>
        <main>
            <div class="container pt-5">

                <div class="row g-5">
                    <div v-for="disco in dischi" class="col-4">
                        <div class="card py-3 d-flex flex-column justify-content-center align-items-center">

                            <div class="wrapper-img d-flex ">
                                <img class="img-fluid" :src="disco.poster" alt="">
                            </div>

                            <h4 class="text-center">{{disco.title}}</h4>
                            <p>{{disco.author}}</p>
                            <h4>{{disco.year}}</h4>

                        </div>
                    </div>
                </div>

            </div>
        </main>
    </div>


    <!-- bootstrap.js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.5.1/axios.min.js" integrity="sha512-emSwuKiMyYedRwflbZB2ghzX8Cw8fmNVgZ6yQNNXXagFzFOaQmbvQ1vmDkddHjm5AITcBIZfC7k4ShQSjgPAmQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- vue.js -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- main.js -->
    <script src="./assets/js/main.js"></script>
</body>

</html>