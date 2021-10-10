<?php
ini_set('display_errors', true);
$title = 'IMAGINARY ONLINE';
$pass = 'imaginary';
$h3 = 'IMAGINNARY ONLINE';
$h4 = 'Design / HTML,CSS(Sass) / JavaScript(native)';
$p = '本制作物はECサイトのトップページを模して制作しました。工夫<br>したことは、Photoshop等の練習を兼ねて、画像やバナーの多いアパ<br>レル系のECサイトを課題としました。また、この制作物もJavaScript<br>のみで実装しました。苦労したことは、サイト中央でのカテゴリーで<br>のフィルター機能。また、商品をカートへ追加することや個数の選択<br>と削除、合計金額の表示等のカート機能の実装が大変でした。<br>具体的には、HTMLCollectionオブジェクトを知識として知るまでが<br>既存の知識や考え方では制作が進まず非常に時間がかかりました。<br>';
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
    <a href="https://fukabeakihiro.com/imaginary-online/" target="_blank" rel="noopener">
      <h3><?php echo $h3; ?><i class="fas fa-external-link-alt"></i></h3>
    </a>
    <h4><?php echo $h4; ?>
    </h4>
    <p><?php echo $p; ?>
    </p>
    <div class="link">
      <a href=""><i class="fas fa-angle-double-left"></i>PREV</a>
      <a href="">NEXT<i class="fas fa-angle-double-right"></i></a>
    </div>
  </div>
  <script src="./js/swiper.js"></script>
  <script src="./js/base.js"></script>
</body>

</html>