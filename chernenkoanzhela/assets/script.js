
   new Swiper('.swiper-container', {
       spaceBetween: 0,
       centeredSlides: true,
       speed: 5000,
       autoplay: {
           delay: 10000,
           disableOnInteraction: false,
       },
       pagination: {
           el: '.swiper-pagination',
           clickable: true,
       },
       navigation: {
           nextEl: '.swiper-button-next',
           prevEl: '.swiper-button-prev',
       },
   });



   function openNav() {
       document.getElementById("myNav").style.height = "100%";

   }


   function closeNav() {
       document.getElementById("myNav").style.height = "0%";
   }


   function sendFone() {

       let fone =  document.getElementById('sendInfo').style.display = 'flex';
       document.querySelector('.feedbackField__form').className = 'feedbackField__form animated bounceIn';

       document.querySelector('.callback-bt').style.display = 'none';
   }
   function cancelSendFone() {
       document.getElementById('sendInfo').style.display = 'none';
       document.querySelector('.callback-bt').style.display = 'flex';
   }

   setTimeout(()=>{
       document.querySelector('.callback-bt').style.display = 'flex';
       document.querySelector('.text-call').className = 'text-call animated jackInTheBox';
   },5000);
/*
   $('form').submit(function () {
       return false;
   });*/
   /*
      $('form').submit(function (e) {
          e.preventDefault();
      });*/
   function cutWelcome() {

       let currentLocation = window.location;
       let readMore = document.getElementById('cutWelcome');
       let motto = document.getElementById('changeMotto');
       let title = document.querySelector('.h1');
       let cutAppoint = document.getElementById('cutAppoint');
       let cutReadMore = document.getElementById('cutReadMore');

        if(currentLocation == 'http://chernenkoanzhela/about/'){
           readMore.textContent = 'READ MORE';
            motto.textContent = 'ABOUT US';
           title.className = 'h1 animated flip';
           cutAppoint.style.display = 'none';
           cutReadMore.style.display = 'none';
      }else if(currentLocation == 'http://chernenkoanzhela/services/') {
           readMore.textContent = 'READ MORE';
           motto.textContent = 'SERVICES LIST';
           title.className = 'h1 animated flip';
           cutAppoint.style.display = 'none';
           cutReadMore.style.display = 'none';

           document.querySelector('.map').setAttribute('style', 'position: relative; top: 30px;');

       }else if (currentLocation == 'http://chernenkoanzhela/team/'){
           readMore.textContent = 'READ MORE';
           motto.textContent = 'TEAM MEMBERS';
           title.className = 'h1 animated flip';
           cutAppoint.style.display = 'none';
           cutReadMore.style.display = 'none';
       }else if(currentLocation == 'http://chernenkoanzhela/contact/'){
           readMore.textContent = 'READ MORE';
           motto.textContent = 'CONTACTS';
           title.className = 'h1 animated flip';
           cutAppoint.style.display = 'none';
           cutReadMore.style.display = 'none';

           document.querySelector('.map').style.display = 'none';
       }else if(currentLocation == 'http://chernenkoanzhela/' || currentLocation == 'http://chernenkoanzhela'){

        }else{
            readMore.textContent = 'READ MORE';
            motto.textContent = '404!NOT FOUND';
            title.className = 'h1 animated flip';
            cutAppoint.style.display = 'none';
            cutReadMore.style.display = 'none';

            document.querySelector('.map').style.display = 'none';
        }

   }

   cutWelcome();

   //circle animation
function showCircle(){
    let currentLocation = window.location;
    if(currentLocation == 'http://chernenkoanzhela/' || currentLocation == 'http://chernenkoanzhela/services/'){
        let cup = document.querySelector('.circle__cup');
        let flower = document.querySelector('.circle__flower');
        let bottle = document.querySelector('.circle__bottle');
        let shoes = document.querySelector('.circle__shoes');
        let east = document.querySelector('.circle__east');
        let stones = document.querySelector('.circle__stones');

        let circle = ()=> {

            cup.className = 'circle__cup package rotate-vert-center';

            flower.className = 'circle__flower package rotate-vert-center';
            flower.style.animationDelay = '5s';

            bottle.className = 'circle__bottle package rotate-vert-center';
            bottle.style.animationDelay = '10s';

            shoes.className = 'circle__shoes package rotate-vert-center';
            shoes.style.animationDelay = '15s';

            east.className = 'circle__east package rotate-vert-center';
            east.style.animationDelay = '20s';

            stones.className = 'circle__stones package rotate-vert-center';
            stones.style.animationDelay = '25s';

        };




        setInterval(()=>{
            cup.className = 'circle__cup package';
            flower.className = 'circle__flower package';
            bottle.className = 'circle__bottle package';
            shoes.className = 'circle__shoes package';
            east.className = 'circle__east package';
            stones.className = 'circle__stones package';


        },4000);


        setInterval(circle, 0);


        setInterval(()=>{

            let t = document.querySelector('.circleAnimation');
            t.className = 'circleAnimation focus-in-contract ';
            t.innerHTML = `
    <p class="circle__title">
                                Beauty Studio
                            </p>
                            <p class="circle__subtitle">
                                Massage Spa
                            </p>
                            <p class="circle__discription">
                               Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore met, 
                               consecteturLorem ipsum dolor sit amet. Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore met, consectetur.
                            </p>
                           
    `;

        },25000);


        setInterval(()=>{


            let t = document.querySelector('.circleAnimation');
            t.className = 'circleAnimation focus-in-expand ';
            t.innerHTML = `
    <p class="circle__title">
                                Beauty Studio
                            </p>
                            <p class="circle__subtitle">
                                Hair Spa
                            </p>
                            <p class="circle__discription">
                               Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore met, 
                               consecteturLorem ipsum dolor sit amet. Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore met, consectetur.
                            </p>
                           
    `;



        },15000);

    }
}


showCircle();






