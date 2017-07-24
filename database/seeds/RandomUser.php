<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\User;
use App\ClientsInformation;
class RandomUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        ClientsInformation::truncate();
        $faker = Faker::create();
        foreach (range(1,10) as $index) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'password'=>bcrypt('secret'),
                'address'=>$faker->randomDigit.",".$faker->city.",",
                'phone'=>$faker->phoneNumber,
                'status'=>0,
                'created_at' => $faker->dateTime($max = 'now'),
                'updated_at' => $faker->dateTime($max = 'now'),
            ]);
        }


        $date = date("Y-m-d");
        $clientinfo = new ClientsInformation();
        $clientinfo->fullname="Mangesh Pawar";
        $clientinfo->gender="Male";
        $clientinfo->clienttype="individual";
        $clientinfo->locbirth="mumbai";
        $clientinfo->maidenname="test";
        $clientinfo->dob=$date;
        $clientinfo->address0="Mumb,address1 adder";
        $clientinfo->address1="Mumb1,address4 addersdasa";
        $clientinfo->address2="Mumb3,address3 adderasdas";
        $clientinfo->city="pune";
        $clientinfo->country = "India";
        $clientinfo->postcode="400567";
        $clientinfo->email="ka@gmail.com";
        $clientinfo->phone="1236479664";
        $clientinfo->fax="HG789555";
        $clientinfo->clientlimit=1230;
        $clientinfo->introducer="recommbyfriend";
        $clientinfo->introducer_def="no test by developer";
        $clientinfo->save();
    }
}
