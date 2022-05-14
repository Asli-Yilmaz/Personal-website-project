const options = {
	method: 'GET',
	headers: {
		'X-RapidAPI-Host': 'mdblist.p.rapidapi.com',
		'X-RapidAPI-Key': '923eb7c7eemsh34ff368f9ae1efep12d79djsnb5444dca66be'
	}
};
var imgArray=new Array();
imgArray[0]=new Image();
imgArray[0].src="CSS/images/malkovich.jpg";
imgArray[1]=new Image();
imgArray[1].src="CSS/images/Lazzaro_Felice.jpg";
imgArray[2]=new Image();
imgArray[2].src="CSS/images/dogtooth.jpg";
imgArray[3]=new Image();
imgArray[3].src="CSS/images/lobster.jpg";
imgArray[4]=new Image();
imgArray[4].src="CSS/images/life.jpg";
i=0;
fetch('https://mdblist.p.rapidapi.com/?s=lobster%20fall%20dogtooth%20John%20malkovich%20tree%20of%20life%20happy%20lazzaro', options)
	.then(response => response.json())
  .then(data=>{
    const list=data.search;
    list.map((item)=>{      
      
      const name=item.title;
      const year=item.year;
      const movie='<li><img src='+imgArray[i].src+'><h2>'+name+'</h2><h2>'+year+'</h2></li>'
      document.querySelector('.movies').innerHTML+=movie;
     i++;
    })
  })
	.catch(err => console.error(err));
