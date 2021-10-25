<?php
ini_set('display_errors', true);
$title = 'AMORE';
$pass = 'amore';
$h3 = 'レストラン AMORE';
$h4 = 'Design / HTML,CSS(Sass) / JavaScript(native)';
$p = '本制作物はLPを模した作品です。<br><br>デザイン面で工夫したことは実際のメニューを開いて見ていることをモチーフにスプリットレイアウトを採用し制作しました。<br><br>昨今のフロントエンド技術の変遷に伴い、モダンJSを使う前にある程度、jQuery等のライブラリを使わずに、JavaScripのみでプログラムを作ることを課題に制作を行いました。<br><br>制作にあたり苦労したことは、フェードイン、フェードアウトといったjQueryでは簡単に実装できたDOMの操作でした。<br><br>様々な技術書や記事などを参考にし時間制御と透過度の加算、減算、DOM操作について学びました。';
$githab = 'https://github.com/beeeeesankun/';
$start = '2020/10月';
$link =  '<div class="link">
            <a href="./index.php#works"><i class="fas fa-angle-double-left"></i>TOP</a>
            <a href="./igarashi-education.php">NEXT<i class="fas fa-angle-double-right"></i></a>
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