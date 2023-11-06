var timer = 4000;

var i = 0;
var max = document.querySelectorAll('#c > li').length;

function setActiveClasses() {
  document.querySelectorAll("#c > li").forEach(function(element, index) {
    var leftValue = (index * 25) + "%";
    element.classList.add('active');
    element.style.left = leftValue;
  });
}

function resetTransitionDelays() {
  document.querySelectorAll("#c > li").forEach(function(element, index) {
    var delayValue = (index + 1) * 0.25 + "s";
    element.style.transitionDelay = delayValue;
  });
}

setActiveClasses();

setInterval(function(){
  document.querySelectorAll("#c > li").forEach(function(element) {
    element.classList.remove('active');
  });

  resetTransitionDelays();

  if (i < max - 4) {
    i = i + 4;
  } else {
    i = 0;
  }

  setActiveClasses();

  resetTransitionDelays();
}, timer);
