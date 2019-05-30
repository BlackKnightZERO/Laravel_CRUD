<!DOCTYPE html>
<html>
<head>
	<title>Laravel CRUD Application</title>
	<link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">
	<script type=" src = {{url('js/jQuery.js')}}"></script>
	<script type=" src = {{url('js/bootstrap.js')}}"></script>
</head>
<body>

 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">LARAVEL CRUD</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/create') }}">Create</a>
      </li>
      
    </ul>

    <form class="form-inline my-2 my-lg-0" action="{{URL::to('/search')}}" method="POST" role = 'search'>
      {{csrf_field()}}
      <input class="form-control mr-sm-2" type="text" placeholder="Search" name='search'>
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
    @if(isset($details))
    <p>The search results for your query <b> {{ $query }} </b> are : </p>
    <h2>Results : </h2>
      <div class="container">
        <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>

    </tr>
  </thead>
  <tbody>
   
      @foreach($details as $articles)
       <tr class="table-active">
      <td>{{ $article->id }}</td>
      <td>{{ $article->title }}</td>
      <td>{{ $article->description }}</td>
      
         </tr>
    @endforeach

  </tbody>
</table> 
      </div>
    @endif
  </div>
</nav>