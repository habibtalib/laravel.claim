<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon; 

class ClaimTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

		$faker = Faker\Factory::create();

        $limit = 10;
        for ($i = 0; $i < $limit; $i++) {
            
       

            DB::table('tbl_claim')->insert([
	            'claimNo' => $faker->ean8,
	            'claimName' => $faker->name,
	            'caseFile' =>  $faker->numberBetween($min = 10000, $max = 90000),
	            'da' => $faker->date($format = 'Y-m-d', $max = 'now'),
	            'insurance' =>  $faker->name,
	            'insured' => $faker->boolean,
	            'coverageType' =>  'No Fault',

	            'location' => $faker->address,
	            'transDate' => $faker->date($format = 'Y-m-d', $max = 'now'),
	            'transTime' => $faker->time($format = 'H:i:s', $max = 'now'),
	            'examType' => $faker->jobTitle,
	            'Provider' => $faker->company,
	            'password' => '$2y$10$oIJoXE59JbEkPdMD21Qoxe.DRAmn59UvAvVeqGwYuc8WGKi1bgoG.',
	            'avatar' => 'default.jpg',

                'created_at' => Carbon::now(),
	        ]);
        }





    }
}
