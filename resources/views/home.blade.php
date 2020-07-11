@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                
            </div>
<<<<<<< HEAD
            </br></br>
=======
            <br><br>
>>>>>>> 0f32461b05605d7bca4a65a8ac4778902eef8e51
            <a class ="btn btn-dark" href="/pertanyaan">Lihat List Pertanyaan</a><!--link untuk menuju ke list pertanyaan-->
            <a class ="btn btn-dark" href="/form">Buat Pertanyaan Baru</a><!--link untuk menuju ke list pertanyaan-->
        </div>
    </div>
</div>
@endsection
