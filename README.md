# codeigniter3-base

Codeigniter 3

Ion Auth fixed for codeigniter 3

Elegance fixed for codeigniter 3
In line 34 of Elegant.php i have changed "elseif(strpos(strtolower($filename), '.php') !== false)" to "elseif(strpos(strtolower($filename), '.elegant.php') !== false)" for make it compatible with other type of models. To load a Elegance model you should write ".elegant.php" at the end of the filename, for example 'user.elegant.php'.