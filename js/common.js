// アニメーション
jQuery(function ($) {
  new WOW().init();
});

// ドロワー
jQuery(function ($) {
  $(".drawer-trigger").on("click", function (event) {
    $("body").toggleClass("drawer-active");
  });
});
