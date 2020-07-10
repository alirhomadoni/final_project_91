@extends('layouts.app')
@section('content')

<div class="ml-3 mt-3 mr-3">
<div class= "container card card-primary">
              <h3>{{$pertanyaan->judul}}</h3>
              <br>
              <p>{{$pertanyaan->isi}}</p>
</div>
<br><br>
        <div class="card card-primary">
            <form role="form" action="/pertanyaan/{{$pertanyaan->id}}/jawab/success" method="POST">
              @csrf
              <label for="">Jawab</label>
              <textarea class="form-control" name="isi" id="" cols="30" rows="10"></textarea>
              <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
              <input type="hidden" name="pertanyaan_id" value="{{$pertanyaan->id}}">

              <input type="hidden" name="votes" value="0">
              <br>
              <button type="submit" class="btn btn-primary mb-3 ml-3">Create</button> <br>
            </form>
            <a href="{{ url('/pertanyaan') }}">
              <button class="btn btn-outline-primary mb-3 ml-3">Back</button>
            </a>
  
            
          </div>
@endsection