<?php 
namespace  App\Services;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImageServices
{
	
	public function all()
	{
		return $MyImages = DB::table('images')->select('*')->get()->all();
	}

	public function One($id)
	{
		return DB::table('images')->select('*')->where('id', $id)->get()->all();
	}

	public function show($id)
	{
		return $this->One($id);
	}

	public function edit($id)
	{
		return $this->One($id);
	}

	public function store($filename)
	{
		DB::table('images')->insert(['image' => $filename]);
	}

	public function update($request, $id)
	{
		$image_name = DB::table('images')->select('image')->where('id', $id)->get()->first();
	    Storage::delete($image_name->image);
	    $filename = $request->image->store('uploads');
	    DB::table('images')->where('id', $id)->update(['image' => $filename]);
	}
	
	public function delete($request, $id)
	{
		$image_name = DB::table('images')->select('image')->where('id', $id)->get()->first();
	    Storage::delete($image_name->image);
	    DB::table('images')->where('id', $id)->delete();
	}
}

 ?>