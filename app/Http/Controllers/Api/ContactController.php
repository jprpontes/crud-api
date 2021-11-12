<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;
use App\Http\Resources\ContactEditResource;
use App\Http\Resources\ContactListItemResource;
use App\Http\Resources\StateListItem;
use App\Models\Mongodb\Contact as MongodbContact;
use App\Models\Contact;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = ContactListItemResource::collection(MongodbContact::all());

        return response()->json([
            'contacts' => $contacts,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreContactRequest $request)
    {
        try {
            DB::beginTransaction();
            $contact = Contact::create($request->all());
            MongodbContact::create(array_merge($request->all(), [ 'relational_db_id' => $contact->id ]));
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = ContactEditResource::make(MongodbContact::findOrFail($id));
        return response()->json([
            'contact' => $contact,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateContactRequest $request, $id)
    {
        try {
            DB::beginTransaction();
            $mongoContact = MongodbContact::findOrFail($id);
            Contact::findOrFail($mongoContact->relational_db_id)->update($request->all());
            $mongoContact->update($request->all());
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            $mongoContact = MongodbContact::findOrFail($id);
            Contact::findOrFail($mongoContact->relational_db_id)->delete();
            $mongoContact->delete();
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    public function getStates()
    {
        $states = State::all();
        return response()->json([
            'states' => StateListItem::collection($states),
        ]);
    }
}
