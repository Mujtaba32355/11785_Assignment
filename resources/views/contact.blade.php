<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: black;">
            <a class="navbar-brand" href="#">TO DO List</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation"></button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/services')}}">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/contact/index')}}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/contact/viewinfo')}}">View Contacts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/about')}}">About</a>
                    </li>
                </ul>
            </div>
        </nav>
    <form action="{{$url}}" method="post">
        @csrf
      <div class="container">
        <h1 class="text-center">{{$title}}</h1>
        <div class="row">
            <div class="form-group col-md-6 required">
              <label for="">Name</label>
              <input type="text" name="name" id="" value="{{$Contact->name}}"class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="form-group col-md-6 required">
              <label for="">Phone Number</label>
              <input type="text" name="phone_number" id="" value="{{$Contact->phone_number}}"class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="form-group col-md-6 required">
              <label for="">email</label>
              <input type="text" name="email" id="" value="{{$Contact->email}}"class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="form-group col-md-6 required">
              <label for="">Query</label>
              <input type="text" name="query" id="" value="{{$Contact->query}}"class="form-control" placeholder="" aria-describedby="helpId">
            </div>
        </div>
        <button class="btn btn-primary">
                Submit
        </button>
      </div>
      </form>
  </body>
</html>