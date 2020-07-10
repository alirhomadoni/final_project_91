@extends('layouts.app')
@section('content')
<!-- kasih for each di sini untuk menampilkan list pertanyaan -->

<div class="list-group">
@foreach($pertanyaans as $key => $pertanyaan)
  <div class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">{{$pertanyaan->judul}}</h5>
      <small class="mb-1">{{$pertanyaan->tanggal_dibuat}}</small>
    </div>
    <!-- user_name creator -->
    <small> by : {{$pertanyaan->user_name}}</small>
    <!-- isi pertanyaan -->
    <div class="d-flex w-100 justify-content-between">
        <p >{{$pertanyaan->isi}} </p>
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
</br>
@endforeach
</div>
@endsection