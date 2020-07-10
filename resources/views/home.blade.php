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
            </br></br>
<<<<<<< HEAD
            <a class ="btn btn-dark" href="/pertanyaan">Lihat List Pertanyaan</a><!--link untuk menuju ke list pertanyaan-->
            <a class ="btn btn-dark" href="/form">Buat Pertanyaan Baru</a><!--link untuk menuju ke list pertanyaan-->
=======
            <a class ="btn btn-dark" href="/list">Lihat List Pertanyaan</a><!--link untuk menuju ke list pertanyaan-->
            <a class ="btn btn-dark" href="/form">Buat Pertanyaan Baru</a><!--link untuk menuju ke form pertanyaan-->
>>>>>>> e91845c05ff6630051ceb98c66cf1c259606c7a8
        </div>
    </div>
</div>
@endsection
