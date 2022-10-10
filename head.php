<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>서울 시립 미술관</title>

  <!-- 제이쿼리 불러오기 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <!-- 테일윈드 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.4/tailwind.min.css">

  <!-- 폰트어썸 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  
  <!-- 스와이퍼 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.4/swiper-bundle.min.css"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.4/swiper-bundle.min.js"></script>

  <!-- 공통 JS -->
  <script src="resource/index.js" defer></script>
</head>


<body>
<?php
if ( $pageCode == "home" ) {
  $title = "홈";
}
else if ( $pageCode == "sub" ) {
  $title = "서브";
}
?>

  <title><?=$title?></title>


<div class="site-wrap con-min-width">
    <header class="top-bar">
      <div class="con con-padd mx-auto flex">
        <div class="header_logo"><a href="index.ssg.php"><img src="resource/images/head_logo.png" alt=""></a></div>
        <div class="flex-grow"></div>
        <div class="GNB">
          <div class="top flex">
            <ul class="flex cursor-pointer">
              <li>join |</li>
              <li>&nbsp login |</li>
              <li>&nbsp eng</li>
            </ul>
            <div class="inpo flex">
              <div class="self-center img-box cursor-pointer"><img src="resource/images/head_1.png" alt=""></div>
            </div>
          </div>
          <div class="down flex">
            <ul class="flex">
              <li><a href="sub.ssg.php">전시</a></li>
              <li class="down2">
                <a href="">교육 / 행사</a>
                <ul class="down2_sub">
                  <li><a href="">어린이</a></li>
                  <li><a href="">어른</a></li>
                  <li><a href="">체험관</a></li>
                </ul>
              </li>
              <li><a href="">소장품</a></li>
              <li><a href="">연구출판자료</a></li>
              <li><a href="">소식 / 참여</a></li>
              <li><a href="">SeMA 소개</a></li>
              <li class="-mx-8 cursor-pointer"><i class="fas fa-search"></i></li>
            </ul>
          </div>
        </div>
      </div>
    </header>
<main>
      