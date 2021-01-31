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


