/*function getViewports() {

    let x =
        window.innerWidth;
    let b =
        window.innerHeight;

    let c =
        document.documentElement.clientWidth;
    let m =
        document.documentElement.clientHeight;


    console.log(x, c);
    if(x !== c ){
     document.querySelector('.grid').style.display = 'flex';
        document.location.reload(true);
    }
}

window.addEventListener('resize', getViewports);
window.addEventListener('orientationchange', getViewports);

getViewports();*/

// собираем все якоря; устанавливаем время анимации и количество кадров
/*const anchors = document.querySelectorAll('a.scroll-to');

for (let anchor of anchors) {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        const blockID = anchor.getAttribute('href');

        document.querySelector(blockID).scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        })
    })
}*/

/*const anchors = [].slice.call(document.querySelectorAll('a[href*="#"]')),
    animationTime = 1000,
    framesCount = 20;

anchors.forEach(function(item) {
        item.addEventListener('click', function(e) {
        e.preventDefault();
        let coordY = document.querySelector(item.getAttribute('href')).getBoundingClientRect().top + window.pageYOffset;
        let scroller = setInterval(function() {
      let scrollBy = coordY / framesCount;
 if(scrollBy > window.pageYOffset - coordY && window.innerHeight + window.pageYOffset < document.body.offsetHeight) {
        window.scrollBy(0, scrollBy);
            } else {
             window.scrollTo(0, coordY);
                clearInterval(scroller);
            }
         }, animationTime / framesCount);
    });
});*/

$(document).ready(function(){
    $("a[href*=#]").on("click", function(e){
        let anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $(anchor.attr('href')).offset().top
        }, 3000);
        e.preventDefault();
        return false;
    });
});











