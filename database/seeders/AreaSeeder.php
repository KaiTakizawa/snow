<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('areas')->insert([
                'name' => 'エイブル白馬五竜スキー場',
                'detail' => '日本屈指の大きさを誇るゲレンデ。初級者から上級者までおすすめ',
                'address' => '〒399-9211長野県北安雲郡白馬村神域22184-10',
                'access' => '新宿から車で４時間　長野駅からバス90分',
         ]);
         
          DB::table('areas')->insert([
                'name' => '竜王スキーパーク',
                'detail' => '初級者おすすめ。166人乗りの世界最大級のゴンドラ。頂上では雲海も見られる。',
                'address' => '〒381-0405長野県下高井郡山ノ内町竜王11700-26',
                'access' => '信州中野I.Cから車で16km  長野駅から電車とバスで80分',
         ]);
         
         DB::table('areas')->insert([
                'name' => '栂池高原スキー場',
                'detail' => '初級者向け。　横に広いゲレンデ。　パークも完備',
                'address' => '〒399-9422長野県北安雲郡小谷村千国12840-1',
                'access' => '新宿から車で４時間20分　長野I.Cから約80分',
         ]);
         
          DB::table('areas')->insert([
                'name' => '野沢温泉スキー場',
                'detail' => '樹氷が輝くビックスケールのゲレンデで、本州屈指の雪質と眺望が自慢',
                'address' => '〒389-2502長野県下高井郡野沢温泉村豊郷7653',
                'access' => '新宿から4時間　長野駅から電車とバスで2時間',
         ]);
         
          DB::table('areas')->insert([
                'name' => '苗場スキー場',
                'detail' => '中上級者向け。横に広いゲレンデ。パークも完備',
                'address' => '〒949-6212新潟県南魚沼郡湯沢町三国202',
                'access' => '新宿から車で3時間　越後湯沢駅からバス40分　湯沢I.Cから30分',
         ]);
         
          DB::table('areas')->insert([
                'name' => '舞子スノーリゾート',
                'detail' => '初級者向け。コースがたくさんあり最長滑走距離6000ｍ。レンタル充実',
                'address' => '〒949-6423新潟県南魚沼市舞子2056-108',
                'access' => '新宿から車で2時間40分　塩沢石打I.Cから約５分',
         ]);
         
          DB::table('areas')->insert([
                'name' => '神立スノーリゾート',
                'detail' => '初級者向け。19歳リフト券無料。レンタル充実',
                'address' => '〒949-6102 新潟県南魚沼郡湯沢町神立4121-1',
                'access' => '新宿から車で2時間40分　湯沢I.Cから約3分',
         ]);
         
          DB::table('areas')->insert([
                'name' => 'GALA湯沢スキー場',
                'detail' => '初級者向け。駅直結のゲレンデ。レンタル充実',
                'address' => '〒949-6102 新潟県南魚沼郡湯沢町湯沢1039-2',
                'access' => 'ガーラ湯沢駅徒歩1分　湯沢I.Cから約5分',
         ]);
         

         
    }
}
