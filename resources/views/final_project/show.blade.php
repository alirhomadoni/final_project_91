@extends('layouts.app')
@section('content')
<!-- <div class= "container"> -->
<div class="list-group-item list-group-item-action flex-column align-items-start">
    <h5 class="mb-1">{{$pertanyaan->user_name}}</h5>
    <div class="d-flex w-100 justify-content-between">
      <h1 class="mb-1">{{$pertanyaan->judul}}</h1>
      <small class="mb-1">{{$pertanyaan->tanggal_dibuat}}</small>
    </div>
    <div class="w-100 justify-content-between">
      <p class="mb-1">{{$pertanyaan->isi}}</p>
    </div>

<!-- menghitung jumlah response masing2 pertanyaan -->
<?php
      $jumlah_jawaban=0;
          for ($i=0; $i <count($jawabans) ; $i++) {
              if ($jawabans[$i]->pertanyaan_id==$pertanyaan->id){
                $jumlah_jawaban++;      
              }
          }
 ?>
<!-- button -->
<div class="w-100 justify-content-between">
        <a type="button" class="btn btn-outline-dark btn-sm" > up-Vote</a>
        <a type="button" class="btn btn-outline-dark btn-sm"> down-vote</a>
        <button type="button" class="btn btn-outline-warning btn-sm active"> total vote ({{$pertanyaan->votes}})</button> 
        <a type="button" class="btn btn-outline-dark btn-sm" href="/pertanyaan/{{$pertanyaan->id}}"> responses ({{$jumlah_jawaban}})</a>
        <a type="button" class="btn btn-outline-dark btn-sm" href="/pertanyaan/{{$pertanyaan->id}}/jawab"> jawab</a> 
        @if(Auth::user()->id == $pertanyaan->user_id)    
        <a type="button" class="btn btn-outline-dark btn-sm" href="/pertanyaan/{{$pertanyaan->id}}/edit"> edit</a> 
        <form action="/pertanyaan/{{$pertanyaan->id}}" method="Post" style="display : inline">
        @csrf 
        @method('DELETE')
        <button type="submit" class="btn btn-outline-danger btn-sm"> hapus</button> 
        </form>
        @endif
    </div>
</div>
<br>
<br>
@foreach($jawabans as $key => $jawaban)
@if($jawaban->pertanyaan_id==$pertanyaan->id)
<div class="container">
    <div class="list-group">
    <div class="list-group-item list-group-item-action flex-column align-items-start">
    <h4>{{$jawaban->user_name}}</h4>
    <div class="d-flex w-100 justify-content-between">
      <p class="mb-1">{{$jawaban->isi}}</p> 
      <small class="mb-1">{{$jawaban->tanggal_dibuat}}</small>
    </div>
    </div>
    </div>
</div>
@endif
@endforeach
@endsection