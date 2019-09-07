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
	      <div class="row">
	        <div class="input-field col s6">
	          <input id="site_title" type="text" class="validate">
	          <label for="site_title">Site title</label>
	        </div>
	        <div class="input-field col s6">
	          <input id="site_url" type="text" class="validate">
	          <label for="site_url">Site url</label>
	        </div>
	      </div>
	      <div class="row">
	        <div class="input-field col s6">
	          <input id="email" type="email" class="validate">
	          <label for="email">Email</label>
	        </div>
	        <div class="input-field col s6">
	        	<select name="site_language">
			      <option value="" disabled selected>Choose your language</option>
			      <option value="english">English</option>
			      <option value="french">French</option>
			    </select>
			    <label>Site language</label>
	        </div>
	      </div>
	      <form action="">
		      <div class="row">
		        <div class="file-field input-field col s6">
				    <div class="btn">
				        <span>Logo</span>
				       <input type="file" name="">
				    </div>
				    <div class="file-path-wrapper">
				        <input class="file-path validate" type="text">
				    </div>
		        </div>
		        <div class="file-field input-field col s6">
				    <div class="btn">
				        <span>Favicon</span>
				       <input type="file" name="">
				    </div>
				    <div class="file-path-wrapper">
				        <input class="file-path validate" type="text">
				    </div>
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