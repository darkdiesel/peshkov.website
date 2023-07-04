@extends('layouts.main')

@section('title', ' | Main')

@section('content')
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-4">
                <div class="card text-bg-light">
                    <img src="/img/profile.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Igor Peshkov</h5>
                        <p class="card-text"><span class="badge text-bg-danger">php web developer</span></p>
                        <a href="https://www.facebook.com/igor.peshkov.27.07.1988/" target="_blank" class="btn btn-outline-info float-end">Contact me on facebook</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
