<?php
ini_set('display_errors', true);
$title = 'portfolio';
$pass = 'portfolio';
$h3 = 'portfolio';
$h4 = 'Design,HTML,CSS3(Sass),JavaScript,PHP';
$p = 'こちらは本ポートフォリオのページである。<br><br>以前作成したポートフォリオをPHPをベースに再作成した。<br><br>今後拡張する際にページの作成が簡単になるように共通部分をテンプレート化した。<br><br>また、HTMLとCSSはBEM記法で作成した。';
$githab = 'https://github.com/beeeeesankun/portfolio';
$start = '2021/10月';
$link =  '<div class="link">
            <a href="./changer.php"><i class="fas fa-angle-double-left"></i>PREV</a>
            <a href="./index.php#works">TOP<i class="fas fa-angle-double-right"></i></a>
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