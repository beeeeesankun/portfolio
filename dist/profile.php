<!DOCTYPE html>
<html lang="ja">

<head>
  <?php require '../dist/components/head.php'; ?>
  <title>profile</title>
</head>

<body>
<div class="profile-page">
  <div class="nav">
    <ul>
      <li><a href="./index.php#profile">top</a></li>
      <li class="active"><a href="">profile</a></li>
    </ul>
  </div>
  <section class="s_about">
    <h2 class="s_about_h2 anime-load">about</h2>
    <div class="s_about_container">
      <figure class="s_about_container_fig anime">
        <div class='img-wrap'><img src='./img/icon.jpg' alt=''></div>
        <figcaption class="s_about_container_fig_caption">
          <ul>
            <li>名前：深辺　明寛</li>
            <li>経験競技：水泳</li>
            <li>趣味：水泳、釣り、DIY</li>
            <li>好きなもの：お酒<br>マイブームはハイボール</li>
            <li>尊敬する人：<br>UVERworldのTAKUYA∞</li>
          </ul>
        </figcaption>
      </figure>
      <div class="s_about_container_article-wrap">
        <article class="s_about_container_article anime">
          <p class="s_about_container_article_title">エンジニアを目指すきっかけ</p>
          <p>
            　制作物を作っていく過程でプログラムに非常多くのエラーが起きました。<br>その際に、どうして動かないのか？なぜエラーが出るのか？という仮説と検証、現時点での知らない知識の補完等を繰り返し行いました。<br>そして、一つのエラーが解消出来た時に非常に強い達成感と、点として散っていた知識が線となるような感覚を味わいました。<br>その没頭する感覚とウェブ上で自身の考えた物が形となる。そんなことに魅力と面白さを感じエンジニアを志すようになりました。
          </p>
        </article>
        <article class="s_about_container_article anime">
          <p class="s_about_container_article_title">長所・短所</p>
          <p>
            　長所はスポーツで培ってきた集中力と継続力です。<br>私は幼少の頃から大学4年まで約18年間水泳を続けてきました。そこで、選手としての集中の仕方や努力の仕方を学びました。<br>また、中高大と最終学年では責任感を評価され部長・主将に任命されておりました。<br>チームで目標を持って活動する難しさと、チーム一丸となった時のエネルギーとパワーの強さを学びました。<br>日々の学習の中でも、この長所と経験を生かして活動しています。<br>短所はオンとオフがはっきりしている所です。オフの際は省エネモードになります。<br>しかし、リラックスできるオフがあるからこそのオンだと思っているので、オンの際は集中力が高く、良いパフォーマンスを発揮できます。
          </p>
        </article>
        <article class="s_about_container_article anime">
          <p class="s_about_container_article_title">提供できる価値</p>
          <p>
            　現場経験が少ないということもあり、技術力では既存のエンジニアの方には到底敵いません。<br>しかし、私には伸び代と未熟さ故のハングリー精神があります。<br>また、水泳で培ってきた選手としての経験や責任感があります。<br>よって成長スピードと取り組む姿勢で周りに影響を与えることが今の私が提供できる価値だと考えております。
          </p>
        </article>
      </div>
    </div>
  </section>
  <section class="s_skill">
    <h2 class="s_skill_h2 anime">skill</h2>
    <div class="s_skill_container">
      <div class="s_skill_container_item anime">
        <p class="s_skill_container_item_title">言語</p>
        <ul>
          <li>HTML5 </li>
          <li>CSS3 (Node-Sass)</li>
          <li>JavaScript</li>
          <li>PHP</li>
        </ul>
      </div>
      <div class="s_skill_container_item anime">
        <p class="s_skill_container_item_title">ライブラリ</p>
        <ul>
          <li>WordPress</li>
          <li>jQuery</li>
          <li>Vue.js *</li>
        </ul>
      </div>
      <div class="s_skill_container_item anime">
        <p class="s_skill_container_item_title">開発支援</p>
        <ul>
          <li>MAMP</li>
          <li>Backlog</li>
          <li>Talknote</li>
          <li>Gulp</li>
          <li>Adobe XD</li>
          <li>Adobe Photoshop</li>
          <li>Git&GitHab</li>
          <li>Webpack&Babel *</li>
        </ul>
      </div>
    </div>
  </section>
  </div>
  <script src="./js/base.js"></script>
</body>

</html>