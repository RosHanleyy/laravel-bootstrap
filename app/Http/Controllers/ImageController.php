<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use public\images;
  
class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('imageUpload');
    }
      
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    
        $image = time().'.'.$request->image->extension();  
    
        if($request->hasFile('image'))
        {
            $destination_path = 'public/images';
            $image = $request -> file('image');
            $image_name = $image -> GetClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path,$image_name);
            
            $input['image'] = $image_name;
        }


        return back()
            ->with('success','You have successfully upload image.'); 

    }

    public function getImage(){
        $image = DB::table('Image')->get();
        
    }
}

