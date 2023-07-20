<?php

namespace App\Http\Controllers;

use App\Http\Requests\LinkRequest;
use App\Models\Link;
use App\Models\User;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(User $user)
    {
        return view('links.index')->with('links', $user->links);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(User $user, LinkRequest $request)
    {
        try {
            Link::make([
                'name' => $request->name,
                'url_long' => $request->url_long,
                'url_short' => $request->url_short ? Str::slug($request->url_short) : Str::slug(Str::random(6)),
            ])->user()->associate($user)->save();
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
            $link->updateOrFail([
                'name' => $request->name,
                'url_long' => $request->url_long,
                'url_short' => $request->url_short ? Str::slug($request->url_short) : Str::slug(Str::random(6)),
            ]);
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
