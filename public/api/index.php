<?php

$instagram_business_id = '17841430688786272'; 
$access_token = 'EAACzWURrQ1UBAEXWyjnJSZBxeOV4HDrRZCXjD82j3e2HsQ94qCBH6gogo9rZB1aXLZAh04l4mRVPKnhSjy4FFs5EQA4XgQGjiwZCXSZBxMmqA9uwm7gReoDlkeAnBDGIjERcS59zTNQk3EFQ1ynxsWQZBHZC9NlkPA7nf02wrY7y5mqZCVTUHUKbhZA5Nrbgh9TYAZD';

$target_user = 'meidai_soushin';

//自分が所有するアカウント以外のInstagramビジネスアカウントが投稿している写真も取得したい場合は以下
$query = 'business_discovery.username('.$target_user.'){id,followers_count,media_count,ig_id,media{caption,media_url,media_type,like_count,comments_count,timestamp,id}}';

//自分のアカウントの画像が取得できればOKな場合は$queryを以下のようにしてください。

//$query = 'name,media{caption,like_count,media_url,permalink,timestamp,username}&access_token='.$access_token;



$instagram_api_url = 'https://graph.facebook.com/v5.0/';
$target_url = $instagram_api_url.$instagram_business_id."?fields=".$query."&access_token=".$access_token;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $target_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$instagram_data = curl_exec($ch);
curl_close($ch);

echo $instagram_data;
exit;