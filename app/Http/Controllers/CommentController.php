<?php

namespace myRoommie\Http\Controllers;

use myRoommie\Comment;
use Illuminate\Http\Request;
use myRoommie\Modules\Hostel\Hostel;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param Hostel $hostelName
     * @return \Illuminate\Http\Response
     */
    public function index($hostelName)
    {
        $hostel =Hostel::findOrFail($hostelName);
       $comments = $hostel->comments()->latest()->get();
        return view('individualHostel.comments',compact('comments','hostel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \myRoommie\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \myRoommie\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \myRoommie\Comment  $comment
     * @param  \myRoommie\Modules\Hostel\Hostel  $hostel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment, Hostel $hostel)
    {

        /*$comments = [
            $request->body,
            $request->hostel_id
        ];*/
        $this->validate($request,['message' => 'required|min:3']);
        Comment::create([
           'message' => request('message'),
           'hostel_id' => request('hostel_id'),
           'user_id' => auth()->id(),
        ]);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \myRoommie\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
