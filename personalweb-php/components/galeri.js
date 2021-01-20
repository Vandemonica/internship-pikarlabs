function next(id, max){

    if(id >= (max-1) ){
        document.getElementById('slide-'+id).style.display = 'none';
        document.getElementById('slide-0').style.display = 'block';
    }
    else{
        document.getElementById('slide-'+id).style.display = 'none';
        document.getElementById('slide-'+ (id+1) ).style.display = 'block';
    }

}

function prev(id, max){

    if(id <= 0){
        document.getElementById('slide-'+id).style.display = 'none';
        document.getElementById('slide-'+ (max-1) ).style.display = 'block';
    }
    else{
        document.getElementById('slide-'+id).style.display = 'none';
        document.getElementById('slide-'+(id-1)).style.display = 'block';
    }

}