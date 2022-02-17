req=new XMLHttpRequest();
req.open("GET","https://newsapi.org/v2/top-headlines?country=in&apiKey=e4407c81f905426a80252535f49a722d",true);

req.onreadystatechange=function(){
     if(req.readyState==4&&req.status==200)
     {
         let response=JSON.parse(req.responseText);
         let art=response.articles;
         let newshtml="";
         art.forEach(element => {

            let news=`
            <div id="main">

           <div  class="news" id="title"><h3>Breaking News:<h3>${element["title"]}</div>
            <div class="news" id="content">${element["content"]} <a href="${element['url']}">Read more</a></div>
            <div class="news" id="description">${element["description"]}</div>
            <div class="news" id="urlToImage"><img src="${element["urlToImage"]}" ></img></div>
            </div>
            `;
        newshtml+=news; 
            });
      document.getElementById("container").innerHTML=newshtml;      
     }
     else
     {
         console.log("Some error is occured");
     }

}
req.send();