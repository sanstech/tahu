<?php

function antiSQLInjection($data)
{
	return trim(htmlentities(htmlspecialchars($data)));
}


?>