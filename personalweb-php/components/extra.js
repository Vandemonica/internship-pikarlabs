var x = 0;
var y = 0;

function welcome1(){
    if (x < text1.length) {
        document.getElementById('welcome1').innerHTML += text1.charAt(x);
        x++;
        setTimeout(welcome1, 100);
    }
}

function welcome2(){
    if (y < text2.length) {
        document.getElementById('welcome2').innerHTML += text2.charAt(y);
        y++;
        setTimeout(welcome2, 50);
    }
}

window.addEventListener('load', welcome1);
window.addEventListener('load', welcome2);