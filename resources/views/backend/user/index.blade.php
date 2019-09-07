@extends('backend.layouts.app')
<!-- Title -->
@section('title', $head)

<!-- Top Bar -->
@section('top_bar')
@parent
@endsection

<!-- Side Navigation -->
@section('side_navigation')
@parent
@endsection

<!-- Content -->
@section('content')	
   <div class="page">
   		<h2>{{$page_heading}}</h2>
   </div>    
   <div class="main-wrap">
		<div class="main-title">
			<ul class="breadcrumb inline-menu">
				<li ><a href="#">Home</a></li>
				<li ><a href="#">User List</a></li>
				<li>Anu</li>
			</ul>
			<h1>User</h1>
		</div>
	</div>
	<div class="main-wrap">
		<div class="create-new right-align">
			<a href = "/user/create" class="waves-effect waves-light btn ">Add new user</a>
		</div>
	</div>
	<div class="main-wrap">
		<div class="search-wrapper">
			<div class="row">
				<div class="input-field col s6">
					<input id="email" type="email" class="validate">
					<label for="email">Email</label>
					<span class="helper-text" data-error="wrong" data-success="right">Helper text</span> </div>
					<div class="input-field col s3"> <a class="waves-effect waves-light btn">button</a> <a class="waves-effect waves-light btn">refresh</a> </div>
				</div>
			</div>
			<div class="card-box">
				<table>
					<thead>
						<tr>
							<th>Image</th>
							<th>Name</th>
							<th>Email</th>
							<th>Mobile</th>
							<th>Role</th>
							<th>Status</th>
							<th colspan="3">Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><img src="http://www.gravatar.com/avatar/?d=identicon"></td>
							<td>Eclair</td>
							<td>email1@gmail.com</td>
							<td>1234567890</td>
							<td>Admin</td>
							<td>Active</td>
							<td><a class="btn btn-small btn-success" href="{{ URL::to('user/1') }}">View</a></td>
							<td><a class="btn btn-small btn-info" href="{{ URL::to('user/1/edit') }}">Edit</a></td>
							<td>
								{{ Form::open(array('url' => 'user/1', 'class' => 'pull-right')) }}
	                     	{{ Form::hidden('_method', 'DELETE') }}
	                    		{{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
	                     {{ Form::close() }}										
							</td>
						</tr>
						<tr>
							<td><img src="http://www.gravatar.com/avatar/?d=identicon"></td>
							<td>Alan</td>
							<td>email1@gmail.com</td>
							<td>1234567890</td>
							<td>Admin</td>
							<td>Active</td>
							<td><a class="btn btn-small btn-success" href="{{ URL::to('user/2') }}">View</a></td>
							<td><a class="btn btn-small btn-info" href="{{ URL::to('user/2/edit') }}">Edit</a></td>
							<td>
								{{ Form::open(array('url' => 'user/2', 'class' => 'pull-right')) }}
	                     	{{ Form::hidden('_method', 'DELETE') }}
	                    		{{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
	                     {{ Form::close() }}										
							</td>
						</tr>
						<tr>
							<td><img src="http://www.gravatar.com/avatar/?d=identicon"></td>
							<td>Jonathan</td>
							<td>email1@gmail.com</td>
							<td>1234567890</td>
							<td>Admin</td>
							<td>Active</td>
							<td><a class="btn btn-small btn-success" href="{{ URL::to('user/3') }}">View</a></td>
							<td><a class="btn btn-small btn-info" href="{{ URL::to('user/3/edit') }}">Edit</a></td>
							<td>
								{{ Form::open(array('url' => 'user/3', 'class' => 'pull-right')) }}
	                     	{{ Form::hidden('_method', 'DELETE') }}
	                    		{{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
	                     {{ Form::close() }}										
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
@endsection

@section('footer')
@parent
@endsection

@section('page_script')
dadsad
@endsection