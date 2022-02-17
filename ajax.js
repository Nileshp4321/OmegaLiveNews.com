function fetchCities(str)
{
    req=new XMLHttpRequest();
    req.open("GET","ajax.php?state="+str,true);
    req.send();

    req.onreadystatechange=function(){
     
        if(req.readyState==4&&req.status==200)
        {
            document.getElementById('ajax').innerHTML=req.responseText;
        }

    }
}