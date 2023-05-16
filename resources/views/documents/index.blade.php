@extends('layouts.app')

@section('content')
    <div class="container">
        <h1></h1>

        <div class="row">
            <div class="col-sm-4">
                <div class="card text-white bg-light">
                    <div class="card-body">
                        <a name="" id="" class="btn" href="" role="button"><img src="https://img.freepik.com/iconos-gratis/pdf_318-148750.jpg?w=2000" alt=""></a>    
                        <div class="row">
                            @foreach ($documents as $document)
                                <div class="col-sm-4">
                                    <div class="card text-white bg-light">
                                        <div class="card-body">
                                            <a href="{{$document->url}}"><img src="" alt=""></a>    

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </div>
@endsection