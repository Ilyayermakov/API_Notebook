<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\NoteListStoreRequest;
use App\Http\Resources\NoteListResource;
use App\Models\Noteslist;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class NotelistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return NoteListResource::collection(
            Noteslist::orderBy('created_at', 'desc')
                ->get()
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NoteListStoreRequest $request)
    {
        $created_notelist = Noteslist::create($request->validated());

        return new NoteListResource($created_notelist);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Noteslist $notelist)
    {
        return new NoteListResource($notelist);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NoteListStoreRequest $request, Noteslist $notelist)
    {
        $notelist->update($request->validated());

        return new NoteListResource($notelist);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Noteslist $notelist)
    {
        $notelist->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
