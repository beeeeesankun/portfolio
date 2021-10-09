(function(d) {
  var config = {
    kitId: 'vqa0rph',
    scriptTimeout: 3000,
    async: true
  },
  h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
})(document);

const closeModal = function(){
  $(".bars").removeClass("active");
  $(".modal-bg").fadeOut('500');
  $(".modal").css('right','')
}

$("header").on("click",".bars",function(){
  $(".bars").addClass("active");
  $(".modal-bg").fadeIn('500');
  $(".modal").css('right','0')
});

$("header").on("click",".active",function(){
  closeModal();
});

$(document).click(function(event){
  const target = $(event.target);
  if(target.hasClass('modal-bg')) {
    closeModal();
  }
});

$(".logo-area").click(function () {
  $("body,html").animate({scrollTop: 0}, 500);
  return false;
});

$(window).scroll(function () {
  $(".effect-fade").each(function () {
    var elemPos = $(this).offset().top;
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll > elemPos - windowHeight) {
      $(this).addClass("effect-scroll");
    }
  });
});
