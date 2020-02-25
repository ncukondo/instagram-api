axios.get("api/instagram.php").then(instagram_data=>{
  console.log(instagram_data);
    
  const gallery_data = instagram_data["data"]["business_discovery"]["media"]["data"];


  let photos = "";
  let maxResult = 9;
  const photoCount = gallery_data.length>maxResult ? maxResult : gallery_data.length;

  for(let i = 0; i < photoCount ;i++){
    photos += '<li class="gallery-item"><img src="' + gallery_data[i].media_url + '">'+gallery_data[i].caption+'</li>';
  } 
  document.querySelector("#gallery").innerHTML = photos;
}).catch(error=>{
  console.log(error);
})