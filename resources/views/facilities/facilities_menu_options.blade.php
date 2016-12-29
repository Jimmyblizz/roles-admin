@extends('layouts.home')

@section('title')
	<title> {!!Lang::get('labels.facilities_title')!!} </title>
@stop

@section('body')
<br> <br> <br> <br>

<div class="container">

		<div class="row">
			<div class="jumbotron"  >	
				<div class="text-center">
				    <h1>{!!Lang::get('labels.facilities_title')!!}</h1>
				     <p class="lead">{!!Lang::get('labels.home_subtitle1')!!} <br>
				    {!!Lang::get('labels.home_subtitle2')!!}</p>
				</div>
			</div>
		</div>	        
				        
		<div class="col-sm-12" align="left">

		    <div class="panel panel-default" >

		        <div class="panel-heading">
		          <h3 class="panel-title">{!!Lang::get('labels.leftpanel')!!}</h3>
				</div>           

		        <div class="panel-body">

		        <br>
				
					@include('php.display_submenus')


				</div>	
			</div>
		</div>
	</div>
</div>	

@stop