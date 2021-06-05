<?php

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
?>