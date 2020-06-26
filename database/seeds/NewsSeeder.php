<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            'title' => 'Koç Burcu',
            'text' => 'Burçlar üç farklı niteliğe göre gruplanır: Kardinal (öncü), değişken ve sabit burçlar. Koç burcu dört kardinal burçtan biridir. Bu burçlar mevsimleri başlatır. Koç, baharı; Yengeç, yazı; Terazi, sonbaharı; Oğlak ise kışı başlatır. Bu burçlar özgün olmayı severler ve yaptıkları her şeyde birinci olmayı isterler. Akım belirleyicidirler; arkadaş ortamlarında partileri, organizasyonları onlar başlatan onlardır. Zodyak’ın ilk burcu olan Koç burcunun varlığı her zaman enerjik ve çalkantılı bir başlangıca işaret eder. Koç burçları çalışma ortamlarında da arkadaş ortamlarında da her zaman hareket, hız ve rekabet peşindedir; her şeyde birinci olmaya çalışırlar. Yönetici gezegenleri Mars’ın ateş elementine ait olması nedeniyle Koç burcu en aktif burçlardan biridir. Zaman zaman düşünmeden de olsa harekete geçmek onların doğasındadır. Güneş, Koç burcuna olağanüstü organizasyon becerileri verir: Öğlen arasından önce tek seferde birden fazla işi bitirmeyi beceremeyen bir Koç burcuyla karşılaşma ihtimaliniz düşüktür. Amaçları için mücadele etmeyi görev edinir, birlikteliğe ve takım çalışmasına önem verirler. Koç burcu insan vücudunda başı yönetir ve başla birlikte harekete geçer. Kelimenin tam anlamıyla başları dik yürürler. Doğal olarak cesurdurlar ve bir şeyi denemekten ya da risk almaktan nadiren korkarlar. Hangi yaşta olursalar olsunlar bir gencin gücüne ve enerjisine sahip olurlar; verilen herhangi bir görevi çabucak yerine getirirler.'
        ]);

        DB::table('news')->insert([
            'title' => 'Boğa Burcu',
            'text' => 'Burçlar üç farklı niteliğe göre gruplanır: kardinal (öncü), değişken ve sabit burçlar. Boğa burcu dört sabit burçtan biridir; diğer dört sabit burç ise Aslan, Akrep ve Kova’dır. Bu burçlar her mevsimin ortasına denk gelir. Bunlar dengeleyici burçlardır; kendilerine bir amaç belirler ve sonra da inşa etmeye başlarlar. Öncü burçların öne attığı heyecanlı fikirleri alır, bunları somut bir şeye dönüştürürler. Boğa burcu toprak elementi altında gruplanan üç burçtan biridir (diğerleri Başak ve Oğlak’tır). Zodyak döngüsündeki ilk toprak burcu olduğu için binayı oluşturan temel gibidir. Çoğu Boğa insanı dengeleyicidir, kendileri ve başkaları için güvenliği sağlamaya çalışırlar. Meseleleri ayakları yere basan, pratik ve gerçekçi bir bakış açısıyla görmeye meyillidirler. Boğa burcu için para kazanmak kolaydır ve yıllarca aynı proje üzerinde çalışabilirler. Hantal ve inatçı bir burç olan Boğa burcu enerjisinin iki farklı hızı vardır: Ya çayırda otlayan bir öküz gibi gevşemiş bir haldedir ya da boğa güreşindeki bir boğa gibi coşkulu. Boğa burcu içsel bir enerji tasarrufu programına sahiptir. Eğer bir şey zaman ve kaynak yatırımına değerse sabırlı bir şekilde ona ulaşır. Yaptığı işi küçük aşamalara bölmeyi sever. Her ne kadar inatçılıkları olumsuz yanları olsa da bu inatçılıkları bağlılık olarak da adlandırılabilir; her ne olursa olsun görevleri yerine getirme yetenekleri muazzamdır. Bu da onları harika çalışanlar yapan bir özelliktir. Ayrıca uzun süreli arkadaşlık ve sevgililik de Boğa burcunun özelliğidir. Boğa burcunun yönetici gezegeni aşkın, cazibenin, güzelliğin, tatminin, yaratıcılığın ve kadirşinaslığın gezegeni olan Venüs’tür. Boğa burçları sadıktır ve ani değişiklikleri, eleştirileri sevmezler.'
        ]);

        DB::table('news')->insert([
            'title' => 'İkizler Burcu',
            'text' => 'Burçlar üç farklı niteliğe göre gruplanır: kardinal (öncü), değişken ve sabit burçlar. İkizler burcu dört değişken burçtan biridir (diğerleri Başak, Yay ve Balık’tır). Değişken burçlar mevsimleri sona erdiren burçlardır ve her mevsimden dersler almışlardır. Her şeyin bir sonu olduğunu bilirler ve görevleri herkesin mevsim değişimine uyum sağlamasına yardımcı olmaktır. Diğer burçlardan daha bilgedirler. Diğer burçlara göre değişime daha kolay ayak uydurabilirler; pek çok duruma uyum sağlamak için bukalemun gibi renk değiştirirler. Ayrıca Zodyak’ın düzeltmenidirler: Kardinaller bir plan öne sürer, sabit burçlar planı eyleme döker, değişken burçlar ise eleştirel bir gözle son rötuşları yapar.Zodyak’ta hava elementine sahip olan ilk burç İkizler olduğu için İkizler burcu, değişim ve iletişim rüzgârlarını başlatan ilk rüzgâr gibidir. İkizler burcu, büyük ve yaratıcı bir sinerji oluşturarak bir anda insanları iletişime geçirir. İkizler burcu gezegen döngüsündeyken hepimiz arkadaşlarımızla daha fazla zaman geçirmeye meyilli oluruz. Enerjisi hızlı ve telaşlıdır. İkizler burcu iletişimi yönetir; esprili kelime oyunlarına, dinamik diyaloglara ilham verir. İkizler burcu geçişleri beyin fırtınaları ve sosyalleşme açısından harika bir dönemdir. Ayrıca bu burç, fikirlerin buluşmasından yanadır. İkizler burcu gezegen geçişi sırasında konuşma yetilerimiz gelişir; arkadaşlarımızla saatler boyunca o konudan bu konuya konuşurken bulabiliriz kendimizi. Öte yandan hayatın inişli çıkışlı yönünü temsil eder; ayak uydurmayı becerebilirseniz müthiş bir heyecan yaşamış olursunuz. İkizlerin doğası çocuk masumiyetine sahiptir; kardeşliğe, birbirinden tamamen farklı kişiliklere sahip olan dostlar ve akrabalar arası sevgiye olan inançlarını temsil eder. Bu burcun insanlarının görevi farklılıkları birleştirmek ve canlarını kardeşleri ya da arkadaşları uğruna feda etmeye hazır hâle getirmektir. Etkileyici ve zeki İkizler burcu, tek bir beden içinde iki farklı kişiliği temsil eder; hangisiyle karşı karşıya olacağınızı asla bilemezsiniz. Sosyal, dışa dönük ve eğlenceli olsalar da aniden ciddileşme ve huysuzlaşma eğilimindedirler. Son derece meraklıdırlar; her zaman yapmak istedikleri şeyler için yeterince vakitleri olmadığını düşünürler.'
        ]);
    }
}
