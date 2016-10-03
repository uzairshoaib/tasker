@extends('layouts.app')

@section('content')
	<div class="main-content container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-default panel-border-color panel-border-color-primary">
            <div class="panel-heading panel-heading-divider text-capitalize">create group</div>
            <div class="panel-body">
            	<div class="row">
            		<div class="col-sm-8 col-sm-offset-2 col-xs-12">
		              <form action="{{ '/group/store' }}" method="POST" class="form-horizontal group-border-dashed">
		              {{ csrf_field() }}
			           @include('groups.partials.form')
		              </form>
            		</div>
            	</div>
            </div>
          </div>
        </div>
      </div>
@endsection