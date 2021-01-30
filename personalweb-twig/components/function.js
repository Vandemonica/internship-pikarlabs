function next(key, id, max){

    if(key==-1){
        if(id >= (max-1) ){
            document.getElementById('slide-'+id).style.display = 'none';
            document.getElementById('slide-0').style.display = 'block';
        }
        else{
            document.getElementById('slide-'+id).style.display = 'none';
            document.getElementById('slide-'+ (id+1) ).style.display = 'block';
        }
    }
    else{
        if(id >= (max-1) ){
            document.getElementById(key+'-slide-'+id).style.display = 'none';
            document.getElementById(key+'-slide-0').style.display = 'block';
        }
        else{
            document.getElementById(key+'-slide-'+id).style.display = 'none';
            document.getElementById(key+'-slide-'+ (id+1) ).style.display = 'block';
        }
    }

    

}

function prev(key, id, max){

    if(key==-1){
        if(id <= 0){
            document.getElementById('slide-'+id).style.display = 'none';
            document.getElementById('slide-'+ (max-1) ).style.display = 'block';
        }
        else{
            document.getElementById('slide-'+id).style.display = 'none';
            document.getElementById('slide-'+(id-1)).style.display = 'block';
        }
    }
    else{
        if(id <= 0){
            document.getElementById(key+'-slide-'+id).style.display = 'none';
            document.getElementById(key+'-slide-'+ (max-1) ).style.display = 'block';
        }
        else{
            document.getElementById(key+'-slide-'+id).style.display = 'none';
            document.getElementById(key+'-slide-'+(id-1)).style.display = 'block';
        }
    }

    

}

function ShowModal(key, galery){
    if(key == -1){
        document.getElementById(galery).style.display = 'block';
        document.getElementById('slide-0').style.display = 'block';
    }
    else{
        document.getElementById(galery).style.display = 'block';
        document.getElementById(key+'-slide-0').style.display = 'block';
    }  
}

function HideModal(id){
    document.getElementById(id).style.display = 'none';
}

function HideSlide(key, max){
  if(key == -1){
    id = 'slide-';
  }
  else{
    id = key+'-slide-';
  }

  for(let x=0; x<max; x++){
    document.getElementById(id+x).style.display = 'none';
  }
}