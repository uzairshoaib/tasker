<?php

namespace App\Http\Controllers;

use App\Group;

use App\Http\Requests;

class GroupController extends Controller
{
    public function index()
    {
    	$groups = Group::paginate(10);
    	return view('groups.index',compact('groups'));	
    }

    public function create()
    {
    	return view('groups.create');
    }

    public function store()
    {
    	$data = [
    		'title' => request('title'),
    		'slug' => str_slug(request('title'), '-'),
    		'description' => request('description'),
    		'status' => false
    	];
    	$created = Group::create($data);
    	return $created;
    }

    public function edit(Group $group)
    {
    	return view('groups.edit',compact('group'));
    }

    public function update(Group $group)
    {
    	$data = [
    		'title' => request('title'),
    		'slug' > str_slug(request('title'),'-'),
    		'description' => request('description')
		];
		$group->update($data);
    	return redirect()->back();
    }

    public function destroy(Group $group)
    {
        $group->delete();
        return Response::json(['success' => true]);
    }
}
