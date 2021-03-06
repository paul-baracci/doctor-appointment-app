@extends('app')

@section('content')
    <div class="container">
        <div class="text-center m-4">
            <h1>About us</h1>
        </div>
        <div class="row align-items-center">
            <div class="col-sm">
                <p><em>Augmented Heart Clinic</em> is a place of empathy and science. We do our best to make futuristic
                medical services available to everyone. From accurate central nervous system controlled hand/arm
                prosthetics to any vaccine for the latest pandemic!</p>
                <p>Our word-class medical specialists have been hand-picked to take on procedures that are safe and up
                the newest standards.</p>

                <p><a href="{{ route('services.index') }}">Schedule an appointment</a> today, we're glad to hear what time works for
                you!</p>
            </div>
        </div>
        <div class="row" id="gallery" data-toggle="modal" data-target="#galleryModal">
            <div class="col-12 col-sm-6 col-lg-4 mb-4">
                <img src="img/staff1.jpg" class="w-100" data-target="#galleryCarousel" data-slide-to="0">
            </div>
            <div class="col-12 col-sm-6 col-lg-4 mb-4">
                <img src="img/staff2.jpg" class="w-100" data-target="#galleryCarousel" data-slide-to="1">
            </div>
            <div class="col-12 col-sm-6 col-lg-4 mb-4">
                <img src="img/staff3.jpg" class="w-100" data-target="#galleryCarousel" data-slide-to="2">
            </div>
            <div class="col-12 col-sm-6 col-lg-4 mb-4">
                <img src="img/staff4.jpg" class="w-100" data-target="#galleryCarousel" data-slide-to="3">
            </div>
            <div class="col-12 col-sm-6 col-lg-4 mb-4">
                <img src="img/staff5.jpg" class="w-100" data-target="#galleryCarousel" data-slide-to="4">
            </div>
            <div class="col-12 col-sm-6 col-lg-4 mb-4">
                <img src="img/staff6.jpg" class="w-100" data-target="#galleryCarousel" data-slide-to="5">
            </div>
        </div>
        <div class="modal fade" id="galleryModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content bg-transparent border-0">
                        {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> --}}
                        {{--     <span aria-hidden="true">&times;</span> --}}
                        {{-- </button> --}}
                    <div class="modal-body">
                        <div id="galleryCarousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#galleryCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#galleryCarousel" data-slide-to="1"></li>
                                <li data-target="#galleryCarousel" data-slide-to="2"></li>
                                <li data-target="#galleryCarousel" data-slide-to="3"></li>
                                <li data-target="#galleryCarousel" data-slide-to="4"></li>
                                <li data-target="#galleryCarousel" data-slide-to="5"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block img-fluid" src="img/staff1.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="img/staff2.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="img/staff3.jpg" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="img/staff4.jpg" alt="Fourth slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="img/staff5.jpg" alt="Fith slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="img/staff6.jpg" alt="Sixth slide">
                                </div>
                            </div>
                            <a id="previous" class="carousel-control-prev" href="#galleryCarousel" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a id="next" class="carousel-control-next" href="#galleryCarousel" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center m-4">
            <h1>Medical Staff</h1>
        </div>
        <div class="card-columns">
            @foreach ($doctors as $doctor)
                <div class="card shadow">
                    <div class="card-title text-center pt-4">
                        <img class="img-circle card-img-top shadow" src="{{ $doctor->image->path }}" alt="{{ $doctor->name }}" />
                    </div>
                    <div class="card-body text-center">
                        <h5> {{ $doctor->name }} </h5>
                        <p>Specialization {{ $doctor->specialization }} </p>
                        <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#007bff" class="bi bi-envelope" viewBox="0 0 16 16">
                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
                        </svg>
                        </p>
                        <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#007bff" class="bi bi-telephone" viewBox="0 0 16 16">
                            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                        </svg>
                        </p>
                        <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#007bff" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#007bff" class="bi bi-linkedin" viewBox="0 0 16 16">
                            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#007bff" class="bi bi-twitter" viewBox="0 0 16 16">
                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                        </svg>
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
