<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>online shop </title>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link rel="stylesheet" href="css/style.css">
    </head>
    
    <body> 
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!"></a></li>
                        <li class="nav-item dropdown">
                                                     
                        </li>
                    </ul>
                  
                        
                        
                            <span class="badge bg-dark text-white ms-1 rounded-pill"></span>
                        </button>
                        <a href="{{route('login')}}" class="btn btn-primary">login</a>
                        
                    </form> 
                    <form action="{{ route('logout') }}" method="POST" style="display:inline;">
    @csrf
    <button type="submit" class="btn btn-danger">Logout</button>
</form>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <style>
    header {
        background-image:url('https://jakartainside.com/wp-content/uploads/2023/03/1658120726623-10-jus-buah-untuk-diet-yang-praktis-dibuat-1024x683.jpg');
        background-size: cover; 
        background-position: center;
        background-repeat: no-repeat; 
    }
</style>
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">SEDIA JUS BUAH
                    </h1>
                    <p class="lead fw-normal text-white-50 mb-0"></p>
                </div>
            </div>
            
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="http://2.bp.blogspot.com/-LxU8flA4MAQ/VfVp-upEHJI/AAAAAAAAOLY/_eEhUrYHQ2E/s1600/8-fakta-menakjubkan-tentang-jus-jeruk.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">jus jeruk</h5>
                                    <!-- Product price-->
                                    RP:8.000
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{route('jeruk')}}">View options</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                           
                            <!-- Product image-->
                            <img class="card-img-top" src="https://1.bp.blogspot.com/-vwLsZnRqDUI/VtFTct7pfxI/AAAAAAAAAEo/5vI9ZzCCTfc/s1600/JUS%2BBUAH%2BNAGA.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">jus buah naga</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        
                                    </div>
                                    <!-- Product price-->
                                    RP:8.000
                                    
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{route('buahnaga')}}">View options</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                        
                             <!-- Product image-->
                             <img class="card-img-top" src="https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/2022/09/27/4117112130.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">jus jambu</h5>
                                    <!-- Product price-->
                                    RP:8.000
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{route('jambu')}}">View options</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="http://2.bp.blogspot.com/-rlaoHEmuPqI/VrL4PUOkzuI/AAAAAAAAAC4/NxzBdI6vUbo/s1600/manfaat-jus-alpukat.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">jus alpukat</h5>
                                    RP:8.000
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{route('alpukat')}}">View options</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                           
                            <!-- Product image-->
                            <img class="card-img-top" src="https://cdn.idntimes.com/content-images/post/20170809/mango1-540246ec44165e7841ee524b66c6185c.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">jus mangga</h5>
                                    RP:8.000
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{route('mangga')}}">View options</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://miro.medium.com/max/1200/1*TvRWAQb58XLxIYHGqfVVhQ.jpeg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">jus nanas</h5>
                                    <!-- Product price-->
                                    RP:8.000
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{route('nanas')}}">View options</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                        
                            <!-- Product image-->
                            <img class="card-img-top" src="https://th.bing.com/th/id/OIP.w9oUsYuxV1pbWrneVzwmYgHaEo?rs=1&pid=ImgDetMain" alt="..." />
                            <!-- Product details-->                                                                                                                                                                                                                                                                                                                             
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">jus semangka</h5>
                                    <!-- Product price-->
                                    RP:8.000
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{route('semangka')}}">View options</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="http://3.bp.blogspot.com/-C18BjK-IqdQ/UlYT_MNqjWI/AAAAAAAABKM/JxjTqvfiePs/s1600/jus+buah+pisang.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">jus pisang</h5>
                                    RP:8.000
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{route('semangka')}}">View options</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">website ujikom</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
