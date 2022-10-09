<?php

namespace Database\Seeders;

use App\Models\Record;
use Illuminate\Database\Seeder;

class RecordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 生成数据集合
        Record::factory()->count(10)->create();
        // 单独处理第一个用户的数据
        $record = Record::find(1);
        $record->title = "Lonely等";
        $record->hero = "孙策";
        $record->record = "2/2/1";
        $record->remarks = "有病不知道为啥就开演员";
        $record->created_at = date("Y-m-d H:i:s");
        $record->updated_at = date("Y-m-d H:i:s");
        $record->save();
    }
}
