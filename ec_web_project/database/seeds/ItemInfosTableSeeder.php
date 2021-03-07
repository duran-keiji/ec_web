<?php

use Illuminate\Database\Seeder;
use App\models\ItemInfo;

class ItemInfosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ItemInfo::create([
            'item_name' => 'Beats Studio3 Wireless ワイヤレスノイズキャンセリングヘッドホン -Apple -ミッドナイトブラック',
            'category_id'=> 3,
            'stock_quantity' => 20,
            'price' => 38280,
            'desctiption' => 'この商品について
                Class 1のBluetooth経由であなたのデバイスと接続して音楽をワイヤレスで楽しめます
                バッテリーが最大8時間持続するので、外出先でも安心して使えます
                Fast Fuel機能を搭載し、バッテリー残量が少なくなっても5分の充電で約2時間再生できます
                一人ひとりに合った装着感のために、様々なイヤーチップが付属しています
                Flex-Formケーブルは一日中ずっと身につけられる快適さがあり、ポケットサイズなので持ち運びも簡単です
                クリアで本格的、そして輪郭のはっきりしたサウンドをあなたの毎日にお届けします
                電話への応答、音楽のコントロール、Siriの起動ができるRemoteTalk',
            'details' => 'ANCオン：最長22時間 　ANCオフ：最長40時間',
            'color' => 'ミッドナイトブラック',
            'size' => null,
            'pattern'=> null,
            'evaluation' => 4,
            'review' => 422,
            'point_level' => 0,
            'sale_level' => 0,
            'customer_question' => 'この商品はオーバーイヤーですか？',
            'customer_answer' => 'はい、耳全体が隠れます',
            'delete_flg' => 0
        ]);
        ItemInfo::create([
            'item_name' => 'パナソニック ヘアドライヤー ナノケア 高浸透「ナノイー」搭載 ピンクゴールド EH-NA0B-PN',
            'category_id'=> 3,
            'stock_quantity' => 10,
            'price' => 23980,
            'desctiption' => '商品紹介
                美容のために進化した、新世代の「ナノイー」。
                ●ナノケア史上最高※、従来比18倍の水分発生量。
                ※ 2005年発売以降のヘアードライヤー ナノケア搭載デバイスとの比較　　
                ※ 「ナノイー」と高浸透「ナノイー」との比較（パナソニック調べ）
                ●美容師91人/100人中が実感した、"速乾力”※
                ※2019年6月　美容師100名にアンケート実施（パナソニック調べ）
                ●美容師100人/100人中が、「お客様におすすめしたい」※
                ※2019年6月　美容師100名にアンケート調査実施（パナソニック調べ）
                ●誕生、高浸透「ナノイー」　髪に、驚きのうるおいと、なめらかさ。※
                ※2014〜2018年発売従来品「ナノケア」使用の女性100名にEH-NA0Bを使用後アンケート調査（パナソニック調べ）
                使い続けることで差が出るなめらかさ。 摩擦ダメージによる髪のざらつきを抑え、なめらかな髪へ。',
            'details' => 'この商品について
                消費電力: 1200W/電源:AC100V 50-60Hz
                本体サイズ:高さ22.8×幅21.4×奥行9.2cm
                本体重量(kg):0.574
                電源コード長さ:約1.7m',
            'color' => 'ピンクゴールド',
            'size' => '最上位',
            'pattern'=> '単品',
            'evaluation' => 5,
            'review' => 4953,
            'point_level' => 0,
            'sale_level' => 0,
            'customer_question' => 'Eh-cna9bは海外で使えますか？電圧110vの国',
            'customer_answer' => '仕様でAC100Vなのでダメでしょう。',
            'delete_flg' => 0
        ]);
        ItemInfo::create([
            'item_name' => 'エアジョーダン 1 ミッド AIR JORDAN 1 MID CHICAGO BLACK TOE black/blk-gym',
            'category_id'=> 2,
            'stock_quantity' => 4,
            'price' => 28600,
            'desctiption' => '商品の説明
                バスケットボールのみならず世界中の様々なファッションシーンや、スニーカー好きを虜にし続ける人気のジョーダンシリーズより記念すべきファーストモデルAIR JORDAN 1のミッドカットモデルに、待望のNEW COLORが登場！AJシリーズの復刻を皮切りに、ジョーダンブランドから続々とリリースされるモデルの中から今作は、AJ1 OGシリーズの名作カラー通称"CHICAGO"などを彷彿させる美しいカラーブロッキング！様々なスタイリングにマッチし、デイリーユースに活躍する万能な一足です！OGモデルに比べカラーリングの自由度やコストパフォーマンスに優れたプライスなどが好評のエアジョーダン1ミッドカットモデルのNEWカラーの登場はファン必見！この機会に是非お見逃しなく！',
            'details' => '表地: スムース
                当店の取扱商品の大半は「並行輸入品」となります。海外から直輸入の際、商品ボックスにダメージが発生している場合や、マーキングやシール貼り付けられている商品も御座います。ご理解の上、ご購入下さい。',
            'color' => 'レッド',
            'size' => '27.5',
            'pattern'=> '',
            'evaluation' => 4,
            'review' => 56,
            'point_level' => 0,
            'sale_level' => 0,
            'customer_question' => '初期モデルでしょうか',
            'customer_answer' => '復刻版となっております',
            'delete_flg' => 0
        ]);
        ItemInfo::create([
            'item_name' => '[サムソナイト] スーツケース コスモライト スピナー75 94L 75cm 2.6kg',
            'category_id'=> 1,
            'stock_quantity' => 50,
            'price' => 57750,
            'desctiption' => '米国生まれのスーツケースブランド　Samsonite（サムソナイト）
                1910年、アメリカ・コロラド州デンバーで創立されたスーツケースのリーディングカンパニー「サムソナイト」。
                創業から100年にわたり、変わりゆく人々のライフスタイルやニーズに応えて、実用的でありながらもデザインの高い製品を開発しトラベルアイテムの世界をリードするブランドへと成長してきました。
                高い品質と信頼性、優れたクラフトマンシップ、時を超えたスタイルという創業時からのコンセプトを忠実に守り、サムソナイトは旅をテーマにした製品を展開し続けています。',
            'details' => '表地: HS Curv
                留め具の種類: ファスナー
                【送料・返品無料】Amazon.co.jpが販売・発送する2,000円以上の注文は通常配送、返品無料(日本国内のみ)
                スーツケースの種類:ハードケース(ファスナー)
                三辺合計(㎝):157cm
                H:75cm/W:51cm/D:31cm
                容量: 94L
                重量:2.6kilograms
                機内持ち込み: 不可
                TSAロック付き(ダイアル式)
                無料預け入れ可能(3辺合計158cm未満)
                原産国はハンガリーもしくはベルギーとなります。また原産国は選択できません。',
            'color' => 'ブラック',
            'size' => '2.6kg',
            'pattern'=> '',
            'evaluation' => 4.5,
            'review' => 116,
            'point_level' => 0,
            'sale_level' => 0,
            'customer_question' => '容量は何Lですか？',
            'customer_answer' => '80Lとなっております',
            'delete_flg' => 0
        ]);
    }
}
