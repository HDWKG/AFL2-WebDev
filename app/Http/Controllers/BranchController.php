<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function index()
    {
        $branches = Branch::all();

        return view('branches.index', [
            'branches' => $branches,
        ]);
    }

    public function create()
    {
        return view('branches.create');
    }

    public function store(Request $request)
    {
        $branch = new Branch();
        $branch->branchname = $request->input('branchname');
        $branch->address = $request->input('address');
        $branch->image = $request->input('image');
        $branch->save();

        return redirect()->route('branches.index');
    }

    public function show(Branch $branch)
    {
        return view('branches.show', [
            'branch' => $branch,
        ]);
    }

    public function edit(Branch $branch)
    {
        return view('branches.edit', [
            'branch' => $branch,
        ]);
    }

    public function update(Request $request, Branch $branch)
    {
        $branch->branchname = $request->input('branchname');
        $branch->address = $request->input('address');
        $branch->image = $request->input('image');
        $branch->save();

        return redirect()->route('branches.index');
    }

    public function destroy(Branch $branch)
    {
        $branch->delete();

        return redirect()->route('branches.index');
    }
    public function returnBranch()
    {
        $branch = Branch::all();
        return view('book', ['title' => 'Reserve Our Tables', 'branches' => $branch]);
    }
}
