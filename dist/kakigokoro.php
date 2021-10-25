<?php
ini_set('display_errors', true);
$title = '書き心　春流・破留';
$pass = 'kakigokoro';
$h3 = '書道家　「書き心」春流・破留';
$h4 = 'Planning / Design / HTML,CSS(Sass) / jQuery / PHP';
$p = '本制作物は書道家『書き心』春流・破留のHPのリニューアル案件です。<br><br>クライアントとご縁があり、自身で営業から制作、サーバーアップまでの一連の工程を経験しました。<br><br>クライアントの解決したい課題は、コロナウイルス流行の影響で、オンラインでの受注や制作物の購入、スマートフォンからの顧客獲得でした。<br><br>課題解決の為に、HPから注文をできる様にPHPでお問い合わせフォームの実装をしました。<br><br>苦労したことはか解決したい課題の用件確定です。<br><br>クライアントの今後の活動や展望なども含めて、それを解決するデザインや機能とは？という構想段階で上手くいかず、作ってはやり直しを何度も繰り返し、本制作物を作り上げました。';
$githab = 'https://github.com/beeeeesankun/';
$start = '2020/2月';
$link =  '<div class="link">
            <a href="./igarashi-education.php"><i class="fas fa-angle-double-left"></i>PREV</a>
            <a href="./demoEC.php">NEXT<i class="fas fa-angle-double-right"></i></a>
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
          <div class="swiper-slide"><img <?php echo 'src=./img/' . $pass . '/' . $pass .'2.png' ?> alt=""></div>
          <div class="swiper-slide"><img <?php echo 'src=./img/' . $pass . '/' . $pass .'3.png' ?> alt=""></div>
          <div class="swiper-slide"><img <?php echo 'src=./img/' . $pass . '/' . $pass .'4.png' ?> alt=""></div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-scrollbar"></div>
      </div>

      <a href="https://kakigokoro-haru.com/" target="_blank" rel="noopener">
        <h3><?php echo $h3; ?><i class="fas fa-external-link-alt"></i></h3>
      </a>
      <?php echo '<a>ソースコードは非公開</a>' ?>
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