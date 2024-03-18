
  <section class="frame gioi-thieu" id="f-gioi-thieu">
    <div class="container">
      <div class="m-logo-gt t-center">
      </div>
      <div class="slogan">
      </div>

      <div class="payment-fanpage-link t-upper t-center t-upper hidden-pc p-relative">
                <a href="<?php if($detect->isiOS()) { echo "/app/TMKD.ipa"; } else {echo "/app/TMKD.apk";};?>" class="btn-link-pm btn-download-game f-uvn_laclongquanbold m-auto">
        </a>
                  <a href="/user/payment" class="btn-link-pm btn-load-card f-uvn_laclongquanbold">
        </a>

        <img src="assets/frontend/home/assets/images/m-img-game-card.png" alt="">
      </div>

      <div class="info-card-download hidden-mobile  p-relative">

        <div class="link-tai-card-download">
          <p class="link-tai-cd bg-btn-link">
            <a href="/app/TMKD.ipa" class="a100 f-geoslab703extrar t-upper link-dl-game link-app d-flex a-center">
              <span class="icon-dl icon-appstore"></span>
              <span class="text-dl">
                <span class="txt-f-dl f-uvn_laclongquanr">Tải game trên</span>
                <span class="txt-name-dl f-uvn_laclongquanbold" data-text="Appstore">Appstore</span>
              </span>
            </a>
          </p>
          <p class="link-tai-cd bg-btn-link">
            <a href="<?=$down['0'];?>" class="a100 f-geoslab703extrar t-upper link-dl-game link-gg d-flex a-center">
              <span class="icon-dl icon-chplay"></span>
              <span class="text-dl">
                <span class="txt-f-dl f-uvn_laclongquanr">Tải game trên</span>
                <span class="txt-name-dl f-uvn_laclongquanbold" data-text="CH play">CH play</span>
              </span>
            </a>
          </p>
          <p class="link-tai-cd bg-btn-link">
            <a href="<?=$down['0'];?>" class="a100 f-geoslab703extrar t-upper link-dl-game link-pc d-flex a-center">
              <span class="icon-dl icon-pc"></span>
              <span class="text-dl">
                <span class="txt-f-dl f-uvn_laclongquanr">Tải game trên</span>
                <span class="txt-name-dl f-uvn_laclongquanbold" data-text="PC">PC</span>
              </span>
            </a>
          </p>
        </div>
        <div class="btn-nap-the  t-center t-upper f-uvn_laclongquanbold p-relative">
          <a href="/user/payment" class="a100">
            Nạp thẻ
          </a>
        </div>
      </div>
    </div>
  </section>


 <div class="about-footer">
    <section class="about-link p-relative ">
      <div class="container">
        <div class="list-link-about">
          <!-- fanpage -->
          <a href="<?=$group;?>" class="link-to p-relative">
            <img src="assets/frontend/home/assets/images/bg-fp-about.png" alt="">
          </a>
          <!-- group -->
          <a href="<?=$group;?>" class="link-to link-to-gr p-relative">
            <img src="assets/frontend/home/assets/images/bg-gr-about.png" alt="">
          </a>
          <!-- youtube -->
          <a href="<?=$group;?>" class="link-to link-to-yt p-relative">
            <img src="assets/frontend/home/assets/images/bg-yt-about.png" alt="">
          </a>
        </div>
      </div>
    </section>
 <footer class="footer f-utm_nyala">
      <div class="container">
        <p class="t-center t-upper hotline f-uvn_laclongquanr">
          
        </p>
        <div class="box-link-footer">
          <p class="t-center t-upper">
            <a href="/">Điều khoản sử dụng</a>
            |
            <a href="/">Cài đặt gỡ bỏ</a>
          </p>
          <p class="t-center txt-healthy">
            Chơi quá 180 phút một ngày sẽ ảnh hưởng đến sức khỏe
          </p>
        </div>
      </div>
    </footer>
  </div>