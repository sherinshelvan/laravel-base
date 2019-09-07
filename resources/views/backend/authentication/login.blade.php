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
				<li ><a href="#">Home</a></li>
				<li ><a href="#">User List</a></li>
				<li>Anu</li>
			</ul>
			<h1>User</h1>
		</div>
	</div>
	<div class="main-wrap">
		<div class="create-new right-align">
			<a class="waves-effect waves-light btn ">Add new user</a>
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
							<th>Name</th>
							<th>Item Name</th>
							<th>Item Price</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Alvin</td>
							<td>Eclair</td>
							<td>$0.87</td>
						</tr>
						<tr>
							<td>Alan</td>
							<td>Jellybean</td>
							<td>$3.76</td>
						</tr>
						<tr>
							<td>Jonathan</td>
							<td>Lollipop</td>
							<td>$7.00</td>
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

@endsection