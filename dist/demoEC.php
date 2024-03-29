<?php
ini_set('display_errors', true);
$title = 'demoEC admin';
$pass = 'demoEC';
$h3 = 'demoECショップ 管理画面';
$h4 = 'Design / HTML,CSS /JavaScript / PHP / MYSQL';
$p = 'こちらの制作物はPHPとSQLの学習のアウトプットとして作成した。<br><br>基本のセッションを利用したログイン・ログアウト機能、MYSQLと通信し基本的なCRUDでのDB操作をテーマに作成した。<br><br>管理者のアカウント管理や商品の管理画面を実装した。<br><br>email:test@gmail.com<br>password:masterpass<br><br>にてログイン可能。適当な情報でアカウントを作成いただくことも可能。<br><br>また、Vue.jsで作成したONLINESHOP(NEXTの制作物)とJSONを利用し通信するAPI機能を実装しフロントとバックを繋げることをテーマに作成。<br><br>こちらで登録した商品がONLINESHOP上に反映される。<br><br>購入処理をされた際の在庫管理機能は今後実装予定。';
$githab = 'https://github.com/beeeeesankun/demoEC';
$start = '2021/9月';
$link =  '<div class="link">
            <a href="./changer.php"><i class="fas fa-angle-double-left"></i>PREV</a>
            <a href="./vue_shop.php">NEXT<i class="fas fa-angle-double-right"></i></a>
          </div>';

?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <?php require_once('./components/head.php'); ?>
  <?php echo '<title>Work-' . $title . '</title>'?>
  <meta name="robots" content="noindex">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</head>

<body>
  <div class="work-page">
    <div class="nav">
      <ul>
        <li><a href="./index.php#works">works</a></li>
        <li class="active"><a href=""><?php echo $title ?></a></li>
      </ul>
    </div>
    <div class="work anime-load">
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img <?php echo 'src=./img/' . $pass . '/' . $pass .'1.jpg' ?> alt=""></div>
          <div class="swiper-slide"><img <?php echo 'src=./img/' . $pass . '/' . $pass .'2.jpg' ?> alt=""></div>
          <div class="swiper-slide"><img <?php echo 'src=./img/' . $pass . '/' . $pass .'3.jpg' ?> alt=""></div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-scrollbar"></div>
      </div>
      <a href="https://fukabeakihiro.com/demoEC/" target="_blank" rel="noopener">
        <h3><?php echo $h3; ?><i class="fas fa-external-link-alt"></i></h3>
      </a>
      <?php echo "<a class='githab' href='$githab' target='_blank' rel='noopener'>ソースコード<img src='./img/github.png'></a>" ?>
      <h4><?php echo $h4; ?>
      </h4>
      <?php echo '制作期間　' . $start . '〜' ?>
      <p><?php echo $p; ?>
      </p>
      <?php echo $link;?>
    </div>
  </div>
  <?php require_once('./components/footer.php') ?>
  <script src="./js/swiper.js"></script>
  <script src="./js/base.js"></script>
</body>

</html>