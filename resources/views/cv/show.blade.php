<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<link rel="stylesheet" href=" {{asset('assets/css/bootstrap.min.css') }} ">

<body>
    <div class="container" id="app">
        <h1>@{{ message }}</h1>
        <div class="row">
            <div class="col-md-12">

                    <div class="card border-primary ">
                        <div class="card-header bg-primary">
                            <div class="row">
                                <div class="col-md-10">
                                    <h3 class="card-title">Experiences</h3>
                                </div>
                                <div class="col-md-2 text-right">
                                    <button class="btn btn-success">Ajouter</button>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="float-sm-end">
                                        <button class="btn btn-warning btn-sm">Editer</button>
                                    </div>
                                    <h5 class="card-title">Primary card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <small>2015-09-01 - 2017-06-23</small>
                                </li>

                                <li class="list-group-item">
                                    <div class="float-sm-end">
                                        <button class="btn btn-warning btn-sm">Editer</button>
                                    </div>
                                    <h5 class="card-title">Primary card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <small>2015-09-01 - 2017-06-23</small>
                                </li>


                                <li class="list-group-item">
                                    <div class="float-sm-end">
                                        <button class="btn btn-warning btn-sm">Editer</button>
                                    </div>
                                    <h5 class="card-title">Primary card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <small>2015-09-01 - 2017-06-23</small>
                                </li>

                            </ul>
                        </div>
                    </div>
 
                    <hr>

                    <div class="card border-primary ">
                        <div class="card-header bg-primary">
                            <div class="row">
                                <div class="col-md-10">
                                    <h3 class="card-title">Formations</h3>
                                </div>
                                <div class="col-md-2 text-right">
                                    <button class="btn btn-success">Ajouter</button>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="float-sm-end">
                                        <button class="btn btn-warning btn-sm">Editer</button>
                                    </div>
                                    <h5 class="card-title">Formations</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <small>2015-09-01 - 2017-06-23</small>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <hr>

                    <div class="card border-primary ">
                        <div class="card-header bg-primary">
                            <div class="row">
                                <div class="col-md-10">
                                    <h3 class="card-title">Portfolio</h3>
                                </div>
                                <div class="col-md-2 text-right">
                                    <button class="btn btn-success">Ajouter</button>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="float-sm-end">
                                        <button class="btn btn-warning btn-sm">Editer</button>
                                    </div>
                                    <h5 class="card-title">Primary card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <small>2015-09-01 - 2017-06-23</small>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <hr>


                    <div class="card border-primary ">
                        <div class="card-header bg-primary">
                            <div class="row">
                                <div class="col-md-10">
                                    <h3 class="card-title">Competences</h3>
                                </div>
                                <div class="col-md-2 text-right">
                                    <button class="btn btn-success">Ajouter</button>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="float-sm-end">
                                        <button class="btn btn-warning btn-sm">Editer</button>
                                    </div>
                                    <h5 class="card-title">Primary card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <small>2015-09-01 - 2017-06-23</small>
                                </li>
                            </ul>
                        </div>
                    </div>


            </div>


        </div>
    </div>

    <script src="{{asset('js/vue.js')}}"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>

        var app=new Vue ( {

                                el:'#app',
                                data:{ message:'hi vue js ! '},
                                methods : {

                                    getExp:function()  {

                                        axios.get('http://locahost:8000/getExp')
                                        .then(response => {
                                            console.log('sucess:',response)
                                        })
                                        .catch(error=>{
                                            console.log('errors:',error)
                                        })
                
                                    },
                                    mounted:function( ) {
                                        this.getExp();
                                    }
                                }
                                
        });

    </script>
</body>
</html>