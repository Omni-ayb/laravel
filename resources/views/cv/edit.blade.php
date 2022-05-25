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
    {{-- /* errors handling */ --}}
    @if(count($errors))
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $err)               
                <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <form action=" {{ url('cvs/'.$cv->id) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">
                        <label for="">Titre</label>
                        <input type="text" name="titre" class="form-control" value="{{$cv->titre }}">
                    </div>
                    
                    <div class="form-group">
                        <label for="">Presentation</label>
                        <textarea name="presentation" class="form-control">{{$cv->Presentation}}</textarea>
                    </div>
    
                    <br><br>

                    <div class="form-group">
                        <input type="submit" class="form-control btn btn-primary" value="edit">
                    </div>
    
                </form>
            </div>
        </div>
    </div> 

    
</body>
</html>

