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
        <a href="{{route('store_contact')}}">
          <button class="btn btn-primary d-inline-block m-2 float-right">
                  Add
          </button>
        </a>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Phone Number</th>
                <th>email Address</th>
                <th>Query</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($Contact as $c)
            <tr>
                <td>{{$c->name}}</td>
                <td>{{$c->phone_number}}</td>
                <td>{{$c->email}}</td>
                <td>{{$c->query}}</td>
                <td>
                  <a href="{{route('delete_contact',['id'=>$c->id])}}" onclick="return confirm('Are you sure to delete this record?')">
                    <button class="btn btn-danger">Delete</button>
                  </a>
                  <a href="{{route('edit_contact',['id'=>$c->id])}}">
                    <button class="btn btn-primary">Edit</button>
                  </a>
                </td>
            </tr>
            @endforeach
       </tbody>
    </table>
  </body>
</html>