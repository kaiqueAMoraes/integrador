$(function() {
  $.scrollify({
      section : ".sectionAlbum",
      sectionName : "section",
      interstitialSection : "",
      easing: "easeOutExpo",
      scrollSpeed: 1100,
      offset : 0,
      scrollbars: true,
      standardScrollElements: "",
      setHeights: true,
      overflowScroll: true,
      updateHash: true,
      touchScroll:true,
      before:function() {},
      after:function() {$(this).animate({'opacity':'1'},1000);},
      afterResize:function() {},
      afterRender:function() {}
    });
});
