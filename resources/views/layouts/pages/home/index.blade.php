@extends('layouts.master')

@section('content')

    <section id="welcome">
        <div class="container">
            <div class="welcome text-center">
                <h1>Hey, what's up, what are you thinking?</h1>
                <p>Just don't waste your time, get started Sign In, Sign Up and begin the new 
                    journey of futsal booking with us. <br>Don't forget to fasten your seat-belt 
                    because it's going to be long one &#128514 &#128514
                </p>
            </div>
        </div>
                            <a href="/book"><h3><center>Play With Us</center></h3></a> 
    </section>

    <section>
    <div class="slideshow-container">
    <div class="mySlides fade">
       <a href="https://www.facebook.com/samakhushifutsal/"><img src="/images/download.jpg"  alt="nothing" style="width:100%;height:400px"></a>
    </div>

    <div class="mySlides fade">
       <a href="https://www.facebook.com/samakhushifutsal/"> <img src="/images/download1.jpg" style="width:100%;height:400px"></a>
    </div>

    <div class="mySlides fade">
       <a href="https://www.facebook.com/samakhushifutsal/"> <img src="/images/download2.jpg" style="width:100%;height:400px"></a>
    </div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
    <!-- <p><h3><center>Featured Futsals<center></h3></p>
    @foreach($futsals as $futsal)
    <div class="card">
        <div class="card-header">
           <b> {{$futsal->futsalname}} </b>
        </div>
        <div class="card-body">
            <div class="image-container">
                <img src="uploads/futsal/{{$futsal->image}}" alt="Image" width=10% height=10%>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary"><a href="/book">Book<a></button>
        </div>
    </div>
    @endforeach -->
    </section>

    <section id="about-us">
        <div class="container">
            <h1 class="title text-center">WHY CHOOSE US?</h1>
            <div class="row">
                <div class="col-md-12 about-us">
                    <p class="about-title">Why we're different</p>
                    <ul>
                        <li>Believe in doing business with honesty</li>
                        <li>Believe in doing business with honesty</li>
                        <li>Believe in doing business with honesty</li>
                        <li>Believe in doing business with honesty</li>
                        <li>Believe in doing business with honesty</li>
                        <li>Believe in doing business with honesty</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>   
@endsection