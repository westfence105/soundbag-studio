<?php
	use Cake\Core\Configure;
	
	$twitter_url = 'https://twitter.com/westfence105';
	$github_url = 'https://github.com/westfence105';
	$lancers_url = 'https://www.lancers.jp/profile/westfence105';
	$crowdworks_url = 'https://crowdworks.jp/public/employees/106838';
	$coconala_url = 'https://coconala.com/users/500654';
	
	$about = [
		__("soundbag studioは、ソフトウェア開発と音楽制作という、全く異なる2つの事業を行っています。"),
		__("考え方、脳の使い方から異なる2つの分野ですが、共通点もあります。"),
		__("1つは、依頼者と細かくコミュニケーションを取りながらより良いものを創っていくということ。"),
		__("そして、自室が「スタジオ」となること。"),
		__("4畳半の部屋の中から、世界と繋がり、新しいものを創り出していきます。")
	];
	
	$software = [
		__("ソフトウェア開発においては、理論的に、ひたすら考え抜いて制作を進めます。"),
		__("頭の中で設計図を組み立て、それを文書に起こし、プログラムにしてゆく……"),
		__("思ったとおりに動いたときの喜びと達成感は、何ものにも代えがたいものです。"),
		__("開発の対象は多岐にわたり、小さなコマンドラインツールからゲーム、パッケージソフトウェア、WEBサイト、組み込み・制御機器まで、あらゆる分野に挑戦しています。"),
		__("プログラミング言語についても、C++、Python、PHPのほか、C、Java、C#、Ruby、JavaScript、R、go、そしてアセンブラやAda。"),
		__("フレームワークやライブラリも、STL、Boost、SDL、OpenGL、Qt、Unity、cocos2d-x、Rails、CakePHP、jQueryなど。"),
		__("様々なものに興味を持ち、学習し、吸収し、習得し、言語の背景にある思想を学び、ここまで来ました。そして、これからも。"),
		__("優柔不断と言われるかもしれませんが、私の中の知への欲求を満たすには、1つや2つでは到底足りないのです。")
	];
	
	$software_request = [
		__('ソフトウェア関連のご依頼は、直接依頼のほかに<a href="{0}">Lancers</a>、<a href="{1}">CrowdWorks</a>でも受け付けております。',[ $lancers_url, $crowdworks_url ]),
		__('スキルについては<a href="{0}">GitHub</a>に個人で制作したものの一部を公開しています。',[ $github_url ]),
		__('なお、このページはVPS(Ubuntu)、Apache、CakePHP、Bootstrapで制作されており、他にPostfixとDovecotでメールサーバとしても運用しています。'),
		__('他にも様々な分野・技術を学んでいるため、「これできる？」などお気軽にご相談ください。')
	];
	
	$music = [
		__("音楽制作については、理論は後回しです。"),
		__("もちろん、制作のうえで必要な理論はその都度学んではきましたが、最終的には経験と閃きが何よりも重要です。"),
		__("多くの音楽を聞き、時にはそれをコピーしてみたり、編曲してみたり、研究してみたり。"),
		__("その経験が閃きを生み、そしてそれを理論と経験が形にしてゆきます。"),
		__("趣味から始まって長く長くやってきた、シンプルなMIDIや吹奏楽編曲。"),
		__("より大きなものに挑戦し、オーケストラ編曲。"),
		__("そして、バンドサウンドや、そこに加わるホーン・ストリングスセクション、その他多彩な楽器。"),
		__("既存曲の編曲から、オリジナル曲のアレンジまで。個人の活動から、プロ志向での活動まで。"),
		__("あらゆる音楽活動を、全力でサポートしていきます。")
	];
	
	$music_request = [
		__('音楽制作のご依頼は、個人・非営利のお客様からは<a href="{0}">ココナラ</a>で承っております。',[ $coconala_url ]),
		__('営利目的、法人のお客様は下のフォームからご連絡ください。')
	];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="soundbag studio: site of promote freelancer soundbag.">
    <meta name="author" content="soundbag">
    
    <title>soundbag studio</title>
    
    <?= $this->Html->css([
				'/bootstrap/css/bootstrap.min.css',
				'/font-awesome/css/font-awesome.min.css',
				'https://fonts.googleapis.com/css?family=Montserrat:400,700',
				'https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic',
				'/magnific-popup/magnific-popup.css',
				'freelancer.min', 'my'
			]
		);
	 ?>
	 
	<?= $this->Html->script([
				'jquery.min', '/bootstrap/js/bootstrap.bundle.min.js',
				'/jquery-easing/jquery.easing.min.js', '/magnific-popup/jquery.magnific-popup.min.js',
				'freelancer.min'
			], 
			['block' => 'scripts']
		);
	 ?>

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">soundbag studio</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          MENU
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">ABOUT</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#software">SOFTWARE</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#music">MUSIC</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">CONTACT</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead bg-title text-white text-center va-middle">
      <div class="container">
     <!--   <img class="img-fluid mb-5 d-block mx-auto" src="img/profile.png" alt=""> -->
        <h1 class="font-weight-bold mb-0">soundbag</h1>
        <hr class="star-light">
        <h2 class="font-weight-light mb-0">Software Engineer &amp; Sound Producer</h2>
      </div>
    </header>

    <!-- About Section -->
    <section class="bg-about mb-0 px-8" id="about">
      <div class="container">
        <h2 class="text-center text-uppercase">About</h2>
        <hr class="star-light mb-5">
        <div class="row">
		  <?php foreach( $about as $lead ): ?>
              <p class="lead"><?= $lead ?></p>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
    
    <section class="bg-software text-black mb-0 px-8" id="software">
      <div class="container">
        <h2 class="text-center text-uppercase text-black">Software</h2>
        <hr class="star-dark mb-5">
        <div class="row">
		  <?php foreach( $software as $lead ): ?>
              <p class="lead"><?= $lead ?></p>
          <?php endforeach; ?>
        </div>
        <hr class="mx-0 mt-1 mb-4"/>
        <div class="row">
		  <?php foreach( $software_request as $lead ): ?>
              <p class="lead"><?= $lead ?></p>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
    
    <section class="bg-music mb-0 px-8" id="music">
      <div class="container">
        <h2 class="text-center text-uppercase">Music</h2>
        <hr class="star-dark mb-5">
        <div class="row">
		  <?php foreach( $music as $lead ): ?>
              <p class="lead"><?= $lead ?></p>
          <?php endforeach; ?>
        </div>
        <hr class="mx-0 mt-1 mb-4"/>
        <div class="row">
		  <?php foreach( $music_request as $lead ): ?>
              <p class="lead"><?= $lead ?></p>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
	
    <!-- Contact Section -->
    <section id="contact">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Contact</h2>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col bg-form container">
			<?= $this->Form->create($contact) ?>
			<div class="form-group"><?= $this->Form->control('name',  ['class' => 'form-control','label' => __('名前')])   ?></div>
			<div class="form-group"><?= $this->Form->control('email', ['class' => 'form-control','label' => __('E-Mail')])  ?></div>
			<div class="form-group">
				<?= $this->Form->input('regard', [
											'type' => 'select', 'label' => __('用件'),
											'class' => 'form-control',
											'options' => [
													'about' => __('soundbagについてのお問い合わせ'),
													'soft'  => __('依頼・相談（ソフトウェア開発）'),
													'music' => __('依頼・相談（音楽制作）'),
													'other' => __('その他')
												]
										]) 
				?></div>
			<div class="form-group"><?= $this->Form->control('body',  ['class' => 'form-control','label' => __('メッセージ')])   ?></div>
			<div class="form-group align-right"><?= $this->Form->submit(__('送信'), ['class' => 'btn btn-default pull-right']) ?></div>
			<?= $this->Form->end() ?>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="footer text-center">
      <div class="">
        <div class="row border-0">
          <div class="col-12">
            <ul class="list-inline mb-0 px-0">
			  <!--
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-google-plus"></i>
                </a>
              </li>
              -->
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="<?= $twitter_url ?>">
                  <i class="fa fa-fw fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="<?= $github_url ?>">
                  <i class="fa fa-fw fa-github"></i>
                </a>
              </li>
              <li class="list-inline-item">
				<a class="btn btn-outline-light text-center btn-txt" href="<?= $lancers_url ?>"><b>Lancers</b></a>
              </li>
              <li class="list-inline-item">
				<a class="btn btn-outline-light text-center btn-txt" href="<?= $crowdworks_url ?>"><b>CrowdWorks</b></a>
              </li>
              <li class="list-inline-item">
				<a class="btn btn-outline-light text-center btn-txt" href="<?= $coconala_url ?>"><b>Coconala</b></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <div class="copyright py-4 text-center text-white">
      <div class="container">
			<div>&copy;2018 soundbag-studio. All rights reserved.</div>
			<div>Framework: <a href="https://cakephp.org/jp">CakePHP <?= Configure::version() ?></a></div>
			<div>Design: <a href="https://startbootstrap.com/">Start Bootstrap - Freelancer</a><?php /* + α */ ?></div>
      </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

	<?= $this->fetch('scripts') ?>
  </body>

</html>
