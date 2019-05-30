@include('inc.header')

<div class='container'>
	<div class = 'row'>
		<legend>Read Article</legend>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">TITLE</th>
      <th scope="col">DESCRIPTION</th>
    </tr>
  </thead>
  <tbody>
    <tr class="table-active">
      <td><p class="lead">{{ $articles->title }}</p></td>
      <td><p class="lead">{{ $articles->description }}</p></td>
    </tr>


  </tbody>
</table> 

		
	</div>
</div>

@include('inc.footer')