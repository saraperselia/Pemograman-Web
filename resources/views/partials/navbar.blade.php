<!-- fontawesome cdn -->
<link rel="stylesheet" href={{ asset("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css") }} integrity={{ asset("sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==") }} crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- bootstrap css -->
<link rel = "stylesheet" href = {{ asset("bootstrap-5.0.2-dist/css/bootstrap.min.css") }}>
<!-- custom css -->
<link href = {{ asset("/css/main.css") }} rel = "stylesheet" >
<link rel="stylesheet" href="/js/script.js">
    <nav class = "navbar navbar-expand-lg navbar-light bg-white py-4 fixed-top ">
    <div class = "container">
        <a class = "navbar-brand">
            <img src = {{ asset("img/LOGO4.png") }} alt = "site icon" width="70">
            <span class = "text-uppercase fw-lighter ms-2">Teman Bearly Beauty</span>
        </a>
        <div class = "order-lg-2 nav-btns">
            <button type = "button" class = "btn position-relative" >
                <i class = "fa fa-shopping-cart"></i>
                <span class = "position-absolute top-0 start-100 translate-middle badge bg-primary" style="background-color: #e5345b">5</span>
            </button>
            <button type = "button" class = "btn position-relative">
                <i class = "fa fa-heart"></i>
                <span class = "position-absolute top-0 start-100 translate-middle badge bg-primary">2</span>
            </button>
            <button type = "button" class = "btn position-relative">
                <i class = "fa fa-search"></i>
            </button>
        </div>

        <button class = "navbar-toggler border-0" type = "button" data-bs-toggle = "collapse" data-bs-target = "#navMenu">
            <span class = "navbar-toggler-icon"></span>
        </button>

        <div class = "collapse navbar-collapse order-lg-1" id = "navMenu">
            <ul class = "navbar-nav mx-auto text-center active">
                <li class = "nav-item px-2 py-2">
                    <a class = "nav-link text-uppercase text-dark {{ ($active == "home") ?'active': ' ' }}" href = "/">home</a>
                </li>
                <li class = "nav-item px-2 py-2">
                    <a class = "nav-link text-uppercase text-dark {{ ($active == "produk") ?'active': ' ' }}" href = "/produk">Products</a>
                </li>
                <li class = "nav-item px-2 py-2">
                    <a class = "nav-link text-uppercase text-dark {{ ($active == "kategori") ?'active': ' ' }}" href = "#category ">Category</a>
                </li>
                <li class = "nav-item px-2 py-2">
                    <a class = "nav-link text-uppercase text-dark {{ ($active == "about") ?'active': ' ' }}" href = "#about">About us</a>
                </li>
               
            </ul>
            
        </div>
        
    </div>
    <ul class = "navbar-nav text-right active">
        <li class = "nav-item">
            <a class = "nav-link text-uppercase text-dark {{ ($active == "dashboard") ?'active': ' ' }}" href = "/dashboard/products" >Dashboard &emsp;&emsp;</a>
        </li>
    </ul>
</nav>     


