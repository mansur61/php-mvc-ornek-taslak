
<?php

class Route {

    public static function parse_url(){

        $dirname= dirname($_SERVER['SCRIPT_NAME']);
        $baseline = basename($_SERVER['SCRIPT_NAME']);
        $reguest_uri = str_replace([$dirname,$baseline], [],$_SERVER['REQUEST_URI']);
        return $reguest_uri;	
    }


    public static function run($url, $callback, $method = 'get'){

        $method =  explode('|',strtoupper($method));   
        if(in_array($_SERVER['REQUEST_METHOD'],$method)){

            $patterns = [
                '{url}' => '([0-9a-zA-Z]+)',
                '{id}' => '([0-9]+)'
            ];
            $url = str_replace(array_keys($patterns),array_values($patterns),$url);
    
            $reguest_uri = self::parse_url();

                if( preg_match('@^' . $url . '$@',$reguest_uri,$parameters)){
                //echo "Eşleşti." . '<br>'; 
                unset($parameters[0]);


                if(is_callable($callback)){
                    call_user_func_array($callback,$parameters);
                }
               
                //echo "uyeler geldi";
                $controller = explode('@',$callback);
                //print_r($controller) .'<br>';
               
                $className = explode('/',$controller[0]);
                $className = end($className);
                $controllerFile = __DIR__ . '/controller/' . strtolower($controller[0]. '.php');

                if(file_exists($controllerFile)){
                    require $controllerFile;
                    call_user_func_array([new $className,$controller[1]],$parameters);
                }

            }
            
        }
        
    }
}

?>