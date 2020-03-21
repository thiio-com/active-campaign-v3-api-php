use WebforceHQ\ActiveCampaign\ActiveCampaign;
use WebforceHQ\ActiveCampaign\models\ActiveCampaignTag;


$url = "https://webforcehq55689.api-us1.com";
$key = "deb5b7d7d1eca58523dcd81ad5f91881dae00c1c00d8a155569d53adadcb5d900add1de9";

$client = new ActiveCampaign();
$client->initialize($url, $key);


$tags = $client->tags();
try{
    $tagIdToDelete = 29;
    $response = $tags->delete($tagIdToDelete);
    
    if($response->success){
        echo "Tag successfully deleted";
    }else{
        if($response->body->message){
            echo $response->body->message."\n";
        }
        if($response->body->error){
            echo $response->body->error."\n";
        }
    }
}catch(Exception $e){
    echo $e->getMessage();
}