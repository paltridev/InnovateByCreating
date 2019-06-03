<?php

if(isset($_POST['txtInput'])){
    try{
        $input = $_POST['txtInput'];
        
        $wsdl = 'http://127.0.0.1:8080/Innovate%20By%20Creating/componentSearch/WS/Component.wsdl';

        $options = array('cache_wsdl'=>WSDL_CACHE_NONE, 'features'=>SOAP_SINGLE_ELEMENT_ARRAYS);
        /* 'cache_wsdl'=>WSDL_CACHE_NONE resolves the issue of WS not working due to WSDL caching
         * 'features'=>SOAP_SINGLE_ELEMENT_ARRAYS forces SOAP to keep every response in an array even if the
         * response contains only 1 record
         */

        $client = new SoapClient($wsdl, $options);

        /* Client with debug option*/
         //$debugOption = array('trace'=>true, 'cache_wsdl'=>WSDL_CACHE_NONE, 'features'=>SOAP_SINGLE_ELEMENT_ARRAYS);
         //$client = new SoapClient($wsdl, $debugOption);
         

         //Make request to server
        $response = $client->viewComponent($input);
 
        
        /* Use the following codes to check your SOAP request and response
         * NOTE: The codes below will work only if debug is enable on the client! */
         //echo "<strong>REQUEST:</strong><br/>" . htmlspecialchars($client->__getLastRequest()) . "<br/>";
         // echo "<strong>RESPONSE:</strong><br/>" . htmlspecialchars($client->__getLastResponse()) . "<br/>";
        // echo "<strong>REQUEST HEADER:</strong><br/>" . htmlspecialchars($client->__getLastRequestHeaders()) . "<br/>";
         // echo "<strong>RESPONSE HEADER:</strong><br/>" . htmlspecialchars($client->__getLastResponseHeaders()) . "<br/>";
         

            //Checks if there is any data in the response
        if (isset($response->Component)){

	        //Reading returned Object and creating XML
	        $XMLDocument = new SimpleXMLElement('<?xml version="1.0" ?><Component></Component>');
	        foreach($response->Component as $record){
	        	$component = $XMLDocument->addChild('Component');
	        	$component->addChild('ComponentName',$record->Component);
	        	$component->addChild('Price',$record->Price);
				$component->addChild('ComponentType',$record->ComponentType);
	        }
	
	        $XSLDocument = new DOMDocument();
	        $XSLDocument->load("component.xsl");
	        $XSLProcessor = new XSLTProcessor();//PHP5
	        $XSLProcessor->importStylesheet($XSLDocument);
	        echo $XSLProcessor->transformToXML($XMLDocument);

    	}		
    	else{
			echo "<h1>This field is not found in database!</h1>";
		}
    }
    catch (Exception $e) {
    	echo 'Exception: '.$e->getMessage();
    }
	catch (SOAPFault $exception) {
		echo 'SOAP Exception: '.$exception->getMessage();
	}
}
else{
    header("Location: http://localhost/Innovate%20By%20Creating/componentSearch/index.html");
}

?>