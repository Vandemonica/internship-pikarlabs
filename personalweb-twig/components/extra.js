function WalkingText(teks, id, i, interval){
    var _elem = document.getElementById(id);

    if (i < teks.length) {
        _elem.innerHTML += teks.charAt(i);
        i++;
        setTimeout(function(){
            WalkingText(teks, id, i, interval);
        }, interval);
    }
}



window.addEventListener('load', WalkingText(text1, 'welcome1', 0, 200))
window.addEventListener('load', WalkingText(text2, 'welcome2', 0, 60));