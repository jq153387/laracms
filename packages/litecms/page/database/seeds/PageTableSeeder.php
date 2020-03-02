<?php

namespace Litecms;

use DB;
use Illuminate\Database\Seeder;

class PageTableSeeder extends Seeder
{
    public function run()
    {
        DB::table(config('litecms.page.page.table'))->insert([

            [
                'name'             => '關於捷克查理大學 - About Charles University',
                'slug'             => 'charles-1',
                'title'            => '關於捷克查理大學About Charles University',
                'content'          => '<img src="/img/main-jpg/Charles-2.jpg" width="240" height="170" align="right" />　　查理大學於1348年由羅馬帝國皇帝暨波希米亞國王-查理四世所創立，當時的查理大學是由藝術、醫學、法律、神學，四個系所組合而成，是歐洲著名的大學之一。至今，查理大學擁有17個獨立而自我管理的學院，校地分佈布拉格(Prague)、皮爾森(Pilsen)和HK(Hradec Kralove)。目前已有超過42,000人在此就讀，包括外國學生。<br />
                　　查理大學非常歡迎國外學生來此就讀，也配合各國的遊學、交換學生計劃。 <br />
              　　查理大學所有學院之學歷是全世界皆認可，以醫學院為例，於查理大學的醫學院畢業後在全世界皆可考醫師牌照，皆具行醫資格。',
                'order'            => 50,
                'category'         => 'default',
                'view'             => 'default',
                'status'           => 'Show',
            ],
            [
                'name'             => '查大第一醫學院',
                'slug'             => 'charles-13',
                'title'            => '查大第一醫學院',
                'content'          => '<img src="/img/main-jpg/Charles.jpg" width="240" height="170" align="right" />
                <p>查理大學醫學院自1965年就列入美國聯邦政府高等教育處醫學教育學歷認可。該校學歷在美國承認無誤，只要通過醫師檢定即可在美國執業。 <br />查大醫學院跟美國關係密切，該校畢業生取得MD學位之後前往美國進修PHD醫學博士是非常普遍的，本校也有博士課程用英文教學，許多美國畢業學生前往此校攻讀。查大醫學院在歐洲是享有盛譽的名校，歷屆校友鼎鼎大名，查理大學醫學院畢業的學生在世界醫學史上留名的大約有二十餘位，絕對超過波蘭＆匈牙利醫學院的水平及名氣。</p>',
                'order'            => 50,
                'category'         => 'default',
                'view'             => 'default',
                'status'           => 'Show',
            ],
            [
                'name'             => '查理大學第一醫學院詳細介紹',
                'slug'             => 'charles-2',
                'title'            => '查理大學第一醫學院詳細介紹',
                'content'          => '<img src="/img/main-jpg/Charles-8.jpg" width="240" height="170" align="right" />1 .查理大學醫學院至今已經有660年之悠久歷史。而查理大學第一醫學院在1348年查大成立時已視為查大的一個院所，也是中歐第一所醫學院，在中世紀時期查大是以拉丁文教學，在奧匈帝國時期是以德文教學，到1883年才開始以捷文教學，從1992年開始招收海外學生，並且以英語授課，基本上接受國際學生一直以來都是查大第一醫學院的政策。<br />
                而進入查大第一醫學院的學生是經過入學考試的篩選，是以英國A-Level程度的學生為標準，考生物、化學、物理，且名額是有限的。<br />      <img src="/img/main-jpg/Charles-9.jpg" width="240" height="170" align="right" />2. 第一醫學院已獲得參與美國 1965 年高等教育法案的學程以及聯邦學生財務補助方案（第四項，高等教育法案）專案的資格也參與聯邦家庭教育貸款 Stafford 方案（OPE ID 號碼：G33004）。此學院名列於美國教育部所出版的高中後教育機構的名錄，以及世界衛生組織 WHO 所發行的世界醫學院校名錄中（第七版，2000 年出版，105頁）。
                <br />
                3.
                查大第一醫學院學生在入學後，須在學生健康中心做體檢及填寫健康調查表，並且要通過HIV-TEST，之後學生要簽一份健康保險合約。在醫學院的前三年課程學校會安排每週4小時的捷語克，以讓學生在三年後實習時能與病人溝通。<br />
                4.
                每年學期開始在9月底，冬季課程十五週，在聖誕節時休息二週，之後四週的考試。夏季課程也是十五週，接下來就是考試及放暑假。從第二年開始，夏季課程的醫院實習也是課程的一部分。<img src="/img/main-jpg/Charles-10.jpg" width="240" height="170" align="right" /><br />
                5. 查大第一醫學院有超過63位教授，148位副教授和超過450位助教及教師，第一醫學院基本目標是希望提供給未來的畢業生(醫生)寬廣的醫學教育及紮實的理論基礎和科學的能力、醫學的思考邏輯和溝通方式。查大第一醫學院位於集捷克工業、商業、文化的中樞─布拉格。我們稱為─〝The City of one Hundred Spires〞，學生能在布拉格的音樂、藝術及專業學校和博物館、圖書館、歌劇院等，得到許多在布拉格才有的享受及豐富經驗。<br />      <img src="/img/main-jpg/Charles-33.jpg" width="290" height="204" align="left" />6. 布拉格是一個充滿活力、音樂、藝術的現代化歐洲城市，它的建築、歷史古蹟、豐富的文化每年都吸引了數百萬的觀光客到此地旅遊。布拉格有非常完整的公共設施，提供人們完善的服務，有便利及便宜的公共交通工具，如：地下鐵、公車、火車，因為有太多學生及觀光客在布拉格',
                'order'            => 50,
                'category'         => 'default',
                'view'             => 'default',
                'status'           => 'Show',
            ],
            [
                'name'             => '查理大學第一醫學院基本資料(2007年)',
                'slug'             => 'charles-3',
                'title'            => '查理大學第一醫學院基本資料(2007年)',
                'content'          => '<p><img src="/img/main-jpg/Charles-78.jpg" width="290" height="204" align="right" />學生人數共4,545人，含國際學生1,428人(2007年)<br />
                (一)、<strong>捷語教學課程學生</strong><br />
                醫學系共	2,266人，國際學生712人<br />
                牙醫系/口腔系 189人，國際學生25人<br />
                學士學位(護理、物理治療、職能治療、醫技等) 550人，國際學生56人<br />
                碩士學位(護理教育、醫技及醫管)108人，<br />
                國際學生3人<br />
                博士學位全職學生324人、非全職555人，國際學生130人</p>
                <p> (二)、<strong>英語教學課程學生</strong><br />
                  國際學生共434人<br />
                  醫學系387人<br />
                  牙醫系 40人<br />
                口腔學系 1人</p>
                <p> <img src="/img/main-jpg/Charles-79.jpg" width="290" height="204" align="right" />(三)、<strong>其他人員</strong><br />
                  1.教職人員共1,126人, 109名教授、144名副教授<br />
                  2.研究員共344人<br />
                  3.其他職員874人<br />
                  4.學術評議會成員30人<br />
                  5.學院院長、副院長等17人<br />
                  6.科學委員會52人<br />',
                'order'            => 50,
                'category'         => 'default',
                'view'             => 'default',
                'status'           => 'Show',
            ],
            [
                'name'             => '查理大學第一醫學院之國際認證International recognition',
                'slug'             => 'charles-4',
                'title'            => '查理大學第一醫學院之國際認證International recognition',
                'content'          => '<ul>
                <li><img src="/img/main-jpg/Charles-14.jpg" width="240" height="170" align="right" />The degrees are fully recognized in the EU and most countries at least for a limited registration. The student should ask the authorities or professional bodies in the respective country for information about the conditions for a full registration and recognition of the degree required to practice medicine. </li>
                <li> The Faculty is listed in the World Directory of Medical Schools published by WHO (7th edition, 2000, page 105) </li>
                <li> Faculty is also listed in the Directory of Postsecondary Institutions published by the US Department of Education </li>
                <li> <img src="/img/main-jpg/Charles-15.jpg" width="240" height="170" align="right" />The First Faculty of Medicine has qualified to participate in programmes under Higher Education Act of 1965 (HEA) and the Federal Student Financial Assistance Programs (Title IV, HEA programs) in the USA. Charles University in Prague - First Faculty of Medicine participates in the Federal Family Education Loan Stafford Program (OPE ID Number G33004). <br />
                </li>
              </ul>',
                'order'            => 50,
                'category'         => 'default',
                'view'             => 'default',
                'status'           => 'Show',
            ],
            [
                'name'             => '查理大學第一醫學院牙醫系',
                'slug'             => 'charles-5',
                'title'            => '查理大學第一醫學院牙醫系',
                'content'          => '<p>從2004/2005學年度開始，依照歐盟指令78/687與捷克共和國95/2004號法與121/2004號法，新增了牙醫系，更佳媲美目前的歐洲標準。五年研修期滿，畢業生（牙醫）可獲頒MDDr學位，即Doctor of Dental Medicine。<br />
                <br />
                　　課程分成捷克文與英文兩種版本，後者學生必須付費。新增牙醫系目前已進入第三年。課程到最後時，學生必須參加三個國家考試（口腔外科─Oral Surgery、治療牙醫學─Therapeutical Dentistry、整形外科牙醫學─Orthopaedic Dentistry）才能結業。<br />
                <br />
                  　　新的課程取代持續六年的口腔病學，代表一般內科與特殊口腔病學科目的整合，例如傳統牙醫、口腔外科、假牙、牙周病與口腔黏膜、牙齒矯正與兒童牙醫學。目前第一醫學院牙醫系還在教授以前課程的最後三年科目，研修期滿後，學生必須參加下列科目的國家考試：內科、外科、衛生與流行病學、社會醫學與口腔學等科目，例如外科牙醫學、整形外科口腔病學與治療口腔病學，通過考試之後，才能取得醫學博士學位，縮寫為MUDr。2008/2009年學年之後，不再對口腔學課程提供認證。
                  <br />
                  <br />
              </p>',
                'order'            => 50,
                'category'         => 'default',
                'view'             => 'default',
                'status'           => 'Show',
            ],
            [
                'name'             => '查理大學第一醫學院博士學位課程',
                'slug'             => 'charles-6',
                'title'            => '查理大學第一醫學院博士學位課程',
                'content'          => '<p><img src="/img/main-jpg/Charles-5.jpg" width="240" height="170" align="right" />　　查理大學第一醫學院跟捷克共和國的科學學術院與其他機構合作，已建立新的生物醫學博士課程制度，全職生至少需要三年才能結業，兼職生最多可研修八年。課程包括科學方法與特定科目（選修）：分子生物與基因、發展生物學、電流生理學、內分泌學與新陳代謝、生物化學與病理化學、神經科學、免疫學、微生物學、藥理學與毒物學、生物物理方法、生物資訊學、老年病學。<br />
                <br />
                　　博士學位課程的重點放在由傑出科學家帶領做實驗研究。此外也跟國際建立廣泛的接觸，學生有機會在研修期間拜訪海外實驗室。課程所鎖定的學生群為已經完成註冊程序的捷克或外國大學碩士畢業生。課程分成捷克文與英文兩種版本，後者學生必須付費。為了成功結業，博士生必須通過其所選擇領域的國家博士考試，且必須在受到敬重的科學期刊發表博士論文，並通過博士論文口試。畢業生將獲頒「博士」學位（縮寫為Ph.D）。<br />
                <br />
                <strong><img src="/img/main-jpg/Charles-18.jpg" width="240" height="170" align="right" />查理大學第一醫學院所認證的博士課程有下列課程：</strong></p>
                <ol>
                  <p><font color="#990000">1.分子生物、基因與病毒學Molecular Biology, Genetics and Virology<br />
                    2.細胞生物學與病理學Cell Biology and Pathology<br />
                    3.發展生物學Developmental Biology<br />
                    4.生物化學與病理化學Biochemistry and Pathobiochemistry<br />
                    5.人類生理學與病理生理學Human Physiology and Pathophysiology<br />
                    6.免疫學Immunology<br />
                    7.醫學微生物學Medical Microbiology<br />
                    8.神經科學Neurosciences<br />
                    9.藥理學與毒物學Pharmacology and Toxicology<br />
                    10.實驗外科Experimental Surgery<br />
                    <strong><img src="/img/main-jpg/Charles-9.jpg" width="240" height="170" align="right" /></strong>11.預防醫學Preventive Medicine<br />
                    12.生物資訊學Biomedical Informatics<br />
                    13.老年病學Gerontology<br />
                    14.醫療生物物理Medical Biophysics<br />
                    15.寄生生物學Parasitology<br />16.心理學–醫療心理學與精神病理學Psychology-Medical Psychology and sychopathology<br />
                    17.醫療倫理Medical Ethics<br />
                    18.醫學史History of Medicine
                  </font></p>',
                'order'            => 50,
                'category'         => 'default',
                'view'             => 'default',
                'status'           => 'Show',
            ],
            [
                'name'             => '查理大學第一醫學院學士課程',
                'slug'             => 'charles-7',
                'title'            => '查理大學第一醫學院學士課程',
                'content'          => '<p><img src="/img/main-jpg/Charles-56.jpg" width="240" height="170" align="right" />　　查理大學第一醫學院學在1992年，系所新增護理科學系（學士課程），又於1994年新增輔助醫事課程（學士課程）：職業治療、醫療科技。1998年新增物理療法課程（學士課程），2005年新增藥癮治療課程（學士課程）。就規則來說，學生必須研修三年且通過最後國家考試後，才能獲頒學士學位。畢業生將獲頒「學士」學位。</p>',
                'order'            => 50,
                'category'         => 'default',
                'view'             => 'default',
                'status'           => 'Show',
            ],
            [
                'name'             => '查理大學第一醫學院碩士、學士聯合課程',
                'slug'             => 'charles-8',
                'title'            => '查理大學第一醫學院碩士、學士聯合課程',
                'content'          => '<p><img src="/img/main-jpg/Charles-7.jpg" width="240" height="170" align="left" /><br />
                　　查理大學第一醫學院於2002/2003學年開始，系所開辦二年碩士班聯合課程。護理科學系的學位畢業生可以繼續研修護理科學碩士班，而醫療科技的學士畢業生可以繼續研修保健-醫療科技與資訊碩士班。通過最後國家考試及碩士論文口試後，畢業生將獲頒碩士學位。 <br />
              </p>',
                'order'            => 50,
                'category'         => 'default',
                'view'             => 'default',
                'status'           => 'Show',
            ],
            [
                'name'             => '查理大學第一醫學院的願景及目標',
                'slug'             => 'charles-9',
                'title'            => '查理大學第一醫學院的願景及目標',
                'content'          => '<p><strong><img src="/img/main-jpg/Charles-20.jpg" width="240" height="170" align="right" />願景：</strong><br />
                　　研發是教學活動不可缺少的一部分，也是我們首要的工作之一。查理大學第一醫學院的研究在傳統臨床科學領域打下紮實的聲譽，大大提升內分泌學、遺傳新陳代謝疾病、腫瘤學、心臟病學、腸胃病學、腎臟學、血液學、神經科學及其他領域的知識。<br />
                <br />
           　　目前正努力推動臨床與應用研究領域上的工作。不過，原來的分子與細胞生物學等基礎科學專案仍將是我們的努力重心，也是我們科學政策的指引。我們的研究團隊包括了學生在內，目前正善用所有的最新科技。我們研究團隊的成果品質日漸提升，產能也不斷提高，顯示我們研究團隊的競爭力與聲譽之高，不僅符合世界標準，並且每年在歐洲與全球研究領域參與無數的國際合作。<br />
           <br />　　
           過去十年，研究經費主要來自國內與全球贊助單位。最重要與複雜的研究專案與研究中心的經費直接來自捷克政府。基本研究領域為腫瘤學、實驗血液學、神經科學、新陳代謝疾病、心血管疾病與免疫學。此外，每年還有不同單位所贊助的三百個左右的專題研究專案。依據支出與研究成果之間的比值，是捷克產能最高的研究組織之一。每年累積的影響力達到大約400，印證我們的科學競爭力，而大約3千次的科學引用指數或許可代表我們研究成果的「有用性」。我們的競爭力與研究成果的品質年年增加。我們相信查理大學第一醫學院是從事醫學科學工作的好地方。</p>
                <p><strong>目標：</strong><br />
                  　　近來第一醫學院大大投資研究設施。實驗室由一群國際知名的熱心、有經驗職員管理。科學活動所募集出來的資金現在在第一醫學院的預算中佔了很大的比例。第一醫學院的目標是成為歐洲醫學教育體系的重要一份子，在歐洲與全球的研究領域進行最新科技的生物醫學研究，成為公認的最有價值成員。2005年，捷克共和國的「教育、青年暨運動部」宣佈查理大學的第一醫學院名列「捷克最佳100」教育機構之一。<br />
                  　　<br />
                  　　除了基本、應用與臨床研究領域內的科學活動，第一醫學院還善用校內的理論設施及實驗室，並在布拉格的綜合教學醫院與四個其他教學醫院舉辦密集的實習。臨床醫學的設備符合目前科技水平，由富有經驗的職員管理。第一醫學院的目標是將其教育過程的三個不可分要素組合在一起。這三個要素為：知識、技能與態度。<br />
                </p> ',
                'order'            => 50,
                'category'         => 'default',
                'view'             => 'default',
                'status'           => 'Show',
            ],
            [
                'name'             => '查理大學第一醫學院的教學醫院',
                'slug'             => 'charles-10',
                'title'            => '查理大學第一醫學院的教學醫院',
                'content'          => '<p><strong>JOINT INSTITUTIONS WITH GENERAL TEACHING HOSPITAL</strong></p>
                <p><strong>1st Medical Department-Clinical Department of Haematology</strong><br />
                  Haematological oncology – lymphoproliferative diseases – <br />
                  Haematopoietic stem cell transplantation</p>
                <p><strong>2nd Medical Department-Clinical Department of Cardiology and Angiology</strong><br />
                  Noninvasive and interventional cardiology and angiology – arrhytmology – inter- sive coronary care</p>
                <p><strong>3rd Medical Department – Clinical Department of Endocrinology and Metabolism</strong><br />
                  Endocrinology – diabetology – acute and chronic metabolic disorders – obesity- osteology – noninvasive cardiology – angiology – hypertension </p>
                <p><strong>4th Medical Department- Clinical Department of Gastroenterology and Hepatology</strong><br />
                  Hepatology- gastroenterology- intensive care medicine – nutrition and metabolic diseases – cardiology- angiology – lipid research – hyperbaric oxygenotherapy</p>
                <p><strong>1st Surgical Department- Clinical Department of Abdominal, Thoracic Surgery and Traumatology</strong><br />
                  General, abdominal and chest surgery- traumatology- oncosurgery- laparoscopic and robotic assisted surgery – endocrinosurgery <br />
                  <br />
                </p>',
                'order'            => 50,
                'category'         => 'default',
                'view'             => 'default',
                'status'           => 'Show',
            ],
            [
                'name'             => '查理大學第一醫學院與國際關係',
                'slug'             => 'charles-11',
                'title'            => '查理大學第一醫學院與國際關係',
                'content'          => '<p>查理大學第一醫學院和歐洲及海外的許多醫學院與研究機構已經建立科學與教育關係。在研究活動上，跟全球許多頂尖研究實驗室合作。近來系所贏得了若干國際研究贊助。此外，第一醫學院在歐洲的整合中扮演了重要角色，居中協調歐盟與東歐國家之間的許多關係。 </p>
                <p>第一醫學院已經跟Erasmus/Socrates課程內的50多所教育機構建立雙向聯繫。去年，超過125位學生參與課程，而將近60名外國學生來到查理大學第一醫學院就讀。其他如交換課程也接受海外許多醫學系學生前來接受許多臨時訓練。 </p>
              <p>另外第一醫學院也舉辦定期或不定期科學會議與研討會（例如，PRAGUECHO定期會議）。每年，我們款待來自海外的專家與客座教授。這讓我們得以交流本校的專業，並促進本校的知識與研究。我們鼓勵我們的專家與教授增進他們的專業，支持他們參訪外國大學與研究機構。過去十年，第一醫學院已經成為開放的研究與教育平台，不僅改善國際關係，也促進高效的新科學專案。<br />
              </p>    ',
                'order'            => 50,
                'category'         => 'default',
                'view'             => 'default',
                'status'           => 'Show',
            ],
            [
                'name'             => '查理大學第一醫學院的學生生活',
                'slug'             => 'charles-12',
                'title'            => '查理大學第一醫學院的學生生活',
                'content'          => '<p><strong><img src="/img/main-jpg/Charles-73.jpg" width="290" height="204" align="right" />1. 圖書館、閱讀室、Internet教室</strong><br />
                　　查理大學第一醫學院的中央圖書館是醫學院的學術社區，可外借的藏書超過	40萬冊。學生的借閱率很高，也常常使用閱讀室內將近5千冊的教科書。	學生亦可以使用醫學院內的幾間Internet教室及使用個人電腦。<br />
                <br />
                <br />
                <br />
                <strong><br />
                <br />
                <br />
                <img src="/img/main-jpg/Charles-74.jpg" width="290" height="204" align="right" />2.學校的社團</strong><br />
                　　社團幾乎是每個學校的重要社交生活一部分。第一醫學院亦是如此。社團位	在悠久的Faust大樓。大樓有許多著名的傳說，提供一個場所供學生、職		員、老師聚會。此外還可用來舉辦社交與科學活動、研討會、展覽與小型音	樂會。<br />
                <br />
                <br />
                <br />
                <br />
                <br />
                </p>    ',
                'order'            => 50,
                'category'         => 'default',
                'view'             => 'default',
                'status'           => 'Show',
            ],
            [
                'name'             => '查理大學第一醫學院博士學位課程',
                'slug'             => 'transpolo',
                'title'            => '傳寶留學中心介紹',
                'content'          => '',
                'order'            => 50,
                'category'         => 'default',
                'view'             => 'default',
                'status'           => 'Show',
            ],
            [
                'name'             => '查理大學第一醫學院之課程架構',
                'slug'             => 'class',
                'title'            => '查理大學第一醫學院之課程架構',
                'content'          => '<p>(一)、<strong> 學年</strong><br />
                ‧本大學為學期制，每學年的第一學期於九月 / 十月開始，類似於許多英國的學校。<br />
                ‧每學年兩學期，每個學期 15 週。<br />
                ‧第一學期於九月中 / 十月初開始，並於十二月底或一月初結束。第二學期於二月初開始。長假可供補修以及考試之用。學年於六月 / 七月結束。</p>
                <p>(二)、 <strong>課程概述</strong><br />
                  ‧最常見的教學方法為講授、研討、與實習，平均每週 30 小時。<br />
                  ‧在臨床課程中，學員輪流到各科實習。<br />
                  ‧本校提供有多樣化的選修及選項課程可供學生依其志趣選擇。<br />
                  ‧在第二、第四、與第五學年後，在各個主要臨床學科提供有暑期實習。<br />
                  ‧在此大學的最後一學年，是專門保留給各臨床科別。但是從第三學年起就有臨床的教學講授。<br />
                ‧本課程將在內科、外科、婦產科、小兒科、公共衛生、社會醫學 (Social Medicine)等各專科最終檢定考試通過後結束。</p>
                <p>(三)、<strong>課程</strong><br />
                標準的「一般基礎醫學」學位需要 6 年。分為兩個部份，第一部份是專注於必要的基礎學理學習以及對人體結構與功能上的基本認識。第二部份首先先就疾病、其結構與功能面、發生原因以及其醫療處置進行介紹。然後，大部份是在第四到第五學年，個別選擇臨床專科深入學習。整個第六學年完全投入於在醫療院所的臨床訓練，且將以四個最終檢定考試做為結束。通過考試者將於畢業典禮頒發醫學學位（MD或捷克語的 MUDr.）。</p>
                <p>(四)、<strong>以下提供在布拉格查大第一醫學院的課程範例：</strong><br />
                  (1).<strong>病理專題</strong><br />
                  前兩個學年是用來學習學理專題，瞭解人體器官的結構與功能以及其運作。<br />
                將對下列學科進行考試：</p>
                <ol>
                  <li> biophysics生理物理學</li>
                  <li>medical chemistry醫藥化學</li>
                  <li>biology and genetics生物遺傳學<br />
                    histology and embryology胚胎組織學</li>
                  <li>anatomy解剖學</li>
                  <li>biochemistry and molecular biology生化學與分子生物學</li>
                  <li>physiology生理學</li>
                  <li>immunology免疫學</li>
                  <li>first aid and patient care急救與病患照護</li>
                  <li>medical ethics醫學倫理</li>
                  <li>Latin and Greek terminology拉丁與希臘術語</li>
                  <li>principles of computer operation電腦操作原理</li>
                  <li>foreign language (Czech for foreign students)外語課程（對外國學生，改為修習捷克語）</li>
                </ol>
                <p>(2).<strong>預科臨床課程</strong><br />
                在第三學年以及第四學年的部份，將講授並測驗下列預科臨床專題：</p>
                <ol>
                  <li> pathology 病理學</li>
                  <li>pathobiochemistry 病理生化學</li>
                  <li>pathophysiology 病理物理學</li>
                  <li>microbiology 微生物學</li>
                  <li>pharmacology 藥理學</li>
                  <li>medical psychology 醫學心理學</li>
                  <li>propaedeutics in internal medicine and surgery 內外科基本原理</li>
                </ol>
                <p>(3).<strong>臨床課程</strong><br />
                臨床課程由第四學年開始，跨三學年的期間並以課程區塊組織並為個別學門專科所保留，通常會持續 1-3 週。在每個區塊的結束，將會給予考試檢定。臨床學科主題包括有：</p>
                <ol>
                  <li>internal medicine 內科</li>
                  <li> infectious diseases and epidemiology 傳染病與流行病學</li>
                  <li>radiology 放射科學</li>
                  <li>neurology 神經醫學</li>
                  <li>psychiatry 精神病學</li>
                  <li>surgery 外科</li>
                  <li>orthopaedic surgery 整型外科</li>
                  <li>urology	泌尿科</li>
                  <li>neurosurgery gynaecology and obstetrics 神經外科與婦產科</li>
                  <li>paediatrics 小兒科</li>
                  <li>oncology 腫瘤學</li>
                  <li>dermatovenerology 皮膚科</li>
                  <li>ENT diseases 耳鼻喉科疾病</li>
                  <li>ophthalmology	眼科</li>
                  <li>stomatology 口腔學</li>
                  <li>emergency medical care 緊急醫療照護</li>
                  <li>sport medicine	運動醫學</li>
                  <li>nuclear medicine 核子醫學</li>
                  <li>forensic medicine 法醫鑑識學</li>
                  <li>hygiene and public health 公共衛生</li>
                  <li>social medicine 社會醫學</li>
                  <li>tropical medicine 熱帶病學</li>
                  <li>primary medical care and outpatient care 主要醫療照護與門診病患治療<br />
                    </li>
              </ol>    ',
                'order'            => 50,
                'category'         => 'default',
                'view'             => 'default',
                'status'           => 'Show',
            ],
            [
                'name'             => '查理大學第一醫學入學相關訊息',
                'slug'             => 'bp_snz',
                'title'            => '查理大學第一醫學入學相關訊息',
                'content'          => '<p><img src="/img/main-jpg/Charles-50.jpg" width="240" height="170" align="right" />(一).<strong>申請資格Qualifications：</strong></p>
                <ol>
                  <li>具有高中或高中以上學歷(高中畢業成最好績英文80分，物理、化學、生物在75分以上。)若未達以上標準，自認英文可，願參加入學考試者也可接受報名。 </li>
                  <li>大學醫科相關科系畢業、肄業學生或高中畢業生只要要通過入學考試，即可入學。 </li>
                </ol>
                <p>(二).<strong>準備資料Application information：</strong></p>
                <ol>
                  <li>英文成績單、英文畢業證書 </li>
                  <li>成績單需含各科成績及學分數 </li>
                  <li>每年5月截止收件 </li>
                </ol>
                <p><img src="/img/main-jpg/Charles-51.jpg" width="240" height="170" align="left" />(三).<strong>申請流程Application Procedure：</strong></p>
                <p>1.備妥準備文件，經過初步審核 <br />
                  2.審核通過，填寫入學申請書 <br />
                  3.安排入學考試及口試(入學考試科目3科:生物、化學、數學或物理擇一)<br />
                  4.如果入學考試未通過，而高中成績及口試通過，則先就讀查理大學醫學院先修班，一年後錄取率90%。 <br />
                  <br />
                  5.通過考試，由學校發給錄取繳費單，繳完學費，由學校發給入學通知書。<br />
                  6. 
                  憑錄取通知書辦理捷克簽證(約2~3個月) <br />
                  7.
                  取得簽證，到查大第一醫學院報到</p>
                <p> (四).<strong><img src="/img/main-jpg/Charles-52.jpg" width="240" height="170" align="right" />醫學院Medical School：</strong></p>
                <ol>
                  <li>一般醫學：一年歐元$13,000<br /> 
                  (不含書籍、吃、住等費用)General Medicine)<br />
                  唸六年取得Doctor of General Medicine(MD)<br />
                  一般醫學系每年110名。 </li>
                  <li>牙醫學系：一年歐元$14,500<br /> 
                    (不含書籍、吃、住等費用)Dentistry <br />
                    唸五年取得Doctor of Dental Medicine<br />
                    牙醫系每年20名(全球) <br />
                    (上述學費標準為2011學年度)</li>
                </ol>
                <p> (五).<strong>入學考試時間Entrance Exam：</strong></p>
                <ul>
                  <li>	平常考試日期：每年6月 </li>
                  <li> 遲到考試日期：每年9月(通常會影響到簽證及宿舍的申請)</li>
                  <li>台灣考試時間另訂(請個別與台灣查大第一醫學院招生辦公室洽詢，電話：02-2570-5232)</li>
                </ul>
                <p>(六). <strong>查大醫學院入學考試參考書名：</strong></p>
                <p>一、生物：<br />
                  <strong>Recommended study materials:</strong><br />
                  <img src="/img/main-jpg/Charles-53.jpg" width="240" height="170" align="left" />N.P.O. Green, G.W. Stout, D.J. Taylor (ed. E. Soper): Biological Science 1&amp;2 <br />
                  Second edition, 1996, Cambridge University Press<br />
                  M.B. Roberts: Biology – a functional approach, Fourth edition, 1986, Nelson J.L. <br />
                  Hopson, N.K. Wessells: Essentials of biology, 1990, McGraw-Hill Publishing <br />
                company official general biology book ( after a consultation with the lector)<br />
                <br />
                <strong>Optional study</strong> E. Rudolf: Biology –a comprehensive guide for premedical students  網路告知Internet sites and hand-outs<br />
                <br />
                Campbell N.A., Reece J.B., Mitchell L.G. : Biology<br />
                  Addison Wesley Longman, Inc. 1999, ISBN 0-8053-6573-7</p>
                <p> <strong><img src="/img/main-jpg/Charles-54.jpg" width="240" height="170" align="right" />二、物理：</strong><br />
                  <strong>Pre- Programme physics:</strong><br />
                  Recommended study materials: Roger Muncaster – A-level Physics<br />
                  <br />
                  Sternheim M.M, Kane J.W. : General Physics<br />
                John Wiley, N.Y. 1991, ISBN : 0-471-52278-3</p>
                <p> <strong>三、化學：</strong><br />
                  <strong>Recommended study materials:</strong><br />
                  Eva Streblova – Chemistry – Part I. , Part II. – official general chemistry book <br />
                  (after consultation with the lector)<br />
            <br />
                  John W. Hill ed.: Chemistry and Life- An Introduction to General Organic and <br />
                  Biological Chemistry<br />
                  Macmillan Publishing Company, USA, ISBN:0-02-354541-0<br />
                  <br />
                  <br />
                </p>  ',
                'order'            => 50,
                'category'         => 'default',
                'view'             => 'default',
                'status'           => 'Show',
            ],
            [
                'name'             => '查理大學第一醫學院醫學先修班',
                'slug'             => 'Pre-Medical-Course',
                'title'            => '查理大學第一醫學院醫學先修班',
                'content'          => '<p><img src="/img/main-jpg/Charles-3.jpg" width="240" height="170" align="left" />(1)、<strong>一般資訊：</strong><br />
                　　如果你認為高中基礎較差，或是英文程度不夠，建議你先參加一年期的醫學院先修課程，此課程是由查大語言中心及專業準備課程單位，共同為英文授課的醫學院的醫學系、牙醫系、物理療法系、工程系的國際學生所開辦的課程。<br />
          讓學生能夠順利通過入學考試，而對醫學院先修班所開的課程包含：醫學英文、生物、物理、化學、數學、英語及捷語，達到至少是捷克高中畢業生的程度。<br />
          授予基礎的捷語課程，讓學生具備簡單溝通能力，並加強英文程度，以使其能於課堂上理解。</p>
                <p>(2)、<strong>費用(2011年)：</strong></p>
                <ol>
                  <li> $5,890歐元  </li>
                  <li> 住宿安排費$120歐元(不退)</li>
                  <li>預付2個月住宿費歐元$390(依宿舍的不同價格會有異動)。住宿費用不含餐費。<br />
                  單人房：4960/月(房內衛浴設備)    雙人房：3875/月 </li>
                </ol>
                <p>(3)、<strong>入學考試：</strong><br />
                  <img src="/img/main-jpg/Charles-41.jpg" width="290" height="204" align="right" />　學校可安排參加以下五所醫學院的考試。</p>
                <ol>
                  <li>查理大學第一醫學院</li>
                  <li>查理大學第二醫學院</li>
                  <li>查理大學Hradec Kralove醫學院</li>
                  <li>查理大學Pilsen醫學院</li>
                  <li>Brno Masaryk 大學醫學院</li>
                </ol>
                <p>(4)、<strong>課程安排：課程分為二期</strong></p>
                <ul>
                  <li>冬季一期為9月底開始，隔年1月底結束。</li>
                  <li>夏季一期為2月初開始，5月底結束。</li>
                </ul>      
                <p>冬季的休假日為12月中到1月第一星期，夏季通常無休假，但在夏季課程結束到入學考中間，通常會有二週的空檔。<br />
           每週上課5天，早上八點開始上課，每堂課45分鐘，每九十分鐘會有一短暫休息。<br />
           <br />
                  <img src="/img/main-jpg/Charles-69.jpg" width="290" height="204" align="right" />(5)、<strong>測驗政策：</strong><br />
                  上課期間學生的進步與否由筆試來評估，同時也依據學生在課				  堂上的表現。<br />
                  考試分為兩種：<br />
                  <strong>第一種：正式的測驗</strong><br />
                  入學程度了解測驗、第一學期及第二學期測驗，測驗結果用以				評估學生的學習狀況，同時會給父母了解及相關單位<br />
                  <strong>第二種：進步與否的測驗</strong><br />
                  每二週老師會給學生做測驗，讓老師了解學生上課的理解及吸				收狀況。<br />
                </p>
                <p>(6)、<strong>申請準備文件：</strong></p>
                <ol>
                  <li>高中三年英文成績單及英文畢業證書</li>
                  <li>護照影本</li>
                  <li>一封英文聲明書(motivation letter)</li>
                  <li>申請表</li>
                </ol>      
                <p>(7)Pre-Med學校設備：</p>
                <ol>
                  <li>  20間可容納15~30位學生的標準設備教室。</li>
                  <li>1間會議型教室，可容納60位學生。</li>
                  <li>1間電腦教室。</li>
                  <li>多媒體互動教室。</li>
                  <li>大型會議室可容納120人，有AV設備，其隔壁有1間可容納15人的大廳。</li>
                  <li>學校有可運動的空間。</li>
                  <li>一間大型接待會議室，可容納40人(有廚房及衛浴設備，其旁有1間可容納10人的大廳)。</li>
                  <li>圖書室及2間學生自習室，每間可容納20人。</li>
                </ol>      
                <p>(8) 宿舍：</p>
                <ol>
                  <li>93間雙人房，每間有獨立衛浴。</li>
                  <li>2間四人房，每間有獨立衛浴。</li>
                  <li>99間兩人房、三人房及四人房，每間有獨立衛浴。</li>
                  <li>6間公寓(有臥室、書房、客廳及衛浴)</li>
                </ol>      
                <p>(9) 餐廳：</p>
                <ol>
                  <li>城堡設有餐廳(學校在城堡裡)</li>
                  <li>城堡酒吧</li>
                  <li>小酒館在學校旁</li>
                  <li>市區有餐廳</li>
                </ol>      
                <p>(10) 運動設施：</p>
                <ol>
                  <li>健康中心在學校旁邊</li>
                  <li>運動中心在宿舍旁邊</li>
                  <li>運動空間城堡花園</li>
                </ol>      
                <p>(11) 其他設施：</p>
                <ol>
                  <li>日光浴</li>
                  <li> 按摩、三溫暖</li>
                  <li> 網球場在宿舍旁</li>
                  <li> SPA</li>
                  <li> 騎馬、打高爾夫球<br /></li>
                </ol>',
                'order'            => 50,
                'category'         => 'default',
                'view'             => 'default',
                'status'           => 'Show',
            ],
            [
                'name'             => '傳寶留學中心介紹',
                'slug'             => 'link',
                'title'            => '傳寶留學中心介紹',
                'content'          => '<table width="100%"  border="0" align="center" cellpadding="3" cellspacing="0" class="table_lxe">
                <tr>
                  <td width="20" valign="top" class="lxe-sv">1.</td>
                  <td width="183" valign="top" class="lxe-sv">傳寶留學中心網站</td>
                  <td width="375" valign="top" class="lxe-sv"><a href="http://www.transpolo.com" target="_blank">www.transpolo.com</a></td>
                </tr>
                <tr>
                  <td valign="top" class="lxe-sv-white">2.</td>
                  <td valign="top" class="lxe-sv-white">傳寶留學布落格</td>
                  <td valign="top" class="lxe-sv-white"><a href="http://tw.myblog.yahoo.com/trans3838" target="_blank">tw.myblog.yahoo.com/trans3838</a></td>
                </tr>
                <tr>
                  <td valign="top" class="lxe-sv">3.</td>
                  <td valign="top" class="lxe-sv">查大第一醫學院</td>
                  <td valign="top" class="lxe-sv"><a href="http://www.lf1.cuni.cz" target="_blank">www.lf1.cuni.cz</a></td>
                </tr>
                <tr>
                  <td valign="top" class="lxe-sv-white">4.</td>
                  <td valign="top" class="lxe-sv-white">捷克觀光局</td>
                  <td valign="top" class="lxe-sv-white"><a href="http://www.czechtourism.com" target="_blank">www.czechtourism.com</a></td>
                </tr>
                <tr>
                  <td valign="top" class="lxe-sv">5.</td>
                  <td valign="top" class="lxe-sv">租屋及住宿資訊網站<br /></td>
                  <td valign="top" class="lxe-sv"><a href="http://www.homesweethome.cz" target="_blank">www.homesweethome.cz</a><br />
                    (僅供參考，並了解當地租屋價格)</td>
                </tr>
                <tr>
                  <td valign="top" class="lxe-sv-white">6.</td>
                  <td valign="top" class="lxe-sv-white">教育部外國大學參考名冊</td>
                  <td valign="top" class="lxe-sv-white"><a href="http://www.edu.tw/bicer/content.aspx?site_content_sn=8487" target="_blank">http://www.edu.tw/bicer/content.aspx?site_content_sn=8487 </a></td>
                </tr>
                <tr>
                  <td valign="top" class="lxe-sv">7.</td>
                  <td valign="top" class="lxe-sv">查理大學第一醫學院照片集</td>
                  <td valign="top" class="lxe-sv"><a href="http://www1.lf1.cuni.cz/opendays/" target="_blank">http://www1.lf1.cuni.cz/opendays/</a></td>
                </tr>
                <tr>
                  <td valign="top" class="lxe-sv-white">8.</td>
                  <td valign="top" class="lxe-sv-white">捷克照片集</td>
                  <td valign="top" class="lxe-sv-white"><a href="http://www.wretch.cc/album/transpolo" target="_blank">http://www.wretch.cc/album/transpolo</a></td>
                </tr>
                <tr>
                  <td valign="top" class="lxe-sv-white">9.</td>
                  <td valign="top" class="lxe-sv-white">查理大學第一醫學院醫學先修班</td>
                  <td valign="top" class="lxe-sv-white"><a href="http://www.ujop.cuni.cz" target="_blank">http://www.ujop.cuni.cz</a></td>
                </tr>
                
          
              </table>',
                'order'            => 50,
                'category'         => 'default',
                'view'             => 'default',
                'status'           => 'Show',
            ],
            [
                'name'             => '相關影片',
                'slug'             => 'mov',
                'title'            => '相關影片',
                'content'          => '<ol>
                <li><a href="/movie/20100701.wmv">查大第一醫學院2010年最新介紹</a></li>
                <li><a href="/movie/charles.wmv" target="_blank">查理大學第一醫學院影片介紹</a></li>
                <li><a href="/movie/charles1.wmv" target="_blank">查理大學第一醫學院影片介紹 (中文字幕)</a></li>
            </ol>',
                'order'            => 50,
                'category'         => 'default',
                'view'             => 'default',
                'status'           => 'Show',
            ],
            [
                'name'             => '在捷克留學生服務中心',
                'slug'             => 'Czech-services',
                'title'            => '在捷克留學生服務中心',
                'content'          => '<p> <img src="/img/main-jpg/Charles-61.jpg" width="240" height="170" align="right" /><br />
                (一) 傳寶留學中心為了服務到捷克求學的學生，特別在捷克設立〝捷克學生服務中心〞，協助遠赴異鄉由傳寶留學中心代辦之學生在捷克生活上及就學上之協助。<br />
                  <br />
                  <br />
                  <br />
                服務內容如下：<br />
                  1. 協助學生在捷克的日常生活諮詢服務<br />
                2. 安排學生聚餐，了解有無需要協助之處，同時讓同學多認識捷克<br />
                3. 協助課業上問題的家教安排，並且與學校溝通<br />
                4. 於長假時安排捷克旅遊<br />
                <img src="/img/main-jpg/Charles-62.jpg" width="240" height="170" align="right" />5. 學生於捷克的突發狀況的協助處理或生病時的就診安排<br />
                6. 回台灣機位訂定、機票購買<br />
                7. 學生第一次抵達捷克的接機安排及返台的送機安排</p>
                <p>以上所有服務若需付費的則由學生自負。
                </p>',
                'order'            => 50,
                'category'         => 'default',
                'view'             => 'default',
                'status'           => 'Show',
            ],
            [
                'name'             => '捷克介紹',
                'slug'             => 'Czech-bri-sdo',
                'title'            => '捷克介紹',
                'content'          => '<p><img src="/img/main-jpg/Charles-71.jpg" width="290" height="204" align="left" />　　1989年11月間柏林圍牆倒塌後，整個蘇聯東歐的共產勢力也在一夕之間變天解體，自由與資本浪潮吹向了東歐，也吹醒了捷克人民的民族自覺。前往捷克，並不像想像中的困難，除了可以取得落地簽證外，也似乎感受不到社會主義下的恐怖氣氛。 <br />
                　　捷克的人民是有禮的，而在社會主義統治下40年之久，即使是窮苦的，面對東西方遊客的富裕，也未感到有些許的自卑；反而是那有禮和學問淵博的態度，讓許多財大氣粗的遊客自形慚穢。<br />
                地理上捷克位於中歐的心臟，森林山丘與肥沃谷地是主體結構；但在政治文化上，也是西方資本主義和東歐社會主義的交會樞紐。 <br />
                <img src="/img/main-jpg/Charles-72.jpg" width="290" height="204" align="right" />　　在歷史的洪流中，捷克始終在動亂中發展，儘管政治上動盪不安，人民的素養卻相當高，據統計，捷克首都布拉格的教授或博士人數比例，比起一般西方國家還要高，這也就是為什麼在布拉格市內的大樓門牌上，常可以看到某某教授標籤的原因了。事實上，在西元14世紀時，布拉格就已經是歐洲最宏偉的城市了，城內哥德式高塔建築到處可見，如果站在高處，俯瞰布拉格全市，會發現高塔林立，而這也是布拉格「高塔之城」名稱的由來了。 <br />
                <strong>國家簡介 </strong><br />
                ‧國家全名：Czech(捷克) <br />
                ‧首都：布拉格 人口130萬人<br />
                ‧總人口：1150萬，主要民族為捷克族，佔人口的90％，摩拉維亞族3%、其他是斯洛伐克人、<br />
                　德國人、波蘭人、烏克蘭人等。<br />
                ‧	宗教：天主教為主<br />
                ‧	1939年~1945年受納粹德國的統治、1989年結束共產制度、2004年5月1日加入歐盟、<br />
                　　2007年加入歐盟申根簽證、2010年開始使用歐元<strong><img src="/img/main-jpg/Charles-33.jpg" width="290" height="204" align="left" /></strong></p>
                <p><strong>自然地理：</strong><br />
                　　捷克共和國原屬捷克和斯洛伐克聯邦共和國，是歐洲中部的內陸國家。東連斯洛伐克，南接奧地利，北鄰波蘭，西與德國相鄰，面積７８８６６平方公里，由捷克、摩拉維亞和西裏西亞３個部分組成。</p>
                <p><strong>人種：</strong><br />
                  　　捷克境內包含了兩個不同的民族，波西米亞與摩拉維亞，其中摩拉維亞自古以來的首都就是布爾諾，由於幾百年來，以布拉格為首的波西米亞大放異彩，以致於一般人對摩拉維亞幾乎沒有印象。但是提到米蘭‧昆德拉這位著名的捷克作家幾乎沒有人不認識，他就是道地的摩拉維亞人。<br />
                </p>
                <p><strong>語言：</strong><br />
                　　官方語言為捷克語，捷克語是捷克的母語，年紀較大的多半會說德語，過去在共產體系下學校教授俄語，現在已經被英文所代替。一般來說，只要不是太偏僻觀光客罕至的地方，英語都可通行，不過一些小城鎮的車站人員英文能力不佳，買票時最好將目的地的地名寫下，直接交給票務人員。</p>
                <p><strong><img src="/img/main-jpg/Charles-32.jpg" width="290" height="204" align="right" />氣候：</strong><br />
                　　溫帶大陸型氣候；四季分明。夏季溫暖，冬季涼爽潮濕。5月至9月布拉格的平均溫度在攝氏14度以上，夏季更高達2、30度，如要避開夏季蜂擁的旅客人潮，九月初到中旬左右是相當舒適的旅遊時節，但早晚溫差大，需準備外套與輕便禦寒衣物。12月和1月降至零度以下，其餘月份平均超過8度。</p>
                <p><strong>飲食：</strong><br />
                　　如果你嗜吃肉類，來捷克就對了。 由於捷克經年多為寒冷時節，因此必須多吃肉類、火腿等來補充熱量，至於新鮮蔬菜，則不容易在餐桌上見到。 主時通常是雞、鸭、豬肉、牛排或是魚類。捷克的水不可生飲，最好購買礦泉水飲用。</p>
                <p><strong>電話：</strong><br />
                  1. 捷克的國碼為420，從台灣打電話到捷克要先撥002-420，之後為區域號碼(去0)和電話號碼。<br />
                  2. 從捷克打國際電話先撥00，之後為國碼(台灣為886)、區域號碼(去0)和電話號碼。<br />
                  3. 捷克境內打長途電話，區域號碼的0不必省略。<br />
                  4. 在捷克打電話相當方便，公共電話即可打國際電話。公共電話分為投幣式和卡式兩種，電話卡<br />
                　 可以在郵局、旅客服務中心或換錢櫃台購買，50單位的電話卡售價175克朗，打回台灣可講7分鐘左<br />　 
                右</p>
                <p><strong>時差：</strong><br />
                捷克與台灣時差為7小時，3月底起的夏令時間會將時間調快1小時，10月底再調回。</p>
                <p><strong><img src="/img/main-jpg/Charles-34.jpg" width="280" height="170" align="left" />匯兌：</strong><br />
                  1. 捷克的通用貨幣為克朗，美金對克朗的兌換率為1美元換23克朗；1歐元換28.5克朗(2006.04)。<br />
                  2. 台灣旅客前往捷克可攜帶美金現鈔或旅行支票到當地兌換克朗使用，機場、銀行、旅客服務中心、飯店都可換錢。捷克兌換外幣手續費差異極大，平均在2%到10%之間，銀行、郵局大約收3%左右，飯店從5%起跳，一般民營櫃檯最多高達10%，猶太區有些不收取手續費，但是匯率略低一點，可以比價一下。<br />
                  3. 旅行支票可以到旅行支票辦事處(如American Express或Thomas Cook)換成現鈔，雖然匯率比銀<br />
                  　 行低一點，但不收手續費，或是使用提款機直接提領外幣，手續費也較低。<br />
                  4. 信用卡在捷克主要城市或觀光地的使用相當普遍，旅館、餐廳、商店都可以用信用卡付款。<br />
                </p>
                <p><strong><img src="/img/main-jpg/Charles-35.jpg" width="290" height="204" align="right" />交通狀況：</strong><br />
                  1. 飛機：布拉格國際機場是捷克最大的出入境樞紐，由於台灣沒有航空公司直飛布拉格，通常可利用德航、荷航或長榮航空經香港或曼谷轉機前往。<br />
                  2. 火車：火車是歐洲國家主要交通工具之一，特別是東歐國家火車票價格低廉，可善加利用。切記，在歐洲搭乘火車，不論有沒有下車停留某一國，一定要備齊火車所有行經國家的簽證，否則會因沒有該國簽證而被趕下火車，送回原出發地。<br />
                  3. 巴士：布拉格的巴士總站在Florenc 搭乘地鐵即可抵達，可以購買預售票。至於其他城市出發的巴士，多半是上車直接跟司機買票，因此最好先將目的地寫在紙上，並讓司機在紙上寫下車資，以免無法與司機用英文溝通。<br />
                  4. 地下鐵、電車、公車：票價依距離及時間而定，可在地鐵站內黃、紅色自動售票機、售票口或書報攤買到。<br />
                  <br />
                  <br />
                </p>      ',
                'order'            => 50,
                'category'         => 'default',
                'view'             => 'default',
                'status'           => 'Show',
            ],
            [
                'name'             => '布拉格的介紹',
                'slug'             => 'blog-bri-sdo',
                'title'            => '布拉格的介紹',
                'content'          => '<p><img src="/img/main-jpg/Charles-59.jpg" width="240" height="170" align="right" />　　布拉格興起於中世紀，由於西元1355年德國皇帝查理四世在此接受加冕，將布拉格定為神聖羅馬帝國德意志王國首都，所以布拉格從此扮演了重要的角色，而同時達到鼎盛時期，並在此興建了中歐、北歐、東歐第一所大學─查理大學(Charles University)<br />
                <br />
                　　布拉格面積為496平方米、人口約120萬人。布拉格主要分為五大區，分別是城堡區(Castle District)、雷色城(Lesser Town)、舊城區(Old Town)、新城區(New Town)及猶太區，而整個布拉格由伏爾塔瓦河貫穿，而查理大橋連接了新、舊兩城是布拉格最具風情的景點，也是遊客最多的地方。</p>
                <p><img src="/img/main-jpg/Charles-60.jpg" width="290" height="204" align="left" />　　布拉格也是歐洲的文化重鎮之ㄧ，豐富的音樂、文學、建築等文化遺產，讓學生在此無形中感染了她的藝術氣息，並且有安靜的就學環境，學生更顯得沉穩、內斂，進而培養專業的醫學素養。<br />
                  　　布拉格因為是著名的觀光城市，是位居歐洲第6名的旅遊城市，但布拉格生活悠閒，人來人往但不吵雜，在地鐵站幾乎聽不到別人說話的聲音，安靜得如入無人之城，充分表現出歐洲人的素養。在此看不到大城市的匆忙及混亂，更看不到摩托車、也無亂按喇叭的汽車、也沒有人讓車的畫面，都是汽車禮讓行人，讓人覺得這是一座寧靜有氣氛的城市。</p>
            <p>　　對於生活在異鄉的學生而言，布拉格更是一個交通方便且生活機能完善的城市，購物中心、超級市場、雜貨店都近在咫尺，而布拉格的公共運輸設施是一個完整的交通系統，包括地鐵、電軌車、巴士通行在布拉格，學生不需自備交通工具。<br />
                    <br />
                    <br />
                    <br />
                </p>',
                'order'            => 50,
                'category'         => 'default',
                'view'             => 'default',
                'status'           => 'Show',
            ],
            [
                'name'             => '布拉格生活',
                'slug'             => 'blog-life',
                'title'            => '布拉格生活',
                'content'          => '<ol>
                <li><img src="/img/main-jpg/Charles-80.jpg" width="290" height="204" align="right" />多數國際學生覺得捷克首都布拉格非常有吸引力，因為生活方式、豐富的歷史，還有各式各樣的建築。布拉格是個生活方便的都市，生活費比起國際大都市相對便宜。</li>
                <li>第一醫學院的學生在前三年，學校會安排捷語課程(每週4小時)，讓學生具有基本的捷語溝通能力，以便將來實習時在醫院與病人溝通。</li>
                <li>住宿：學生可以住在宿舍，或是租屋。租屋目前非常普遍。學生通常在市中心租一間公寓，距離校園幾分鐘遠，且如果幾位同學分租的話，租金會相對負擔較輕，平均每人每月約NT$20,000(含水電)。</li>
                </ol>
                <p><img src="/img/main-jpg/Charles-66.jpg" width="290" height="204" align="left" />4. 課外活動：課業雖然非常繁重，但還是必須參與運動、社交、文化活動來犒賞	自己。查理大學在布拉格內有自己的運動場，可進行各種運動。夏季有滑船	課程，冬季有山區滑雪課。關於文化，布拉格提供各種展覽、古典與現代音	樂會、戲劇表演、歌劇、音樂劇、舞蹈等。布拉格的「布拉格春季音樂節」	國際聞名<br />
                  <br />
                  <br />
                  <br />
                  <br />
                  <img src="/img/main-jpg/Charles-67.jpg" width="290" height="204" align="right" />5. 
                  生活費：<br />
                  ‧住宿：每月約$400~500歐元(每人)<br />
                  ‧餐費：早餐約$3歐元，午、晚餐約$5~8歐元<br />
                  ‧交通：每月約$10歐元<br />
                  ‧雜支：每月約$100歐元<br />
                  <br />
                  所以每月約生活費$800~1200歐元<br />
                  <br />
                  <br />
                </p>',
                'order'            => 50,
                'category'         => 'default',
                'view'             => 'default',
                'status'           => 'Show',
            ],
            [
                'name'             => '捷克簽證',
                'slug'             => 'Czech-visa',
                'title'            => '捷克簽證',
                'content'          => '<img src="/img/main-jpg/Charles-60.jpg" width="290" height="204" align="right" />(一)、捷克觀光簽證：2011年開始持台灣護照進入歐盟國家免簽證，最多可停留90天，入境時需要購買旅遊申根醫療保險(找有授權辦理的保險公 <br /><br />
                司洽詢)
          <p>(二)、捷克學生簽證準備文件<strong>(</strong><strong>至少2</strong><strong>個月)&nbsp;&nbsp;</strong></p>
          <ol>
            <li> 護照(有效期至少 1年又3個月以上)</li>
            <li> 照片2張(6個月內近照)</li>
            <li>入學許可正本(含英文及捷文) ─ 由查大第一醫學院提供 </li>
            <li>住宿安排證明(需含住宿姓名、住宿期間、地址、價錢或提供租約或學生宿舍證明等) ─ 由查大第一醫學院提供 </li>
            <li> 存款證明：
              <ul>
                <li>學生本人的信用卡(信用卡上的英文名字務必與護照一樣。請攜帶正本信用卡、附卡亦可，信用卡效期至少一年以上)</li>
                <li>學生姓名的英文銀行存款證明(大約1萬美元即可，最好與學生信用卡相同銀行，如果存款證明和信用卡發卡銀行不同銀行亦可)</li>
                </ul>
              </li>
            <li>良民正(無犯罪證明)： 
              <ul>
                <li>(持<strong><u>台灣護照</u></strong>學生)申請台灣良民證：申請好之後須送<strong><u>法院公證</u></strong>，之後再送<strong><u>領事事務局</u></strong><strong><u>(</u></strong><strong><u>外交部</u></strong>)驗證，<strong><u>翻譯成捷文</u></strong>後再送捷克辦事處。<br />
                  (持<strong><u>外國護照</u></strong>學生) 申請當地國良民證：申請好之後須送<strong><u>台彎駐外單位認證</u></strong><strong><u> </u></strong><strong><u>(</u></strong><strong><u>當地國)</u></strong>，之後再送<strong><u>台灣的領事事務局</u></strong><strong><u>(</u></strong><strong><u>外交部)</u></strong>驗證，再送捷克辦事處。 <strong>及亦要申請台灣良民證</strong>申請好之後須送<strong><u>法院公證</u></strong>，之後再送<strong>領事事務局</strong><strong> </strong><strong>(</strong><strong>外交部</strong>)驗證，翻譯成捷文後再送捷克辦事處。 </li>
                <li>捷克良民證：捷克辦事處可以代辦，附上護照影本及費用歐元$12元。 <br />
                  ※凡在其他國家住滿6個月以上，必須申請該國家之良民證。 </li>
              </ul>
              </li>
            <li>需本人到捷克辦事處領表、簽名、送件 <img src="/img/main-jpg/Charles-70.jpg" width="290" height="204" align="right" /><br />
              <strong>【以上文件全部要正本。影印文件要經過驗證。所有文件要在180</strong><strong>天內申請的】 </strong><br />
              <strong>【所有良民證(</strong><strong>包含台灣及國外)</strong><strong>做完認證程序後皆需要翻譯成捷文】 </strong></li>
            <li> 約需 2 個月方可辦好學生簽證。由捷克辦事處mail通知學生本人攜帶護照  <br />
              正本及保險文件親自到辦事處領取學生簽證。</li>
            <li> 攜帶台灣健保卡正本去 </li>
            <li>領取捷克學生簽証時，必須事先上網購買$12,000克郎的學生醫療保險(一年)，上網購買的好處是不須要再送翻譯成捷克文(直接將保單列印出來即可)</li>
            <li> 學生簽證規費$22歐元 (2011年)</li>
            <li>學生抵達布拉格 3 天內要向外事警察局報到。他們會把學生居留證 <br />
              (residence permit for studying)印在護照上。有效期是1年。 </li>
            <li>大一新生需要申請高中英文成績單、英文畢業證書，申請好之後須送<strong><u>法院公證</u></strong>，之後再送<strong><u>領事事務局</u></strong><strong><u>(</u></strong><strong><u>外交部</u></strong>)驗證，<strong><u>翻譯成捷文</u></strong>後再送捷克辦事處。(2011新規訂)</li>
          </ol>
          <p><strong>捷克簽證辦事處地址：台北市信義區基隆路一段</strong><strong>200</strong><strong>號</strong><strong>7</strong><strong>樓</strong><strong>(</strong><strong>遠雄國際大樓</strong><strong>) </strong><br />
            電話:(02)2722-5100   2722-1435    2722-1342 <br />
            (*捷運市政府站2號出口,過人行道後左轉直行約一百公尺,右側遠雄國際大樓)&nbsp;</p>',
                'order'            => 50,
                'category'         => 'default',
                'view'             => 'default',
                'status'           => 'Show',
            ],
            [
                'name'             => '布拉格的介紹',
                'slug'             => 'blog-bri-sdo',
                'title'            => '布拉格的介紹',
                'content'          => '',
                'order'            => 50,
                'category'         => 'default',
                'view'             => 'default',
                'status'           => 'Show',
            ],
            [
                'name'             => '布拉格的介紹',
                'slug'             => 'blog-bri-sdo',
                'title'            => '布拉格的介紹',
                'content'          => '',
                'order'            => 50,
                'category'         => 'default',
                'view'             => 'default',
                'status'           => 'Show',
            ],
            [
                'name'             => '布拉格的介紹',
                'slug'             => 'blog-bri-sdo',
                'title'            => '布拉格的介紹',
                'content'          => '',
                'order'            => 50,
                'category'         => 'default',
                'view'             => 'default',
                'status'           => 'Show',
            ],
            [
                'name'             => '布拉格的介紹',
                'slug'             => 'blog-bri-sdo',
                'title'            => '布拉格的介紹',
                'content'          => '',
                'order'            => 50,
                'category'         => 'default',
                'view'             => 'default',
                'status'           => 'Show',
            ]

        ]);
    }
    // public function run()
    // {
    //     DB::table(config('litecms.page.page.table'))->insert([

    //         [
    //             'id'               => 1,
    //             'name'             => 'Home',
    //             'slug'             => 'home',
    //             'heading'          => 'Home',
    //             'title'            => 'Home',
    //             'content'          => 'Home Page',
    //             'meta_title'       => 'Home',
    //             'meta_keyword'     => 'Home',
    //             'meta_description' => 'Home',
    //             'images'           => null,
    //             'abstract'         => null,
    //             'order'            => 0,
    //             'banner'           => null,
    //             'view'             => 'page',
    //             'compile'          => null,
    //             'status'           => 'Show',
    //         ],

    //         [
    //             'id'               => 2,
    //             'name'             => 'About Us',
    //             'slug'             => 'about-us',
    //             'heading'          => 'Meet Lavalite',
    //             'title'            => 'About Us',
    //             'content'          => '                    <div class="about">
    //                     <div class="row">
    //                         <div class="col-md-12">
    //                             <div class="count-numerics">
    //                                 <h2>Our mission is to make insurance<br>work better for businesses of all types and sizes.</h2>
    //                                 <ul class="list-inline row">
    //                                     <li class="col-md-3 col-xs-6">
    //                                         <div class="text-center">
    //                                             <div>
    //                                                 <figure>1</figure>
    //                                                 <span>k+</span>
    //                                             </div>
    //                                             <h4>Set of pages</h4>
    //                                       </div>
    //                                     </li>
    //                                     <li class="col-md-3 col-xs-6">
    //                                         <div class="text-center">
    //                                             <div>
    //                                                 <figure>53</figure>
    //                                             </div>
    //                                             <h4>Categories</h4>
    //                                         </div>
    //                                     </li>
    //                                     <li class="col-md-3 col-xs-6">
    //                                         <div class="text-center">
    //                                             <div>
    //                                                 <figure>10</figure>
    //                                                 <span>x</span>
    //                                             </div>
    //                                             <h4>Save time</h4>
    //                                         </div>
    //                                     </li>
    //                                     <li class="col-md-3 col-xs-6 s-counter-v1">
    //                                         <div class="text-center">
    //                                             <div>
    //                                                 <figure>9</figure>
    //                                             </div>
    //                                             <h4>Formats to use</h4>
    //                                         </div>
    //                                     </li>
    //                                   </ul>
    //                             </div>
    //                         </div>
    //                     </div>

    //                     <div class="row">
    //                         <div class="col-md-12">
    //                             <div class="promo-section">
    //                                 <div class="row mln mrn">
    //                                     <div class="col-md-6 pl-0 pr-0">
    //                                         <div class="content-section text-center">
    //                                             <h2>Creative Digital Agency</h2>
    //                                             <span>You are in good hands.</span>
    //                                             <p>It’s important to stay detail oriented with every project we tackle. Staying focused allows us to turn every project we complete into something we love.</p>
    //                                             <p>The time has come to bring those ideas and plans to life. This is where we really begin to visualize your napkin sketches and make them into beautiful pixels.</p>
    //                                             <h4>— John Doe</h4>
    //                                         </div>
    //                                     </div>
    //                                     <div class="col-md-6 pl-0 pr-0 image-section">
    //                                     </div>
    //                                 </div>
    //                             </div>
    //                         </div>
    //                     </div>

    //                     <div class="row features-section">
    //                         <div class="col-sm-5">
    //                             <div class="hor-centered-row">
    //                                 <div class="hor-centered-row-col exp-num"><span>9</span></div>
    //                                 <div class="hor-centered-row-col exp-year">
    //                                     <h4>
    //                                         <span>Years</span>
    //                                         <span>Experience</span>
    //                                     </h4>
    //                                     <p>Front-end Design & Development.</p>
    //                                 </div>
    //                             </div>
    //                         </div>
    //                         <div class="col-sm-7">
    //                             <div class="row mb40">
    //                                 <div class="col-sm-6">
    //                                     <div class="feature-item">
    //                                         <i class="ti-mobile"></i>
    //                                         <h4>Responsive Layout</h4>
    //                                         <p>This is where we sit down, grab a cup of coffee and dial in the details.</p>
    //                                     </div>
    //                                 </div>
    //                                 <div class="col-sm-6">
    //                                     <div class="feature-item">
    //                                         <i class="ti-palette"></i>
    //                                         <h4>Fully Customizable</h4>
    //                                         <p>This is where we sit down, grab a cup of coffee and dial in the details.</p>
    //                                     </div>
    //                                 </div>
    //                             </div>

    //                             <div class="row">
    //                                 <div class="col-sm-6">
    //                                     <div class="feature-item">
    //                                         <i class="ti-cup"></i>
    //                                         <h4>Endless Possibilities</h4>
    //                                         <p>This is where we sit down, grab a cup of coffee and dial in the details.</p>
    //                                     </div>
    //                                 </div>
    //                                 <div class="col-sm-6">
    //                                     <div class="feature-item">
    //                                         <i class="ti-crown"></i>
    //                                         <h4>Powerful Performance</h4>
    //                                         <p>This is where we sit down, grab a cup of coffee and dial in the details.</p>
    //                                     </div>
    //                                 </div>
    //                             </div>
    //                         </div>
    //                     </div>
    //                 </div>',
    //             'meta_title'       => 'About Us',
    //             'meta_keyword'     => 'About Us',
    //             'meta_description' => 'This is a started theme for Lavalite cms, you can customize according to your requirement.',
    //             'images'           => null,
    //             'abstract'         => null,
    //             'order'            => 0,
    //             'banner'           => null,
    //             'view'             => 'page',
    //             'compile'          => null,
    //             'status'           => 'Show',
    //         ],

    //         [
    //             'id'               => 3,
    //             'name'             => 'Contact Us',
    //             'heading'          => 'Contact Us',
    //             'title'            => 'Contact Us',
    //             'content'          => '<p><br></p>',
    //             'meta_title'       => 'Contact Us',
    //             'meta_keyword'     => 'Contact Us',
    //             'meta_description' => 'Contact Us',
    //             'images'           => null,
    //             'abstract'         => null,
    //             'slug'             => 'contact',
    //             'order'            => 0,
    //             'banner'           => null,
    //             'view'             => 'page',
    //             'compile'          => null,
    //             'status'           => 'Show',
    //         ],

    //         [
    //             'id'               => 4,
    //             'name'             => 'Page Not found',
    //             'heading'          => 'Page Not found',
    //             'title'            => 'Page Not found',
    //             'content'          => '<p><br></p>',
    //             'meta_title'       => 'Page Not found',
    //             'meta_keyword'     => 'Page Not found',
    //             'meta_description' => 'Page Not found',
    //             'images'           => null,
    //             'abstract'         => null,
    //             'slug'             => 404,
    //             'order'            => 0,
    //             'banner'           => null,
    //             'view'             => 'page',
    //             'compile'          => null,
    //             'status'           => 'Show',
    //         ],

    //     ]);

    //     DB::table('menus')->insert([
    //         [
    //             'parent_id'   => 1,
    //             'key'         => null,
    //             'url'         => 'admin/page/page',
    //             'name'        => 'Pages',
    //             'description' => null,
    //             'icon'        => 'fa fa-book',
    //             'target'      => null,
    //             'order'       => 5,
    //             'status'      => 1,
    //         ],

    //         [
    //             'parent_id'   => 4,
    //             'key'         => null,
    //             'url'         => 'about-us.html',
    //             'name'        => 'About Us',
    //             'description' => null,
    //             'icon'        => null,
    //             'target'      => null,
    //             'order'       => 8,
    //             'status'      => 1,
    //         ],
    //         [
    //             'parent_id'   => 5,
    //             'key'         => null,
    //             'url'         => 'about-us.html',
    //             'name'        => 'About Us',
    //             'description' => null,
    //             'icon'        => null,
    //             'target'      => null,
    //             'order'       => 8,
    //             'status'      => 1,
    //         ],
    //     ]);

    //     DB::table('permissions')->insert([
    //         [
    //             'slug' => 'page.page.view',
    //             'name' => 'View Page',
    //         ],
    //         [
    //             'slug' => 'page.page.create',
    //             'name' => 'Create Page',
    //         ],
    //         [
    //             'slug' => 'page.page.edit',
    //             'name' => 'Update Page',
    //         ],
    //         [
    //             'slug' => 'page.page.delete',
    //             'name' => 'Delete Page',
    //         ],
    //     ]);
    // }
}
