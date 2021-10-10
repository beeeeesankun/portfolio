<?php
ini_set('display_errors', true);
$title = 'AMORE';
$pass = 'amore';
$h3 = 'レストラン AMORE';
$h4 = 'Design / HTML,CSS(Sass) / JavaScript(native)';
$p = '本制作物はLPを模した作品です。デザイン面で工夫したことは実際<br>のメニューを開いて見ていることをモチーフにスプリットレイアウト<br>を採用し制作しました。昨今のフロントエンド技術の変遷に伴い、<br>モダンJSを使う前にある程度、jQuery等のライブラリを使わずに、<br>JavaScripのみでプログラムを作ることを課題に制作を行いました。<br>制作にあたり苦労したことは、フェードイン、フェードアウトといった<br>jQueryでは簡単に実装できたDOMの操作でした。様々な技術書や記事<br>などを参考にし時間制御と透過度の加算、減算、DOM操作について学<br>びました。'
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
  <div class="nav">
    <ul>
      <li><a href="../index.php#works">works</a></li>
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
    <a href="https://fukabeakihiro.com/amore/" target="_blank" rel="noopener">
      <h3><?php echo $h3; ?><i class="fas fa-external-link-alt"></i></h3>
    </a>
    <h4><?php echo $h4; ?>
    </h4>
    <p><?php echo $p; ?>
    </p>
    <div class="link">
      <a href="./igarashi-education.php">NEXT<i class="fas fa-angle-double-right"></i></a>
    </div>
  </div>
  <script src="./js/swiper.js"></script>
  <script src="./js/base.js"></script>
</body>

</html>