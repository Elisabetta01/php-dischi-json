<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
     <link rel="stylesheet" href="./assets/style.css">
     <title>php-dischi-json</title>
</head>
<body>

     <div id="app">

          <div class="">

               <nav>
                    <div class="container ">
                         <img src="./assets/img/logo1.png" alt="" id="logo" class="p-2">
                    </div>
               </nav>
          
               <main>
                    <div class="w-75 m-auto d-flex flex-wrap justify-content-between align-items-center">
                         <div v-for="(element, index) in data" :key="index" class="col-3 m-1" id="">
                              <div id="container-card" class="rounded p-3">
                                   <img :src="element.poster" class="card-img-top" alt="" class="poster">
                                   <div class="text-center text-white">
                                        <h4>{{ element.title }}</h4>
                                        <p>{{ element.author }}</p>
                                        <h4>{{ element.year }}</h4>
                                   </div>
                              </div>
                         </div>
                    </div>
               </main>
     
               
          </div>

     </div>
     

     <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
     <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js' integrity='sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g==' crossorigin='anonymous'></script>
     <script src="main.js"></script>
</body>
</html>