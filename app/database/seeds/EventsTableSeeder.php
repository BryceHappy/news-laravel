<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class EventsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		// foreach(range(1, 10) as $index)
		// {
			Event::create([
				'history' => '復興客機墜基隆河',
				'time' => '2015-02-04 10:56:00',
				'user_id' => 1,
				'other_edit' => 0,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
			]);
		// }
	}

}