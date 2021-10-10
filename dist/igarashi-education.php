<?php
ini_set('display_errors', true);
$title = 'Igarashi Education';
$pass = 'igarashi-education';
$h3 = 'Igarashi Education';
$h4 = 'HTML / CSS(Sass) / jQuery';
$p = '本制作物はwebデザイナーである<a href="https://twitter.com/ririru_123?s=20" target="_blank"
rel="noopener">いがらし様(@ririru_123)</a>がデザインされた。現場での実務を想定し、<a
href="https://xd.adobe.com/view/1d8f310a-c359-4dbe-462f-9ee8d2e3d9ce-6bbe/" target="_blank"
rel="noopener">adobeXDデザインカンプ</a>を元にコーディングをした。デザインカンプはPCサイズ、タブレットサイズ、スマホサイズの３サイズ。こだわった点は、どの端末・ブラウザで見た際もレイアウトが崩れないことです。そのために、端末の横幅を基準とし、値を全て相対値で指定をし、アスペクト比が変わらない様に制作した。また、各ブラウザへ対応するためにIEは11以上、Androidは4.4以上、その他は最新2バージョンでベンダープレフィックスを指定することで対応した。制作期間は2020年11月25日より同年12月1日の7日間。制作時間は約20時間。
';
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
        <div class="swiper-slide"><img <?php echo 'src=./img/' . $pass . '/' . $pass .'2.jpg' ?> alt=""></div>
        <div class="swiper-slide"><img <?php echo 'src=./img/' . $pass . '/' . $pass .'3.jpg' ?> alt=""></div>
        <div class="swiper-slide"><img <?php echo 'src=./img/' . $pass . '/' . $pass .'4.jpg' ?> alt=""></div>
      </div>
      <div class="swiper-pagination"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
      <div class="swiper-scrollbar"></div>
    </div>
    <a href="https://fukabeakihiro.com/igarashi-education/" target="_blank" rel="noopener">
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