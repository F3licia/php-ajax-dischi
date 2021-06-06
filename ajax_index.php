<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <link rel="stylesheet" href="dist/app.css?v=<?php echo time(); ?>"> <!--aggiorna chace ogni volta-->
    <title>ajax dischi</title>
</head>
<body>
    <div id="app">

    <div class="header">
        <input type="text" v-on:keyup.enter ="search" v-model="searchBy.genres" placeholder="Search by genre">
        <span class="buttonSearch"  @click="search" v-bind="searchBy.genres" >&#x1F50E;&#xFE0E;</span>
    </div>

    <div class="container">
            <div v-for="element in recordsList" class="card">
                <div class="cover"><img alt="" v-bind:src="element.poster"> </div>
                <div class="info">
                    <h3 class="author">{{element.author}}</h3>
                    <h5 class="title">{{element.title}}</h5>
                    <h5 class="date">{{element.year}}</h5>
                    <h5 class="date">{{element.genre}}</h5>
                </div>
            </div>
        </div>

    
    </div>
</body>
<script src="./scripts/main.js"></script>
</html>