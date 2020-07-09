@extends('layouts.app')
@section('content')
<div class="ml-3 mt-3 mr-3">
        <div class="card card-primary">
            <form role="form" action="/list" method="POST">
              @csrf
              @method('PUT')

              <label for="">Judul Pertanyaan</label>
              <input class="form-control" type="text" name="judul" value="nanti diisi sama judul yang mau diedit">
              <label for="">Pertanyaan Baru</label>
              <input type="text"  class="form-control" name="isi" id="txtArea" value="isi">
              <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
              <br>
              <button type="submit" class="btn btn-primary mb-3 ml-3">Create</button> <br>
            </form>
            <a href="{{ url('/list') }}">
              <button class="btn btn-outline-primary mb-3 ml-3">Back</button>
            </a>         
          </div>
@endsection
