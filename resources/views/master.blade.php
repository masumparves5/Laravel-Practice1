<?php //dd($categories); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/')}}css/bootstrap.css">
    <title>@yield('title')</title>
</head>
<body>
<nav class="navbar navbar-expand bg-secondary-subtle">
    <div class="container">
        <a href="" class="navbar-brand">LOGO</a>
        <ul class="navbar-nav">
            <li><a href="{{route('home')}}" class="nav-link">Home</a></li>
            <li><a href="{{route('products')}}" class="nav-link">Product</a></li>
            <li class="dropdown">
                <a href="" class="nav-link dropdown dropdown-toggle" data-bs-toggle="dropdown">Categories</a>
                <ul class="dropdown-menu dropdown-menu-dark">
                    @foreach($categories as $category)
                        <li>
                            <a href="{{route('categories', ['id' =>$category['id']])}}" class="dropdown-item"> {{$category['name']}}</a>
                        </li>
                    @endforeach
                </ul>
            </li>
            <li><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
            <li><a href="{{route('blog.add')}}" class="nav-link">Add Blog</a></li>
        </ul>
    </div>
</nav>

@yield('body')

<script src="{{asset('/')}}js/bootstrap.bundle.js"></script>

</body>
</html>
