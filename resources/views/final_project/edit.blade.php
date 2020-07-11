@extends('layouts.app')
@section('content')
<div class="ml-3 mt-3 mr-3">
        <div class="card card-primary">
            <form role="form" action="/pertanyaan/{{$pertanyaan->id}}" method="POST">
              @csrf
              @method('PUT')

              <label for="">Judul Pertanyaan</label>
              <input class="form-control" type="text" name="judul" value="{{$pertanyaan->judul}}">
              <label for="">Edit Tag (gunakan pemisah koma antar tag)</label>
              <input class="form-control" type="text" name="tag" value="{{$pertanyaan->tag}}">
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
          <?php 
          $isi=$pertanyaan->isi;
          $foo = 123;
      echo "<script type=\"text/javascript\">\n";
      echo "var isi = \"${isi}\" ;\n";
      echo "console.log('value is:' + isi);\n";
      echo "</script>\n";
          ?>
@endsection
@push('scripts')
<script type="text/javascript">
  CKEDITOR.replace('isi');
  CKEDITOR.instances['isi'].setData(isi);
  
</script>
@endpush