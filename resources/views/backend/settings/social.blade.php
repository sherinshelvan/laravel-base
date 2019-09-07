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
   <div class="main-wrap">
		<div class="main-title">
			<ul class="breadcrumb inline-menu">
				<li ><a href="{{ route('admin.login') }}">Home</a></li>
				<li>{{$page_heading}}</li>

			</ul>
			<h1>{{$page_heading}}</h1>
		</div>
	</div>
	<div class="main-wrap">
		<div class="card-box">
			<form action="" >
		      	<div class="row">
			        <div class="input-field col s12">
			          <input id="youtube" type="text" class="validate">
			          <label for="youtube">Youtube url</label>
			        </div>
			        <div class="input-field col s12">
			          <input id="facebook" type="text" class="validate">
			          <label for="facebook">Facebook url</label>
			        </div>
			        <div class="input-field col s12">
			          <input id="twitter" type="text" class="validate">
			          <label for="twitter">Twitter url</label>
			        </div>
			        <div class="input-field col s12">
			          <input id="linkedin" type="text" class="validate">
			          <label for="linkedin">Linkedin url</label>
			        </div>
		      	</div>      
		      
		      	<div class="row">
		      		<div class="col s12">
		      		<a class="waves-effect waves-light btn"><i class="material-icons left">save</i>Update</a>
		      		</div>
		      	</div>
	  		</form>
		</div>
	</div>
@endsection

@section('footer')
@parent
@endsection

@section('page_script')

@endsection