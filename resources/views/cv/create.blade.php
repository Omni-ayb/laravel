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
                <form action=" {{ url('cvs') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="">Titre</label>
                        <input type="text" name="titre" class="form-control @if($errors->get('presentation')) is-invalid @endif " value="{{ old('titre') }}">
                        @if($errors->get('titre'))
                            @foreach ($errors->get('titre') as $err)               
                                <li>{{ $err }}</li>
                            @endforeach
                        @endif
                    </div>
                    
                    <div class="form-group ">
                        <label for="">Presentation</label>
                        <textarea name="presentation" class="form-control @if($errors->get('presentation')) is-invalid @endif ">{{ old('presentation') }}</textarea>
                        @if($errors->get('presentation'))
                            @foreach ($errors->get('presentation') as $err)               
                                <li>{{ $err }}</li>
                            @endforeach
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="">Image</label>
                            <input class="form-control" type="file" name="photo" >
                    </div>
    
                    <br><br>

                    <div class="form-group">
                        <input type="submit" class="form-control btn btn-primary" value="Enregistrer">
                    </div>
    
                </form>
            </div>
        </div>
    </div> 

    
</body>
</html>

