<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Services\ImageServices;

class ImagesController extends Controller
{

	private $image;

	public function __construct(ImageServices $ImageServices)
	{
		$this->image = $ImageServices;
	}

    public function index()
    {
	    return view('welcome', ['imagesInView' => $this->image->all()]);
    }
    
    public function create()
    {
    	return view('create');
    }

    public function show($id)
    {
    	return view('show', ['imagesInView' => $this->image->show($id)]);
    }


    public function edit($id)
    {
    	return view('edit', ['imagesInView' => $this->image->show($id)]);
    }

	public function store(Request $request)
    {
    	$filename = $request->image->store('uploads');
		$this->image->store($filename);

		return redirect('/');
    }

    public function update(Request $request, $id)
    {
    	$this->image->update($request, $id);   

	    return redirect('/');
    }
	
    public function delete(Request $request, $id)
    {
		$this->image->delete($request, $id); 
		 
	    return redirect('/');
	}

}
