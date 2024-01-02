@extends('layouts.main')

@section('title', ' | Resume')

@section('content')
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6 col-lg-4">
                <div class="card text-bg-light">
                    <img src="/img/profile.jpg" class="card-img-top" alt="Igor Peshkov">
                    <div class="card-body">
                        <h5 class="card-title">Igor Peshkov</h5>
                        <p class="card-text"><span class="badge text-bg-danger">php web developer</span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center align-items-center my-5">
            <div class="col-md-10 col-lg-8">
                <h3>Summary</h3>
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            Middle Web Developer with more than 5 years
                            of commercial development experience.
                        </p>
                        <p>
                            My core skills are PHP development including
                            WordPress, Drupal, Symphony, Laravel but
                            mostly I have been working with WordPress and
                            Drupal
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p>
                            Quick learner, striving to get to know something
                            new on a daily basis, improving skills by that.
                        </p>
                        <p>
                            I can guarantee qualitative performance of all
                            tasks, deadlines, clean code, future support for
                            projects, honesty, responsibility, professionalism.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center align-items-center my-5">
            <div class="col-md-10 col-lg-8">
                <h3>Foreign languages</h3>
                <div class="row">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Reading</th>
                            <th scope="col">Writing</th>
                            <th scope="col">Speaking</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">English</th>
                            <td>Intermediate</td>
                            <td>Intermediate</td>
                            <td>Pre-Intermediate</td>
                        </tr>
                        <tr>
                            <th scope="row">Russian</th>
                            <td>Native speaker</td>
                            <td>Native speaker</td>
                            <td>Native speaker</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
