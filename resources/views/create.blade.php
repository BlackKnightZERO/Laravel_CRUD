@include('inc.header');

<div class = 'container'>
	<div class = 'row'>
		<div class = 'col-md-6'>

			<form method="POST" action="{{ url('/insert') }}">

				{{csrf_field()}}


				  <fieldset>
				    <legend>Create Article</legend>
				    <div class="form-group row"> 
				    </div>

				    @if(count($errors) > 0 )
				    	@foreach($errors->all() as $error )
				    		<div class = 'alert alert-danger'>{{$error}}</div>
				    	@endforeach
				    @endif


				    <div class="form-group">
				      <label for="exampleInputEmail1">Title</label>
				      <input type="text" name = 'title' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Title">
				    </div>
				    <div class="form-group">
				      <label for="exampleInputPassword1">Description</label>
				      
				      <textarea class="form-control" name="description" placeholder="Description"></textarea>
				    </div>

				    <div class="form-group">
				    	<div class="col-lg-10 col-lg-offset-2">
				    		<button type="submit" class="btn btn-primary">Submit</button>
				    		<a href=" {{ url('/') }} " class='btn btn-primary' >Back</a>
				    	</div>
				    </div>
   				</fieldset>
            </form>
		</div>
	</div>
</div>

@include('inc.footer')