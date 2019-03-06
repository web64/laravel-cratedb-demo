<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use App\ArrayTest;

class CrateTest extends Command
{
    protected $signature = 'test';
    protected $description = 'Test CrateDB';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $model = ArrayTest::create([
            'id' => 2,
            'string_array'  => ['tag1', 'tag2', 'tag3'],
            'integer_array' => [1,2,3,4,5]
        ]);

        dd( $model );

        $res = DB::connection('crate')->select("SELECT * FROM graph64.links LIMIT 5");
        dump( $res );
    }
}
