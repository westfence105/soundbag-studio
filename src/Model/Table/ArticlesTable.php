<?php
namespace App\Model\Table;

use Cake\ORM\Table;

function lead( string $str ){
	return '<p class="lead">' . __($str) . '</p>' . "\n";
}

class ArticlesTable extends Table {
	static $articles;
	
	static $separator = '<hr class="mx-0 mt-1 mb-4"/>';
	static $twitter_url = 'https://twitter.com/westfence105';
	static $github_url = 'https://github.com/westfence105';
	static $lancers_url = 'https://www.lancers.jp/profile/westfence105';
	static $crowdworks_url = 'https://crowdworks.jp/public/employees/106838';
	static $coconala_url = 'https://coconala.com/users/500654';
	
	private static function __init(){
		if( empty( self::$articles ) ){
			self::$articles = [
				'about' => [
					lead('フリーランスエンジニア、そして編曲家の<a href="#profile">soundbag</a>の公式サイトです。'),
					lead("soundbag studioでは、ソフトウェア開発と音楽制作という、全く異なる2つの事業を行っています。"),
					lead("考え方、脳の使い方から異なる2つの分野ですが、共通点もいくつかあります。"),
					lead("その1つは、依頼者と細かくコミュニケーションを取りながらより良いものを創っていくということ。"),
					lead("そして、自室が「スタジオ」となること。"),
					lead("4畳半の部屋の中から、世界と繋がり、新しいものを創り出していきます。")
				],
				'software' => [
					lead("ソフトウェア開発においては、理論的に、ひたすら考え抜いて制作を進めます。"),
					lead("頭の中で設計図を組み立て、それを文書に起こし、プログラムにしてゆく……"),
					lead("思ったとおりに動いたときの喜びと達成感は、何ものにも代えがたいものです。"),
					lead("開発の対象は多岐にわたり、小さなコマンドラインツールからゲーム、パッケージソフトウェア、WEBサイト、組み込み・制御機器まで、あらゆる分野に挑戦しています。"),
					lead("プログラミング言語についても、C++、Python、PHPのほか、C、Java、C#、Ruby、JavaScript、R、go、そしてアセンブラやAda。"),
					lead("フレームワークやライブラリも、STL、Boost、SDL、OpenGL、Qt、Unity、cocos2d-x、Rails、CakePHP、jQueryなど。"),
					lead("様々なものに興味を持ち、学習し、吸収し、習得し、言語の背景にある思想を学び、ここまで来ました。そして、これからも。"),
					lead("優柔不断と言われるかもしれませんが、私の中の知への欲求を満たすには、1つや2つでは到底足りないのです。"),
					self::$separator,
					lead('エンジニアとしては、プロジェクトの一員として、基本的にリモートで業務を請け負っています。'),
					lead('特に分野を絞り込んでいるわけではなく、自分の技術で可能ならばなんでもやろうと考えています。'),
					lead('ソフトウェア関連のご依頼は、直接依頼のほかに<a href="{0}">Lancers</a>、<a href="{1}">CrowdWorks</a>でも受け付けております。',[ self::$lancers_url, self::$crowdworks_url ]),
					lead('スキルについては<a href="{0}">GitHub</a>に個人で制作したものの一部を公開しています。',[ self::$github_url ]),
					lead('また、このページはVPS(Ubuntu)、Apache、CakePHP、Bootstrapで制作されており、他にPostfixとDovecotでメールサーバとしても運用しています。'),
					lead('他にも様々な分野・技術を学んでいるため、「これできる？」などお気軽にご相談ください。')
				],
				'music' => [
					lead("音楽制作については、理論は後回しです。"),
					lead("もちろん、制作のうえで必要な理論はその都度学んではきましたが、最終的には経験と閃きが何よりも重要です。"),
					lead("多くの音楽を聞き、時にはそれをコピーしてみたり、編曲してみたり、研究してみたり。"),
					lead("その経験が閃きを生み、そしてそれを理論と経験が形にしてゆきます。"),
					lead("趣味から始まって長く長くやってきた、シンプルなMIDIや吹奏楽編成。"),
					lead("より大きなものに挑戦し、オーケストラ編成。"),
					lead("そして、バンドサウンドや、そこに加わるホーン・ストリングスセクション、その他多彩な楽器。"),
					lead("既存曲の編曲から、オリジナル曲のアレンジまで。個人の活動から、プロ志向での活動まで。"),
					lead("あらゆる音楽活動を、全力でサポートしていきます。"),
					self::$separator,
					lead('音楽関連では、主に編曲、楽譜制作、打ち込みでの音源制作を請け負っています。'),
					lead('音楽制作のご依頼は、個人・非営利のお客様からは<a href="{0}">ココナラ</a>で承っております。',[ self::$coconala_url ]),
					lead('営利目的、法人のお客様は下のフォームからご連絡ください。'),
					lead('サンプルなどは随時更新してゆきます。また、イメージをお聞きして簡単なサンプルを制作することもできますので、お気軽にご相談ください。')
				]
			];
		}
	}
	
	public function initialize( array $config ){
		parent::initialize( $config );
		self::__init();
	}
	
	public function getList(){
		return ['about','software','music'];
	}
	
	public function get( $id, $options = [] ){
		return array_key_exists( $id, self::$articles ) ? self::$articles[$id] : null;
	}
}