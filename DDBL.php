<?php

class DDBL
{
	private $Token;
	private $BotId;
	
	public function Initialize($xSetBotId, $xSetToken)
	{
		$this->Token = $xSetToken;
		$this->BotId = $xSetBotId;
	}
	
	public function PostStats($ServerCount)
	{
		$postData = array(
		'server_count' => $ServerCount,
		);

		$ch = curl_init("https://divinediscordbots.com/bot/" . $this->BotId . "/stats");
		curl_setopt_array($ch, array(
		CURLOPT_POST => TRUE,
		CURLOPT_RETURNTRANSFER => TRUE,
		CURLOPT_HTTPHEADER => array(
			"Authorization: " . $this->Token,
			'Content-Type: application/json'
		),
		CURLOPT_POSTFIELDS => json_encode($postData)
		));

		$response = curl_exec($ch);

		if($response === FALSE){
			print_r(curl_error($ch));
		}

		$responseData = json_decode($response, TRUE);
		
		//Optional
		echo $response;
	}
}

?>
