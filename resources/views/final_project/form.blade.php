@extends('layouts.app')
@section('content')
<div class="ml-3 mt-3 mr-3">
        <div class="card card-primary">
            <form role="form" action="/pertanyaan" method="POST">
              @csrf
              <label for="">Judul Pertanyaan</label>
              <input class="form-control" type="text" name="judul">
              <label for="">Pertanyaan Baru</label>
              <textarea name="isi"></textarea>
              <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
              <input type="hidden" name="votes" value="0">
              <br>
              <button type="submit" class="btn btn-primary mb-3 ml-3">Create</button> <br>

            </form>
          </form>
            <a href="{{ url('/pertanyaan') }}">
              <button class="btn btn-outline-primary mb-3 ml-3">Back</button>
            </a>
            <!-- <script>
              var options = {
                filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
                filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
              };
            </script> -->
            <!-- <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script> -->
          </div>

@endsection
@push('scripts')
<script>
  CKEDITOR.replace('isi');
</script>
@endpush