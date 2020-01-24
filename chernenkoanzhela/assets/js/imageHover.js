
document.getElementById('imgHover').addEventListener('mouseover', function () {
    document.getElementById('pictireGlide').style.display = 'flex';
});
document.getElementsByClassName('commonPic')[1].addEventListener('mouseover', function () {
    document.getElementsByClassName('pictireGlide')[1].style.display = 'flex';
});
document.getElementsByClassName('commonPic')[2].addEventListener('mouseover', function () {
    document.getElementsByClassName('pictireGlide')[2].style.display = 'flex';
});
document.getElementsByClassName('commonPic')[3].addEventListener('mouseover', function () {
    document.getElementsByClassName('pictireGlide')[3].style.display = 'flex';
});
document.getElementsByClassName('commonPic')[4].addEventListener('mouseover', function () {
    document.getElementsByClassName('pictireGlide')[4].style.display = 'flex';
});



let u = document.querySelectorAll('.pictireGlide');

u.forEach(function(elem) {

    elem.addEventListener("mouseout", function () {
        elem.style.display = 'none';


        })


});

