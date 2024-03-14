<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | SE_Project</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    body {
        background-color: rgb(197, 241, 255); 
    }
</style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark" >
        <div class="container-fluid">
          <a class="navbar-brand" href="/">SE_Project</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav ">
              <li class="nav-item me-5">
                <a class="nav-link " aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item me-5">
                <a class="nav-link" href="{{route('car')}}">ข้อมูลรถ</a>
              </li>
              <li class="nav-item me-5">
                <a class="nav-link" href="{{route('carrecive')}}">ข้อมูลรับรถ</a>
              </li>
              <li class="nav-item me-5">
                <a class="nav-link" href="{{route('carcheck')}}">ประวิตอาการรถ</a>
              </li>
              <li class="nav-item me-5">
                <a class="nav-link" href="{{route('recive')}}">ตรวจสอบรถ</a>
              </li>
              <li class="nav-item me-5">
                <a class="nav-link" href="{{route('list')}}">List</a>
              </li>
              <li class="nav-item me-5">
                <a class="nav-link" href="{{route('employee')}}">จัดการพนักงาน</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <div class="container py-2">

      <form class="input-group" action="@yield('search')" method="post">
        @csrf
        <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" name="search" value="{{ isset($search) ? $search : ''}}" aria-describedby="search-addon" />
        <button type="submit" class="btn btn-outline-primary" data-mdb-ripple-init>search</button>
    </form>
        @yield('content')
       

    </div>
    
    
</body>
</html>