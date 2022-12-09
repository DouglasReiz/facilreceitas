<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function index()
    {
        $users = User::all();

        return view('users.index', compact('users'));
    }

    public function Show($id)
    {
        if(!$user = User::find($id))
            return redirect()->back();

        return view('users.show', compact('user'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        
        $data = $request->all();
        $data['password'] = bcrypt($request->password);

        $this->model->create($data);

        return redirect()->route('users.index');
    }

    public function edit($id)
    {
        if(!$user = $this->model->find($id))
            return redirect()->back();

        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        if(!$user = $this->model->find($id))
            return redirect()->back();

        $data = $request->only('name', 'email', 'phone');
        if ($request->password)
            $data['password'] = bcrypt($request->password);
        $user->update($data);

        return redirect()->route('users.index');
    }

    public function delete($id)
    {
        if (!$user = $this->model->find($id))
            return redirect()->back();
        $user->delete();

        return redirect()->route('users.index');
    }
}
