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
                'snowmap_url' => 'https://res.cloudinary.com/dgf4sxuuo/image/upload/v1698639696/%E3%81%88%E3%81%84%E3%81%B6%E3%82%8B%EF%BC%95_sp44oq.jpg',
         ]);
         
          DB::table('areas')->insert([
                'name' => '竜王スキーパーク',
                'detail' => '初級者おすすめ。166人乗りの世界最大級のゴンドラ。頂上では雲海も見られる。',
                'address' => '〒381-0405長野県下高井郡山ノ内町竜王11700-26',
                'access' => '信州中野I.Cから車で16km  長野駅から電車とバスで80分',
                'snowmap_url' => 'https://res.cloudinary.com/dgf4sxuuo/image/upload/v1698640172/%E3%82%8A%E3%82%85%E3%81%86%E3%81%8A%E3%81%86%EF%BC%95_jnyzmr.jpg',
         ]);
         
         DB::table('areas')->insert([
                'name' => '栂池高原スキー場',
                'detail' => '初級者向け。　横に広いゲレンデ。　パークも完備',
                'address' => '〒399-9422長野県北安雲郡小谷村千国12840-1',
                'access' => '新宿から車で４時間20分　長野I.Cから約80分',
                'snowmap_url' => 'https://res.cloudinary.com/dgf4sxuuo/image/upload/v1698640310/%E3%81%A4%E3%81%8C%E3%81%84%E3%81%91%EF%BC%95_cwyq3i.jpg',
         ]);
         
          DB::table('areas')->insert([
                'name' => '野沢温泉スキー場',
                'detail' => '樹氷が輝くビックスケールのゲレンデで、本州屈指の雪質と眺望が自慢',
                'address' => '〒389-2502長野県下高井郡野沢温泉村豊郷7653',
                'access' => '新宿から4時間　長野駅から電車とバスで2時間',
                'snowmap_url' => 'https://res.cloudinary.com/dgf4sxuuo/image/upload/v1698640345/%E3%81%AE%E3%81%96%E3%82%8F%EF%BC%95_dxkyif.jpg',
         ]);
         
          DB::table('areas')->insert([
                'name' => '苗場スキー場',
                'detail' => '中上級者向け。横に広いゲレンデ。パークも完備',
                'address' => '〒949-6212新潟県南魚沼郡湯沢町三国202',
                'access' => '新宿から車で3時間　越後湯沢駅からバス40分　湯沢I.Cから30分',
                'snowmap_url' => 'https://res.cloudinary.com/dgf4sxuuo/image/upload/v1698640441/%E3%81%AA%E3%81%88%E3%81%B0%EF%BC%95_uvgmqg.gif',
         ]);
         
          DB::table('areas')->insert([
                'name' => '舞子スノーリゾート',
                'detail' => '初級者向け。コースがたくさんあり最長滑走距離6000ｍ。レンタル充実',
                'address' => '〒949-6423新潟県南魚沼市舞子2056-108',
                'access' => '新宿から車で2時間40分　塩沢石打I.Cから約５分',
                'snowmap_url' => 'https://res.cloudinary.com/dgf4sxuuo/image/upload/v1698640457/%E3%81%BE%E3%81%84%E3%81%93%EF%BC%95_mecjds.jpg',
         ]);
         
          DB::table('areas')->insert([
                'name' => 'ハンターマウンテン塩原',
                'detail' => '初級者~上級者まで楽しめる12のコース。都心から近い最大級のスノーリゾート',
                'address' => '〒329-2922栃木県那須塩原市湯本塩原字前黒',
                'access' => '東京駅から新幹線とバスで2時間半 西那須野塩原I.Cから30分',
                'snowmap_url' => 'https://res.cloudinary.com/dgf4sxuuo/image/upload/v1698640484/%E3%81%AF%E3%82%93%E3%81%9F%E3%81%BE%EF%BC%95_aagpk5.jpg',
         ]);
         
          DB::table('areas')->insert([
                'name' => '川場スキー場',
                'detail' => '初級者向け。都心から近く立体駐車場あり。パークアイテム充実',
                'address' => '〒378-0101群馬県利根郡川場村川場高原',
                'access' => '関越道沼田ICから車で25分 JR沼田駅から車で40分',
                'snowmap_url' => 'https://res.cloudinary.com/dgf4sxuuo/image/upload/v1698640500/%E3%81%8B%E3%82%8F%E3%81%B0%EF%BC%95_y0phnz.jpg',
         ]);
         
          DB::table('areas')->insert([
                'name' => 'エーデルワイススキー場',
                'detail' => '初級者向け。子供向けの遊び場あり。家族で遊べるスキー場',
                'address' => '〒321-2612栃木県日光市川治温泉高',
                'access' => '東京駅から新幹線とバスで2時間半 西那須野塩原I.Cから30分',
                'snowmap_url' => 'https://res.cloudinary.com/dgf4sxuuo/image/upload/v1698640513/%E3%81%88%E3%81%A7%EF%BC%95_hrk7nv.jpg',
         ]);
         
          DB::table('areas')->insert([
                'name' => 'ホワイトワールド尾瀬岩鞍',
                'detail' => '群馬エリアで面積最大スキー場 最大滑走距離3000m',
                'address' => '〒378-0412群馬県利根郡片品村土出2609',
                'access' => '東京から車で2時間半 沼田I.Cから車で40分',
                'snowmap_url' => 'https://res.cloudinary.com/dgf4sxuuo/image/upload/v1698640545/%E3%81%8A%E3%81%9C%EF%BC%95_rj02jj.jpg',
         ]);
         
          DB::table('areas')->insert([
                'name' => '神立スノーリゾート',
                'detail' => '初級者向け。19歳リフト券無料。レンタル充実',
                'address' => '〒949-6102 新潟県南魚沼郡湯沢町神立4121-1',
                'access' => '新宿から車で2時間40分　湯沢I.Cから約3分',
                'snowmap_url' => 'https://res.cloudinary.com/dgf4sxuuo/image/upload/v1698640942/%E3%81%8B%E3%82%93%E3%81%A0%E3%81%A4%EF%BC%95_tpjftr.jpg',
         ]);
         
          DB::table('areas')->insert([
                'name' => 'GALA湯沢スキー場',
                'detail' => '初級者向け。駅直結のゲレンデ。レンタル充実',
                'address' => '〒949-6102 新潟県南魚沼郡湯沢町湯沢1039-2',
                'access' => 'ガーラ湯沢駅徒歩1分　湯沢I.Cから約5分',
                'snowmap_url' => 'https://res.cloudinary.com/dgf4sxuuo/image/upload/v1698640964/%E3%81%8C%E3%83%BC%E3%82%89%EF%BC%95_pcb1ih.jpg',
         ]);
         
          DB::table('areas')->insert([
                'name' => '上越国際スキー場',
                'detail' => '初級者おすすめ。全国屈指の面積を持つスキー場 22本のコース',
                'address' => '〒949-6102 新潟県南魚沼郡湯沢町湯沢1039-2',
                'access' => '関越道塩沢石打ＩＣより約7分 上越国際スキー場前駅より徒歩１分',
                'snowmap_url' => 'https://res.cloudinary.com/dgf4sxuuo/image/upload/v1698640974/%E3%81%98%E3%82%87%E3%81%86%E3%81%88%E3%81%A4%EF%BC%95_jf22ck.jpg',
         ]);
         
          DB::table('areas')->insert([
                'name' => '妙高杉ノ原スキー場',
                'detail' => '最大滑走距離8500m ツリーランコース充実',
                'address' => '〒949-2113新潟県妙高市杉野沢',
                'access' => '東京駅から新幹線とタクシーで３時間 妙高高原I.Cから10分',
                'snowmap_url' => 'https://res.cloudinary.com/dgf4sxuuo/image/upload/v1698640987/%E3%81%BF%E3%82%87%E3%81%86%E3%81%93%E3%81%86%EF%BC%95_aeasnu.jpg',
         ]);
         
         
         

         
    }
}
