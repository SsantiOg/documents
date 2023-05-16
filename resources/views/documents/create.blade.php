@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{route ('documents.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 mt-3">
              <label for="email" class="form-label">Documentos:</label>
              <input type="file" class="form-control" name="file" accept="image/*">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection