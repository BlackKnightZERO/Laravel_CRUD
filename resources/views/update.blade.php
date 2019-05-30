@include('inc.header');

<div class = 'container'>
	<div class = 'row'>
		<div class = 'col-md-6'>
			<form method="POST" action="{{ url('/edit', array($articles->id)) }}">
				{{csrf_field()}}
				  <fieldset>
				    <legend>LARAVEL CRUD Application</legend>
				    <div class="form-group row">
				      
				      
				    </div>

				    @if(count($errors) > 0 )
				    	@foreach($errors->all() as $error )
				    		<div class = 'alert alert-danger'>{{$error}}</div>
				    	@endforeach
				    @endif


				    <div class="form-group">
				      <label for="exampleInputEmail1">Title</label>
				      <input type="text" name = 'title' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Title" value="<?php echo $articles->title ?>">
				    </div>
				    <div class="form-group">
				      <label for="exampleInputPassword1">Description</label>
				      
				      <textarea class="form-control" name="description" placeholder="Description"><?php echo $articles->description ?></textarea>
				    </div>

				    <div class="form-group">
				    	<div class="col-lg-10 col-lg-offset-2">
				    		<button type="submit" class="btn btn-primary">Update</button>
				    		<a href=" {{ url('/') }} " class='btn btn-primary' >Back</a>
				    	</div>
				    </div>
   				</fieldset>
            </form>
		</div>
	</div>
</div>

@include('inc.footer')