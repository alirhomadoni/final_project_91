@extends('layouts.app')
@section('content')
<div class="ml-3 mt-3 mr-3">
        <div class="card card-primary">
            <form role="form" action="/pertanyaan/{{$pertanyaan->id}}" method="POST">
              @csrf
              @method('PUT')

              <label for="">Judul Pertanyaan</label>
              <input class="form-control" type="text" name="judul" value="{{$pertanyaan->judul}}">
              <label for="">Edit Pertanyaan</label>
              <textarea id="isi" name="isi"></textarea>

              <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
              <input type="hidden" name="votes" value="{{$pertanyaan->votes}}">
              <br>
              <button type="submit" class="btn btn-primary mb-3 ml-3">Update</button> <br>
            </form>
            <a href="/pertanyaan">
              <button class="btn btn-outline-primary mb-3 ml-3">Back</button>
            </a>         
          </div>
@endsection
@push('scripts')
<script>
  CKEDITOR.replace('isi');
</script>
@endpush