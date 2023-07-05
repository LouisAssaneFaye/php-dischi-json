<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/style.css">
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div id="app">
        <header class="header">
           <i class="fa-brands fa-spotify"></i>
        </header>
        <div class="container">
            <div class="cards">
                <div class="card" v-for="item in items">
                    <div class="card-up">
                        <img :src="item.poster" alt="img">                   
                    </div>
                    <div class="card-down">
                        <h3>
                            {{item.title}}
                        </h3>
                        <span>
                            {{item.author}}
                        </span>
                        <span>
                            {{item.year}}
                        </span>
                    </div>
                </div>
            </div>
        </div>

    </div>
    

   <script src="./script/script.js"></script>
</body>
</html>