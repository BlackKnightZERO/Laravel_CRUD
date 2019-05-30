@include('inc.header')

<div class='container'>
	<div class = 'row'>
		<legend>LARAVEL CRUD Application</legend>

		@if(session('info'))
		<div class="alert alert-success">
		{{session('info')}}
		</div>
		@endif

		<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">TITLE</th>
      <th scope="col">DESCRIPTION</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
  	@if(count($articles) > 0)

  		@foreach($articles->all() as $article)

    <tr class="table-active">
      <td>{{ $article->id }}</td>
      <td>{{ $article->title }}</td>
      <td>{{ $article->description }}</td>
         <td>	
	      	<a href = "{{ url("/read/{$article->id}") }}" class = "badge badge-primary">Read </a> |
	      	<a href = "{{ url("/update/{$article->id}") }}"" class = "badge badge-success">Update </a> |
	      	<a href = "{{ url("/delete/{$article->id}") }}"" class = "badge badge-danger"'">Delete </a>

      	</td>
    </tr>
    @endforeach
    @endif

  </tbody>
</table> 

	</div>
</div>

@include('inc.footer')