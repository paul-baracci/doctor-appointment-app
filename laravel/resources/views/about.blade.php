@extends('app')

@section('content')
<div class="container" id="aboutus">
        <div class="text-center m-4"> 
	       <h1>About us</h1>
        </div>
   	    <div class="row align-items-center">
   	            <div class="col-sm text-muted">
                    <h4><em>Augemnted Heart Clinic</em> is a place of empathy and science. We do our best to make futuristic medical services available to everyone. From accurate central nervois system controlled hand/arm prosthetics to any vaccine for the latest pandemic!</h4>
                    <h4>Our word-class medical specialists have been hand-picked to take on procedures that are safe and up the newest standards.</h4>

                    <h4><a href="services.html">Schedule an appointment</a> today, we're glad to hear what time works for you!</h4>
                </div>
	       </div>
    
    <div class="row">
                <div class="col-md-6 col-lg-4 my-2">
                    <a class="lightbox" href="https://via.placeholder.com/800x583?text=Image">
                        <img class="img-fluid image" src="https://via.placeholder.com/800x583?text=Image">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 my-2">
                    <a class="lightbox" href="https://via.placeholder.com/800x583?text=Image">
                        <img class="img-fluid image" src="https://via.placeholder.com/800x583?text=Image">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 my-2">
                    <a class="lightbox" href="https://via.placeholder.com/800x583?text=Image">
                        <img class="img-fluid image" src="https://via.placeholder.com/800x583?text=Image">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 my-2">
                    <a class="lightbox" href="https://via.placeholder.com/800x583?text=Image">
                        <img class="img-fluid image" src="https://via.placeholder.com/800x583?text=Image">
                        </a>
                    </div>
                <div class="col-md-6 col-lg-4 my-2">
                    <a class="lightbox" href="https://via.placeholder.com/800x583?text=Image">
                        <img class="img-fluid image" src="https://via.placeholder.com/800x583?text=Image">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 my-2">
                    <a class="lightbox" href="https://via.placeholder.com/800x583?text=Image">
                        <img class="img-fluid image" src="https://via.placeholder.com/800x583?text=Image">
                    </a>
                </div>
            </div>
    </div>
    <div class="container" id="Staff">
        <div class="text-center m-4"> 
         <h1>Our Staff</h1>
        </div>
        <div class="row align-items-left">
	    
	    @foreach ($doctors as $doctor)
	    <div class="col-md-6">
              <div class="card mb-4 box-shadow">
                <img class="flow-left mx-auto d-block" src="#" alt="Doctor Photo" size="250" />
                    <h2> {{ $doctor->name }} </h2>
                    <p>Specialization: {{ $doctor->specialization }} </p>
                    <p>Email:</p>
                    <p>Social:</p>
                    <p>Phone:</p>
              </div>           
	    </div>
	    @endforeach
        </div>
    </div>
@endsection
