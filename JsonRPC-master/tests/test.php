<?php

include('../src/JsonRPC/Client.php');

class Test extends Client
{
   	public function  main()
    {
        $client = new Client();

        // Use the 'client' variable to call operations on the service.
		
		$tt = $client->doRequest('https://partners-stage.constellation.com/PartnerService/ResidentialPartnerService.svc');
		
		print_r($tt);die;
        // Always close the client.
        $client.Close();
    }
}

$a = new Test();
$a->main();
?>