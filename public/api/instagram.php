<?php
$accessToken = getenv ('INSTAGRAM_ACCESS_TOKEN'); 
$businessId = getenv ('INSTAGRAM_BUSSINESS_ID'); 
$user = getenv ('FACEBOOK_USER');

$fields = 'business_discovery.username('.$user.'){id,followers_count,media_count,ig_id,media{caption,media_url,media_type,like_count,comments_count,timestamp,id}}';

$url = 'https://graph.facebook.com/v6.0/'.$businessId."?fields=".$fields."&access_token=".$accessToken;

 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$jsonText = curl_exec($ch);
curl_close($ch);

echo $jsonText;
exit;