<?php

namespace App\Http\Controllers;

use App\Http\Requests\LinkRequest;
use App\Models\Link;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(User $user)
    {
        $links = Link::where('user_id', $user->id)->get();
        return view('links.index')->with('links', $links);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(User $user, LinkRequest $request)
    {
        try {
            Link::create([
                'user_id' => $user->id,
                'name' => $request->name,
                'url_long' => $request->url_long,
                'url_short' => Str::slug($request->url_short),
            ]);
            session()->flash('success', 'Link has been created successfully!');
            return redirect()->route('links.index', $user);
        } catch (Exception $e) {
            Log::error($e);
            session()->flash('error', 'Error occured while creating a new link.');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
