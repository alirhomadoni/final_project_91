@extends('layouts.app')
@section('content')
<!-- kasih for each di sini untuk menampilkan list pertanyaan -->
<div class="list-group">
  <div class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">$pertanyaan->judul</h5>
      <small class="mb-1">$pertanyaan->created_at</small>
    </div>
    <!-- user_name creator -->
    <small> by : $users->name</small>
    <!-- isi pertanyaan -->
    <div class="d-flex w-100 justify-content-between">
        <p >$pertanyaan->isi...lkajlskdfjalsdkfjaodpfijaopidjfoaipjefoiawejfoiewafjoiejfawopejfapwoefjawepifjawoepifjawopejfawopefjaweopijfaewopijfaewiopjfoaewipjfaewiopjf aewiopjfoaewijfoaweipjfoaewijfawoeipjfaewiopjfaewiopfjeawfopdfl;akjdfal;kdjfl;aksdjf;alkdjf;alkjdfl;akjdfl;akjfdl;kadjfldk;jflas;kjdf..................................................................................................</p>
    </div>
<!-- button -->
    <div class="w-100 justify-content-between">
        <a type="button" class="btn btn-outline-dark btn-sm" > up-Vote</a>
        <a type="button" class="btn btn-outline-dark btn-sm"> down-vote</a>
        <a type="button" class="btn btn-outline-dark btn-sm"> total vote ($pertanyaan->vote</a> 
        <a type="button" class="btn btn-outline-dark btn-sm"> responses ($count($jawaban))</a>
        <a type="button" class="btn btn-outline-dark btn-sm"> jawab</a> 
        <a type="button" class="btn btn-outline-dark btn-sm"> edit</a> 
    </div>
  </div> 
</br>
</div>
@endsection