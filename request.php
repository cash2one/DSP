<?php                                                                                 
$data_string = '{"version":3,"bid":"b8c735eedfc44ccc978ae8aea4f65fc7","request_type":0,"imp":[{"space_id":"94311","width":848,"height":480,"min_cpm_price":149,"player_id":4388,"location":1,"ctype":[2],"playtime":15,"order":4}],"device":{"duid":"AEF8E5CB-5DDC-A37B-33E1-D8DCA4CF4CCE","os":"Mac OS 10.11.3","sw":800,"sh":1280,"ip":"10.100.1.253","ua":"mozilla/5.0 (macintosh; intel mac os x 10_11_3) applewebkit/537.36 (khtml, like gecko) chrome/49.0.2623.87 safari/537.36","connectiontype":0,"type":1,"version":"pcweb_MAC 20,0,0,306","screen_orientation":0},"video":{"video_id":2927190,"video_name":"...... ...36...","collection_id":157290,"collection_name":"......","item_ids":"38,36,42,39","item_names":"null,null,null,null","area_id":1,"year":2015,"duration":2704,"type":1}}';


$ch = curl_init('http://dsp.yundouzi.com/bid.php');                                                                      
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json',                                                                                
    'Content-Length: ' . strlen($data_string))                                                                       
);                                                                                                                   

$result = curl_exec($ch);
$b = curl_multi_getcontent($ch);
print_r($result);

?>