<?php

use App\Day;
use App\Subject;
use Illuminate\Database\Seeder;

class DaysTableSeeder extends Seeder
{
    private $actualDate;

    public function __construct()
    {
        $this->actualDate = date('Y-m-d');
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->architectureDays();
        $this->modelDays();

    }

    private function architectureDays()
    {
        Day::create([
            'date' => date('Y-m-d'),
            'start_time' => '15:00:00',
            'end_time' => '16:30:00',
            'attend' => 1,
            'subject_id' => 1,
            'professor_id' => 1
        ]);

        Day::create([
            'date' => date('Y-m-d', strtotime('+4 day', strtotime($this->actualDate))),
            'start_time' => '17:15:00',
            'end_time' => '18:45:00',
            'attend' => 0,
            'subject_id' => 1,
            'professor_id' => 1
        ]);
    }

    private function modelDays()
    {
        Day::create([
            'date' => date('Y-m-d', strtotime('+3 day', strtotime($this->actualDate))),
            'start_time' => '16:30:00',
            'end_time' => '18:00:00',
            'attend' => 1,
            'subject_id' => 2,
            'professor_id' => 1
        ]);

        Day::create([
            'date' => date('Y-m-d', strtotime('+5 day', strtotime($this->actualDate))),
            'start_time' => '21:00:00',
            'end_time' => '21:30:00',
            'attend' => 0,
            'subject_id' => 2,
            'professor_id' => 1
        ]);
    }
}
