<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('content')->insert([
            'name' => 'Hakkımızda',
            'text' => 'egegen, bir hayalin ve hedefin sembolü olarak 2000\'li yıllarda unvanına katkı yapan Ege\'nin incisi İzmir\'de faaliyetlerine başladı. İnternetin ve teknolojinin sınırsızlığıyla egegen\'in hayal gücünün birleşmesi, egegen\'i önce İstanbul\'a ve ardından tüm ülkeye taşıdı. Genç ve umutlu ekip hiç durmadan "en iyi" olmak için çalışmaya devam ederken, artık ülke sınırlarının da aşılabileceğini gösterdi. egegen, yaklaşık 20 yıl önce başladığı serüvende artık farklı sektörlerde yerli ve yabancı pek çok firmaya hizmet vermektedir. egegen, "en yeni ve en iyi" hizmeti sağlama misyonuyla çalışırken, bir yandan da kendini bu gelişime uygun olarak sürekli modernize etmektedir. egegen, her zaman var olabilmek ve başarısını sürdürebilmek için yüzünü " geleceğe " dönmüştür. Biz düşlerinizi ve düşüncelerinizi önemsiyoruz ve tecrübemizi de ekleyerek tam olarak istediğiniz şeyin ortaya çıkmasına yardımcı oluyoruz. egegen her zaman bu hedefle çalıştı ve bundan sonra da çalışmaya devam edecek.'

        ]);

        DB::table('content')->insert([
            'name' => 'Bize Ulaşın',
            'text' => 'Ankara Cad. No:119 Bayraklı / İZMİR'
        ]);
    }
}
