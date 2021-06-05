<?php
include("./data/dischi.php");


$fGenre = isset($_GET["genre"]) ? $_GET["genre"] : null;


$filters = [
    "genre" => $fGenre
];

function filter($all, $fltrs){
$filteredData = [];
    foreach($all as $singledata){         
    $isValid = true;
        
        foreach($fltrs as $fKey => $fValue){                  //per ogni filtro...
            if($fValue){                                       //...se esiste un valore inserito dall'utente  
            $result = strstr(strtolower($singledata[$fKey]), strtolower($fValue));   //...lo cerco nell'elemento usando la stessa chiave 
            //strstr= esiste la stringa ? true : false. Prende gli argomenti 'dove' e 'cosa'
            
                if($result == false){  //se il filtro non trova nulla....
                    $isValid = false;
                }
            }
        }
        if($isValid) {           //...non farà il 'push'
        $filteredData[] = $singledata;
        }
    }
    return $filteredData; echo $filteredData;
};

$newdata = filter($data, $filters);

header("Content-type: application/json"); //specifico il tipo di dati da restituire
 echo json_encode($newdata);


//http://localhost/boolean/php-ajax-dischi/
//http://localhost/boolean/php-ajax-dischi/server.php?fGenre=pop