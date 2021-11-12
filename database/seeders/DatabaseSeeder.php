<?php

namespace Database\Seeders;

use App\Models\Contact;
use App\Models\Mongodb\Contact as MongodbContact;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        try {
            DB::beginTransaction();
            Contact::factory(25)->create()->each(function ($contact) {
                MongodbContact::create([
                    'name'             => $contact->name,
                    'email'            => $contact->email,
                    'phone_number'     => $contact->phone_number,
                    'zip_code'         => $contact->zip_code,
                    'address'          => $contact->address,
                    'address_number'   => $contact->address_number,
                    'neighborhood'     => $contact->neighborhood,
                    'state'            => $contact->state,
                    'city'             => $contact->city,
                    'relational_db_id' => $contact->id,
                ]);
            });
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
}
