@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Post your link</div>

				<div class="panel-body">
					<p>Post your link</p>
					@if(session()->has('message'))

						<div class="alert alert-success">
							{{ session('message') }}
						</div>

					@endif
					@if($errors->count() > 0)
						<div class="alert alert-danger">
							<strong>Whoops,</strong> something went wrong.
							<br/><br/>
							<ul>
								@foreach($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form method="post" action="{{ url('postlinkPOST') }}">
						<label for="link">Link</label>
						<input type="text" name="link">
						<label for="description">Description</label>
						<input type="text" name="description">
						<button type="submit" name="postlink">Add Link</button>
						<input type="hidden" value="{{ csrf_token() }}" name="_token">
					</form>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">Your links</div>
				<div class="panel-body">
<table id="links_table" class="display">
    <thead>
        <tr>
            <th>Id</th>
            <th>Link</th>
            <th>Description</th>
            <th>Created at</th>
            <th>Updated at</th>
						<th></th>
			</tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
            <td></td>
            <td></td>
			<td></td>
			<td></td>
			<td></td>

        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
			<td></td>
			<td></td>
			<td></td>

        </tr>
    </tbody>
</table>			</div>
			</div>
						<footer>
<p>Athanasios Emmanouilidis 2015</p>
</footer>
		</div>

	</div>

</div>

@endsection
