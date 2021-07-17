<?php
// https://gettotop.ru/crm/bitrix24-lidy-s-sajta-avtomaticheskoe-sozdanie-lidov/

$method = $_SERVER['REQUEST_METHOD'];
// 

$message = '';
$admin_email = 'andreww1762@gmail.com'; // 
$email_from = 'andrew1562@yandex.ru'; // 
if (isset($_SERVER['REQUEST_METHOD']) && ($_SERVER['REQUEST_METHOD']=='POST')) {

	$mess_name  = trim(htmlspecialchars($_POST["name"]));
	$mess_tel  = trim(htmlspecialchars($_POST["phone"]));
	$mess_email = trim(htmlspecialchars($_POST["email"]));
	$form_subject = "Данные заявки";

	$message .= 'name: ' . $mess_name . PHP_EOL;
	$message .= 'Телефон: ' . $mess_tel . PHP_EOL;
	$message .= 'email: ' . $mess_email . PHP_EOL;
} 

function adopt($text) {
	return '=?UTF-8?B?'.Base64_encode($text).'?=';
}

$headers = "MIME-Version: 1.0" . PHP_EOL .
"Content-Type: text/html; charset=utf-8" . PHP_EOL .
'From: '.adopt("sender").' <'.$email_from.'>' . PHP_EOL .
'Reply-To: '.$mess_email.'' . PHP_EOL;

//mail($mess_email, adopt($form_subject), $message, $headers);
mail($admin_email, adopt($form_subject), $message);

//echo $message;
echo json_encode('OK');


/** Собераю данные для запроса */
$queryData = http_build_query(array(
	'fields' => array(
		'TITLE' => 'Заявка c сайта',
		'NAME' => $mess_name,
		'PHONE' => Array(
			"n0" => Array(
				"VALUE" => $mess_tel,
				"VALUE_TYPE" => "WORK",
				),
			),
		'EMAIL' => Array(
			"n0" => Array(
				"VALUE" => $mess_email,
				"VALUE_TYPE" => "WORK",
				),
			),
		'UTM' => "http://andreww1762.ru/Studio/?utm_source=yandex&utm_medium=cpc&utm_campaign={campaign_id}&utm_content={ad_id}&utm_term={keyword}"
		),
	'params' => array("REGISTER_SONET_EVENT" => "Y")
));

//$queryUrl = 'https://[ваше_название].bitrix24.ru/rest/[идентификатор_пользователя]/[код_вебхука]/crm.lead.add.json';
$queryUrl = "https://b24-x18kac.bitrix24.ru/rest/1/s16zvj6vs0r4h672/crm.lead.add.json";

if(true) { // 
	// Обращаюсь к Битрикс24
	$curl = curl_init();
	curl_setopt_array($curl, array(
		CURLOPT_SSL_VERIFYPEER => 0,
		CURLOPT_POST => 1,
		CURLOPT_HEADER => 0,
		CURLOPT_RETURNTRANSFER => 1,
		CURLOPT_URL => $queryUrl,
		CURLOPT_POSTFIELDS => $queryData,
	));
	$result = curl_exec($curl);
	curl_close($curl);
	$result = json_decode($result, 1);
	if (array_key_exists('error', $result)) echo "Ошибка при сохранении лида: ".$result['error_description'].
	"<br/>";
}
