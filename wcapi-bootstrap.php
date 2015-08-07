<?php
#WCAPI documentation: https://www.oclc.org/developer/develop/web-services/worldcat-search-api/bibliographic-resource.en.html
#OCLC Service Configuration account required to request keys
#https://worldcat.org/config/
#https://platform.worldcat.org/wskey/

	$query = 'srw.au exact "Leggott, Mark"';
	$query = urlencode($query);
	$key = "";
	$secret = "";
	$save_response = "wcapi-response.txt";
	$header = "Authorization: wskey=\"$key\"";
	passthru("/usr/bin/curl -v -o $save_response -H \"$header\" \"http://www.worldcat.org/webservices/catalog/search/sru?query=$query&wskey=$key&servicelevel=full\"");
?>
