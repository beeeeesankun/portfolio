<?php
ini_set('display_errors', true);
$title = 'ONLINESHOP Vue.js';
$pass = 'vue_shop';
$h3 = 'ONLINESHOP ver(Vue.js)';
$h4 = 'Design / Vue.js(VueX)';
$p = 'こちらの制作物は過去作のIMAGINNARY ONLINEをVue.jsで書き換えたものになる。<br><br>学習したVue.jsの基礎をアウトプットすることをテーマに作成した。<br><br>カート機能に関してはVueXを利用しより実践的になるよう工夫した。<br><br>また、demoECショップ 管理画面のものとJSONを利用し通信するAPI機能を実装中。';
$githab = 'https://github.com/beeeeesankun/demo_shop';
$start = '2021/9月';
$link =  '<div class="link">
            <a href="./demoEC.php"><i class="fas fa-angle-double-left"></i>PREV</a>
            <a href="./changer.php">NEXT<i class="fas fa-angle-double-right"></i></a>
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
      <a href="https://fukabeakihiro.com/vue_shop/" target="_blank" rel="noopener">
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