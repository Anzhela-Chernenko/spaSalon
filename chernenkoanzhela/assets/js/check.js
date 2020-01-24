function myFunction() {
    let dan = document.getElementById("agree").required;

    if (dan == dan){
        document.getElementById("jon").innerHTML = `Please indicate that you accept the Terms and Conditions! `;
        document.getElementById('bird').setAttribute("style", "color:red; border: 1px solid red;");



    }
}

function checkPress(){
    document.getElementById('agree').addEventListener("click", function () {
        document.getElementById('bird').setAttribute("style", "color:#afafaf; border: 1px solid transparent;");
        document.getElementById("jon").style.color = 'transparent';
    });
}

checkPress();