@extends('layouts.app')
@section('content')
<div class="list-group-item list-group-item-action flex-column align-items-start">
    <h5 class="mb-1">{{$jawaban[0]->user_name}}</h5>
    <div class="d-flex w-100 justify-content-between">
      <h1 class="mb-1">jawaban</h1>
      <small class="mb-1">{{$jawaban[0]->tanggal_dibuat}}</small>
    </div>
    <div class="w-100 justify-content-between">
      {!!$jawaban[0]->isi!!}
    </div>
</div>

@foreach($komentars as $key => $komentar)
    <div class="container-fluid">
    <div class="list-group-item list-group-item-action flex-column align-items-start">
    <h5 class="mb-1">{{$komentar->user_name}}</h5>
    <div class="d-flex w-100 justify-content-between">
      <small class="mb-1">{{$komentar->created_at}}</small>
    </div>
    <div class="w-100 justify-content-between">
    <p>{{$komentar->komentar}}</p>
    </div>
        
    </div>    
    </div>
@endforeach
    
    
    

<@endsection