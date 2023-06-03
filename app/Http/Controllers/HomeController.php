<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        return view('index1');
    }
    public function editlayout()
    {
        return view('editlayout');
    }
    public function register()
    {
        return view('register');
    }
    public function create_register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' =>'required|max:10',
            'qualification' =>'required',
            'gender' => 'required',          
            'image'=> 'mimes:jpeg,jpg,png,gif|max:2048', 
        ]);
        
        $data = $request->all();
        $path = 'asset/storage/images/'.$data['image'];
        $fileName=time().$request->file('image')->getClientoriginalName();
        $path=$request->file('image')->storeAs('images',$fileName,'public');
        $datas["image"]='/storage/'.$path;        
        $data['image']=$fileName; 
        $data['qualification'] = $request->input('qualification');
       
        Employee::create($data);
        return redirect()->route('register')->with('success','registered');
    
}
    public function profile()
    {
        $profile = Employee::all();
        return view('profile',compact('profile'));
    }
    public function edit($id)
    {
        $employee=Employee::find($id);
      
      return view('edit',compact('employee'));
      
    }

    public function update($id,Request $request)
    {       
        $request->validate([
            'image'=> 'mimes:jpeg,jpg,png,gif|max:2048',
        ]);
       $data=Employee::find($id);
       $data->name = $request->input('name');
       $data->email = $request->input('email');
       $data->phone = $request->input('phone'); 
        
       if ($request->hasFile('image')) {
        $path = 'asset/storage/images/'.$data->image;
        if(File::exists($path)){
            File::delete($path);
        }
        $fileName=time().$request->file('image')->getClientoriginalName();
        $path=$request->file('image')->storeAs('images',$fileName,'public');
        $datas["image"]='/storage/'.$path;
        $data->image=$fileName; 
         
        $data->update();   
      } 
       $data->update();
        return redirect()->route('profile')->with('success','updated successfully');

    }
    public function delete($id)
    {
         Employee::find($id)->delete();
         return redirect()->route('profile')->with('success','deleted');
      
    }
    public function leave()
    {
        return view('leave');
    }
    public function search(Request $request)
    {
        $phoneNumber = $request->input('phone');
    
        $patient = Employee::where('phone', $phoneNumber)->first();
    
        return response()->json($patient);
    }



}
