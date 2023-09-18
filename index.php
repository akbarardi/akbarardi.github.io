@extends('layouts.main')

@section('content')
<section class="my-5" id="home">
    <div id="particles-js" class="particles"></div>
    <div class="container-lg text-center homi">
        <div class="row">
            <div class="col my-5">
                <h1 class="card-title text-light"><b>Hi, My name is Akbar Ardiansyah </b></h1>
                {{-- <h5 class="card-title text-light"></h5> --}}
                <div class="col-6 col-md-2 col-sm-6 mx-auto pt-5">
                    <a href="#projects" class="btn btn-primary btn-lg projects">PROJECTS</a>
                </div> 
            </div>
        </div>
    </div>
</section>
<section id="about" class="about"> 
    <div class="container-lg">
        <div class="row">
            <div class="col text-center pt-5">
                <h2 class="card-title text-dark fw-bold">ABOUT ME</h2>
            </div>
        </div>
        <div class="row my-5 fs-6">
            <div class="col-sm-6">
                {{-- <h4 class="fs-3 mb-4 mt-5 text-dark">Get to know me!</h4> --}}
                <p class="fs-6 text-dark">Hi, i'm Akbar. i'm fresh graduate with majored in software engineering and specialized in 
                    web development. I'm quietly confident, naturally curious, and perpetually working on improving my chops one line code problem at a time.<br><br>
                    I'm open to Job opportunities where I can contribute, learn and grow. If you have a good opportunity that matches my skills then don't hesitate to contact me. 
                </p>
            </div>
            <div class="col-sm-6">
                <h6 class="fs-4 mb-4 text-dark text-center"><b>My Skills</b></h6>
                <div class="d-flex flex-row justify-content-center">
                    <div class="px-2 text-center">
                        <img src="assets/images/html.png" class="rounded" height="50" alt=""><br>HTML
                    </div>
                    <div class="px-3 text-center">
                        <img src="assets/images/css.png" class="rounded" height="50" alt=""><br>CSS
                    </div>
                    <div class="px-2 text-center">
                        <img src="assets/images/php.png" class="rounded" height="50" alt=""><br>PHP
                    </div>
                    <div class="px-3 text-center">
                        <img src="assets/images/js2.png" class="rounded" height="50" alt=""><br>JavaScript                
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="my-5 projects" id="projects">
    <div class="container-lg">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="card-title text-center text-light fw-bold">PROJECTS</h2>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-sm-3"></div>
            <div class="col-sm-6 text-light text-center">
                This is some work that i have created  
            </div>
        </div>
        <div class="row my-5">
            <div class="col-sm-1"></div>
            <div class="col-sm-5">
                <a href="/budgeting"><img src="assets/images/budgeting.jpg" class="rounded img-fluid pt-5" width="439" alt=""></a>
            </div>
            <div class="col-sm-5">
                <a href="/report"><img src="assets/images/laporan.jpg" class="rounded img-fluid pt-5" alt=""></a>
            </div>
        </div>
    </div>
</section>
<section class="my-4 contact" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="fs-2 text-center text-dark my-5 fw-bold">CONTACT</h2>
            </div>
            @if ($message = Session::get('success'))
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <strong>{{ session()->get('success') }}</strong>
                    </div>            
                </div>
            @endif    
        </div>    
        <form method="post" action="/kirim">
            @csrf
            <div class="row justify-content-center">
                <div class="col-1"></div>
                <div class="col-sm-3">
                    <div class="mb-3">
                      <label for="name" class="form-label text-dark">Name</label>
                      <input type="text" class="form-control" id="name" name="name" aria-describedby="name" placeholder="Enter Your Name" required>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="mb-3">
                      <label for="email" class="form-label text-dark">Email</label>
                      <input type="email" class="form-control" id="email" aria-describedby="email" name="email" placeholder="Enter Your Email" required>
                    </div>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-6 justify-content-center">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label text-dark">Message</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter Your Message" name="pesan" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-dark btn-lg">Submit</button><br>
                    <a href="https://www.linkedin.com/in/akbar-ardiansyah-101199276/" target="_blank"><img src="assets/images/linkedin.png" class="pt-2" width="45" alt=""></a>
                    <a href="https://wa.me/6282127428621?text=Hi Akbar,%20" target="_blank"><img src="assets/images/wa.png" class="pt-2" width="60" alt=""></a>
                </div>
            </div>
        </form>
    </div>
</section>
<footer class="footer pt-2 pb-2">
    <p class="text-center text-light">&copy;Copyright 2023. Made by <a href="/">Akbar Ardiansyah</a></p>
</footer>
@endsection