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
    

        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    @include('partials.flash')
                    
                    <h2>La liste de mes cvs</h2>
                    <div class="float-end">
                        <a href="{{url('cvs/create')}}" class="btn btn-info">Add New Cv</a>
                    </div>
{{--                     <table class="table">
                        <head></head>
                        <tr>
                            <th>Titre</th>
                            <th>Presentation</th>
                            <th>Date creation</th>
                            <th>Actions</th>
                        </tr>
                            @foreach ($cvs as $cv)   
                            <tr>
                                <th>{{$cv->titre }} 
                                    <br> 
                                    {{  $cv->user->name }}
                                 </th>
                                <th>{{$cv->Presentation}}</th>
                                <th>{{$cv->created_at}}</th>

                                <th>
                                    <form action="{{url('cvs/'.$cv->id) }}" method="post">
                                        <a href="" class="btn btn-primary">infos</a>
                                        <a href="{{url('cvs/'.$cv->id) }}" class="btn btn-warning">Edit</a>

                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <button type="submit" class="btn btn-danger">Delete </button>

                                    </form>
                                </th>
                            </tr>
                            @endforeach
                    </table>
 --}}             
                <div class="row">
                    @foreach($cvs as $cv)
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="{{asset('storage/'.$cv->photo)}}" class="img-thumbnail" alt="...">
                            <div class="caption">
                                    <h3>{{ $cv->titre }}</h3>
                                    <p>
                                        <a href="{{url('cvs/'.$cv->id) }}" class="btn btn-primary" role="button">Show</a>
                                        <a href="{{url('cvs/'.$cv->id.'/edit') }}" class="btn btn-warning" role="button">Edit</a>
                                        @can('delete',$cv)
                                        <a href="" class="btn btn-danger" role="button">Delete</a>
                                        @endcan

                                    </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>





                </div>
            </div>
        </div>

</body>
</html>
