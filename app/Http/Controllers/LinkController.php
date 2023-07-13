<?php

namespace App\Http\Controllers;

use App\Http\Requests\LinkRequest;
use App\Models\Link;
use App\Models\User;
use Exception;
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
            session()->flash('error', 'Error occured while creating the link.');
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LinkRequest $request, User $user, Link $link)
    {
        try {
            $link->name = $request->name;
            $link->url_long = $request->url_long;
            $link->url_short = $request->url_short;
            $link->save();
            session()->flash('success', 'Link has been updated successfully!');
            return redirect()->route('links.index', $user);
        } catch (Exception $e) {
            Log::error($e);
            session()->flash('error', 'Error occured while updating the link.');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user, Link $link)
    {
        try {
            $link->delete();
            session()->flash('success', 'Link has been deleted successfully!');
            return redirect()->route('links.index', $user);
        } catch (Exception $e) {
            Log::error($e);
            session()->flash('error', 'Error occured while deleting the link.');
            return redirect()->back();
        }
    }
}
