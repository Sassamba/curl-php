$file = "https://www.w3schools.com/xml/simplexsl.xml";
$curl = curl_init($file);

curl_setopt($curl, CURLOPT_URL, $file);

    curl_setopt($curl, CURLOPT_HEADER, false);

    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    curl_setopt($curl, CURLOPT_PROXY, "http://proxy.jupiter.co.ao:3128");

    $dados = curl_exec($curl);

    curl_close($curl);
