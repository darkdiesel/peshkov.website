@extends('layouts.main')

@section('title', ' | Home')

@push('head_scripts')

@endpush

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div
                        class="bg-image py-7 text-center shadow-1-strong rounded mb-3 text-white"
                        style="background-image: url('/img/profile-background.jpg');"
                    >
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-2 my-2">
                                <a href="#!.html" class="bg-gray bg-opacity-10 p-1 position-relative mt-n6 d-block mx-auto ">
                                    <img src="/img/profile.jpg" class="avatar-img img-fluid img-thumbnail" alt="Igor Peshkov">
                                </a>
                            </div>
                            <div class="col-lg-5 my-2">
                                <h5 class="card-title">Igor Peshkov</h5>
                                <p class="card-text">Web developer</p>
                                <p class="card-text"><i class="fa-solid fa-location-dot fa-lg"></i> <i class="fi fi-by m-0"></i> Belarus, Grodno</p>
                                <p class="card-text"><small class="text-body-secondary">WordPress, Drupal, Laravel, Yii2, CodeIgniter</small></p>
                            </div>
                            <div class="col-lg-5 my-2">
                                <p class="card-text">
                                    <i class="fa-regular fa-envelope fa-lg"></i> <a class="text-body-secondary" href="mailto:igor.peshkov@gmail.com">igor.peshkov@gmail.com</a>
                                </p>
                                <p class="card-text">
                                    <i class="fa-brands fa-skype fa-lg"></i> <a class="text-body-secondary" href="skype:igor.peshkov.1988?chat">igor.peshkov.1988</a>
                                </p>
                                <p class="card-text">
                                    <i class="fa-brands fa-square-facebook fa-lg"></i> <a class="text-body-secondary" href="https://www.facebook.com/igor.peshkov.27.07.1988/" target="_blank" >igor.peshkov.27.07.1988</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('footer_scripts')

@endpush
