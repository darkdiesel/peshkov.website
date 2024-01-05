@extends('layouts.main')

@section('title', ' | Home')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/img/profile.jpg" class="img-fluid rounded-start" alt="Igor Peshkov">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Igor Peshkov</h5>
                                <p class="card-text">PHP web developer</p>
                                <p class="card-text"><small class="text-body-secondary">WordPress, Drupal, Laravel, Yii2, CodeIgniter</small></p>
                                <p class="card-text"><i class="fa-solid fa-location-dot fa-lg"></i> Belarus, Grodno</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Contacts</h5>
                        <p class="card-text">
                            <i class="fa-regular fa-envelope fa-lg"></i> <a href="mailto:igor.peshkov@gmail.com">igor.peshkov@gmail.com</a>
                        </p>
                        <p class="card-text">
                            <i class="fa-brands fa-skype fa-lg"></i> <a href="skype:igor.peshkov.1988?chat">igor.peshkov.1988</a>
                        </p>
                        <p class="card-text">
                            <i class="fa-brands fa-square-facebook fa-lg"></i> <a href="https://www.facebook.com/igor.peshkov.27.07.1988/" target="_blank" >igor.peshkov.27.07.1988</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
