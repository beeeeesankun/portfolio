'use strict';
//font set
(function(d) {
  var config = {
    kitId: 'wbw0hnt',
    scriptTimeout: 3000,
    async: true
  },
  h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
})(document);

const modal = document.getElementById('modal');
const modalIn = document.getElementById('modalIn');
const modalOut = document.getElementById('modalOut');

//fadeIn
function fadeIn (targetElement,duration){

  if (!targetElement) return;

  const fadeTime = (duration) ? duration : 500;
  const roopTime = fadeTime / 10;
  let initialOpacity = 0;

  const addOpacity = setInterval(function(){
    if(initialOpacity > 1){
      clearInterval(addOpacity);
      targetElement.style.opacity = 1;
    }else{
      initialOpacity = initialOpacity + 0.1;
      targetElement.style.opacity = initialOpacity;
    }
  },roopTime);

  targetElement.style.opacity = 0;
  targetElement.style.display = "block";
  addOpacity;
}

// fadeOut
function fadeOut (targetElement,duration){
  if (!targetElement) return;

  const fadeTime = (duration) ? duration : 500;
  const roopTime = fadeTime / 10;
  let initialOpacity = 1;

  const decreaseOpacity = setInterval(function(){
    if(initialOpacity < 0){
      clearInterval(decreaseOpacity);
      targetElement.style.opacity = 0;
      targetElement.style.display = "none";
    }else{
      initialOpacity = initialOpacity - 0.1;
      targetElement.style.opacity = initialOpacity;
    }
  },roopTime);

  decreaseOpacity;
}

//modal click event
modalIn.addEventListener("click",function(){
  fadeIn(modal);
});

modalOut.addEventListener("click",function(){
  fadeOut(modal);
});

//change page
const logos = document.getElementById('logos');
const modalLi = Array.from(modal.getElementsByTagName('li'));
const part = Array.from(document.getElementsByClassName('part'));

modalLi.forEach(function(trgetLi){
  trgetLi.addEventListener('click',function(){
    fadeOut(modal);
    let getTgt = this.getAttribute('data-tgt');
    for (var i = 0; i < part.length; i++){
      part[i].style.display = 'none';
      let judge = part[i].classList.contains(getTgt);
      if(judge && getTgt == 'access'){
        fadeIn(part[i],700);
        logos.style.color = '#fff';
      }else if(judge && getTgt == 'home'){
        fadeIn(part[i],700);
        logos.style.color = '#fff';
      }else if(judge){
        fadeIn(part[i],700);
        logos.style.color = '#000';
      }
      if(window.matchMedia('(max-width:960px)').matches){
        logos.style.color = '#000';
      }
    }
  });
})
