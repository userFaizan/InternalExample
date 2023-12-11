<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('id', '!=', Auth::id())->get();
        return view('admin.users.index', compact('users'));
    }

    public function store(Request $request)
    {
        // Validate the submitted interest data
        $validation = Validator::make($request->all(), User::$rules);

        if ($validation->fails()) {
            return response()->json(['errors' => $validation->errors()], 422); // 422 is an HTTP Unprocessable Entity status code
        }

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ];
        $user = User::create($data);
        $user->addRole('user');

        return response()->json(['success' => 'User added Successfully.']);
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function edit($id)
    {
        $users = User::findOrFail($id);
        return view('admin.users.edit', compact('users'));

    }

    public function update(Request $request, $id)
    {
        $validation = Validator::make($request->all(), User::$rules);

        if ($validation->fails()) {
            return response()->json(['errors' => $validation->errors()], 422); // 422 is an HTTP Unprocessable Entity status code
        }
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password =  Hash::make($request->password);
        $user->save();
        return response()->json(['success' => 'User Updated SuccessFully.']);
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('user.index');
        // Perform any additional logic or delete the interest record
    }

    public function changeStatus(Request $request)
    {
        $user = User::find($request->user_id);
        $user->account_status = $request->account_status;
        $user->save();

        return response()->json(['success' => 'Status change successfully.']);
    }
}
