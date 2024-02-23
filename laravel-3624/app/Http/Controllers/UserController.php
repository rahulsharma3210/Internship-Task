<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Project;

class UserController extends Controller
{
    //
    public function index()
    {
        return view('index', ['users' => User::all()]);
    }
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'gender' => 'required',
        ]);
        // dd($request->all());

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->gender = $request->gender;
        $user->save();

        return redirect('/');

    }

    public function edit($userId)
    {
        $user = User::find($userId);
        return view('edit', ['user' => $user]);
    }

    public function update(Request $request, $userId)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'gender' => 'required',
        ]);

        // $customer = User::where('id', $userId)->first();
        $user = User::find($userId);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->gender = $request->gender;
        $user->save();
        return redirect('/');
    }

   
    public function remove($userId)
    {
       $user = User::find($userId);
       if(!$user){
        return back()->withError('user not found');
       }

        $user->project()->delete();
        $user->delete();
        return redirect('/');
    }



    //code for create
    public function createprojects($userId){
        return view('createprojects', ['userId' =>$userId]);

    }
    public function storeprojects(Request  $request , $userId){
        $project = new Project();
        $project->user_id = $userId;
        $project->name = $request->name;    
        $project->description = $request->description;
        $project->save();
     return redirect()->route('projectshow' , ['userId' =>$userId]);
    }
    public function details($id)
    {
        $customer = User::where('id', $id)->first();

        return view('details', ['product' => $customer]);
    }


    public function projectshow($userId)
    {
        // select * from projects where user_id = $userId 
        $projects = Project::where('user_id', $userId)->get();
        // \Log::info($projects);
        return view('projects', ['projects' => $projects , 'userId' =>$userId]);
    }

    public function editprojects($projectId){
        $projects = Project::find($projectId);
        return view('editprojects', ['project' =>$projects]);
    }
    public function updateprojects(Request $request , $projectId){
        $project = Project::find($projectId);
        
        $project->name = $request->name;    
        $project->description = $request->description;
        $project->save();
        $userId = $project->user_id;
     return redirect()->route('projectshow' , ['userId' =>$userId]);
    }
    public function destroyprojects(Request $request, $projectId){
       
        $project = Project::find($projectId);
        if($project){
        $userId = $project->user_id;
        $project->delete();
        return redirect()->route('projectshow', ['userId'=>$userId]);
        }
        return redirect()->back();
    }
}

