<?php


class Configuracao {
    public function dateToBR ($dataAmericana){
        //2014-08-25
        $d = explode('-', $dataAmericana);
        $dOK = $d[2].'/'.$d[1].'/'.$d[0];
        return $dOK;
        
    }
    public function dateToUS($dataBrasil){
        //25/08/2014
        $d = explode('/', $dataBrasil);
        $dOK = $d[2].'-'.$d[1].'-'.$d[0];
        return $dOK;
        
        
    }
}
