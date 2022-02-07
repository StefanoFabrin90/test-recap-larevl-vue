@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>Welcome to {{ Auth::user()->name }}</h1>
                </div>

                <div class="card-body">
                    <h2>your id is: {{ Auth::id() }}</h2>
                    <ul>
                        <li>
                            <a href="">profilo</a>
                        </li>
                        <li>
                            <a href="">carrello</a>
                        </li>
                        <li>
                            <a href="">opzioni</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
