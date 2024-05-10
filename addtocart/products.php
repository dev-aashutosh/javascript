<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCTS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script>
    addToCart = (c1, c2) => {
        // console.log(c1.value + c2.value);
        console.log(c1);
    }
    </script>
</head>

<body data-bs-theme="dark">
    <!-- header -->
    <header class="container mb-4">
        <nav class="navbar navbar-expand-md d-flex ">
            <button class="btn d-md-none" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                <span class="navbar-toggler-icon "></span>
            </button>
            <a href="" class="navbar-brand text-light ">Shopshit</a>
            <div class="offcanvas offcanvas-start bg-black w-75" data-bs-scroll="true" tabindex="-1"
                id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel" id="drp">
                <div class="offcanvas-header">
                    <a href="" class="navbar-brand text-danger fs-2">Shopshit</a>
                    <button type="button" class="btn-close bg-light" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <ul class="navbar-nav ms-3 mx-md-auto">
                    <li class="nav-item me-3"><a href="#" class="nav-link text-light ">Home</a></li>
                    <li class="nav-item me-3"><a href="#" class="nav-link text-light ">Gallery</a>
                    </li>
                    <li class="nav-item me-3"><a href="#" class="nav-link text-light ">Blog</a></li>
                    <li class="nav-item me-3"><a href="#" class="nav-link text-light ">Pages</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            More
                        </a>
                        <ul class="dropdown-menu bg-danger-subtle  ">
                            <li><a class="dropdown-item fw-bold" href="#">Support</a></li>
                            <li><a class="dropdown-item fw-bold" href="#">Help</a></li>
                            <li><a class="dropdown-item fw-bold" href="#">Work with Us</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <a href="" class="btn btn-success text-light px-4">Cart</a>

        </nav>
    </header>
    <!-- products -->
    <div class="container">
        <p class="display-6 text-center mb-5 ">We Sell OSM Shit</p>
        <div class="row row-gap-3">
            <div class="col-lg-3 col-sm-6">
                <div class="card border border-light-subtle p-2 text-black ">
                    <div class="ratio ratio-4x3 ">
                        <img src="assets/images/p1.png" class="card-img-top" alt="Apple Computer" />
                    </div>
                    <div class="card-body px-0 pb-1">
                        <div class="text-center">
                            <h5 class="card-title">Believing is seeing</h5>
                            <p class="text-muted mb-4 " class="pname">Apple pro display XDR</p>
                        </div>
                        <ul class="list-group list-group-flush text-center">
                            <li class="list-group-item">Pro Display XDR</li>
                            <li class="list-group-item">Pro stand</li>
                            <li class="list-group-item">Vesa Mount Adapter</li>
                            <li class="list-group-item d-flex justify-content-between font-weight-bold my-2 px-1">
                                <span>Cost</span><span class="pcost">$2,197.00</span>
                            </li>
                        </ul>
                        <button class="btn btn-outline-secondary w-100 py-2">
                            Add
                            to
                            Cart
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card border border-light-subtle p-2 text-black ">
                    <div class="ratio ratio-4x3 ">
                        <img src="assets/images/p2.jpg" class="card-img-top" alt="Apple Computer" />
                    </div>
                    <div class="card-body px-0 pb-1">
                        <div class="text-center">
                            <h5 class="card-title">The holy power</h5>
                            <p class="text-muted mb-4">Apple Macbook Pro 14 inch</p>
                        </div>
                        <ul class="list-group list-group-flush text-center">
                            <li class="list-group-item">A14 Bionic Chip</li>
                            <li class="list-group-item">2k High Res Display</li>
                            <li class="list-group-item">Upto 228gb of Storage</li>
                            <li class="list-group-item d-flex justify-content-between font-weight-bold my-2 px-1">
                                <span>Cost</span><span>$3,197.00</span>
                            </li>
                        </ul>
                        <button class="btn btn-outline-secondary w-100 py-2">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card border border-light-subtle p-2 text-black ">
                    <div class="ratio ratio-4x3 ">
                        <img src="assets/images/p3.jpg" class="card-img-top" alt="Apple Computer" />
                    </div>
                    <div class="card-body px-0 pb-1">
                        <div class="text-center">
                            <h5 class="card-title">Bigger is Better</h5>
                            <p class="text-muted mb-4">Apple Macbook Pro 16 inch</p>
                        </div>
                        <ul class="list-group list-group-flush text-center">
                            <li class="list-group-item">M4 pro chip</li>
                            <li class="list-group-item">4k Res Display</li>
                            <li class="list-group-item">Upto 512gb Storage</li>
                            <li class="list-group-item d-flex justify-content-between font-weight-bold my-2 px-1">
                                <span>Cost</span><span>$4,197.00</span>
                            </li>
                        </ul>
                        <button class="btn btn-outline-secondary w-100 py-2">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card border border-light-subtle p-2 text-black ">
                    <div class="ratio ratio-4x3 ">
                        <img src="assets/images/p4.jpg" class="card-img-top" alt="Apple Computer" />
                    </div>
                    <div class="card-body px-0 pb-1">
                        <div class="text-center">
                            <h5 class="card-title">The Unreal Notch</h5>
                            <p class="text-muted mb-4">Apple Macbook Pro 15 inch</p>
                        </div>
                        <ul class="list-group list-group-flush text-center">
                            <li class="list-group-item">M4 mini Chip</li>
                            <li class="list-group-item">Full HD+ Display</li>
                            <li class="list-group-item">Super Fast Charging</li>
                            <li class="list-group-item d-flex justify-content-between font-weight-bold my-2 px-1">
                                <span>Cost</span><span>$6,197.00</span>
                            </li>
                        </ul>
                        <button class="btn btn-outline-secondary w-100 py-2">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>