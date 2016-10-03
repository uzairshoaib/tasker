@extends('layouts.app')

@section('content')
	<div class="main-content container-fluid">
      <div class="row">
        <div class="col-xs-12">
          <div class="panel panel-default panel-table">
            <div class="panel-heading">Basic Tables
            <div class="tools">
            	<ul class="list-inline">
            		<li>
            			<a href="{{ URL::to('group/create') }}" class="btn btn-default btn-sm page-ajax">create group</a>
            		</li>
            	</ul>
            </div>
            </div>
            <div class="panel-body">
              <table class="table">
                <thead>
                  <tr class="text-capitalize">
                    <th>#</th>
                    <th>title</th>
                    <th>description</th>
                    <th>status</th>
                    <th class="actions">actions</th>
                  </tr>
                </thead>
                <tbody>
                	@foreach($groups as $group)
                  <tr>
                    <td></td>
                    <td>{{ $group->title }}</td>
                    <td>{{ $group->description }}</td>
                    <td>{{ ($group->status) ? 'Active' : 'Deactive' }}</td>
                    <td class="actions">
                    <ul class="list-inline">
                    	<li>
                    		<a href="{{ URL::to("group/$group->id/edit") }}" class="icon"><i class="mdi mdi-eye"></i></a>
                    	</li>
                    	<li>
                      <form action="{{ URL::to("group/$group->id/delete") }}" class="form-delete" method="post">
                      {{ method_field('delete') }}
                      {{ csrf_field() }}
                        <button type="submit" class="icon"><i class="mdi mdi-delete"></i></button>
                      </form>
                    	</li>
                    </ul>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              {{ $groups->links() }}
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection