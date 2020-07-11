@extends('layouts.app')
@section('content')
<div class="ml-3 mt-3 mr-3">
        <div class="card card-primary">
          <form role="form" action="/pertanyaan" method="POST">
            <form role="form" action="/form" method="POST">
              @csrf
              <label for="">Judul Pertanyaan</label>
              <input class="form-control" type="text" name="judul">
              <label for="">Pertanyaan Baru</label>
              <textarea class="form-control" id="isi" name="isi" rows="10" cols="50"></textarea>
              <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
              <input type="hidden" name="votes" value="0">
              <br>
              <button type="submit" class="btn btn-primary mb-3 ml-3">Create</button> <br>
            </form>
          </form>
            <a href="{{ url('/pertanyaan') }}">
              <button class="btn btn-outline-primary mb-3 ml-3">Back</button>
            </a>
        </div>
@endsection