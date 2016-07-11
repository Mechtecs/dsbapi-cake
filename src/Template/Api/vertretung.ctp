<?php

$this->autoRender = false;
$this->layout = false;
$data = array();
if(count($payload) == 0){
    echo json_encode(["error" => true, "type" => "DATASETEMPTY"]);
}else{
    foreach($payload as $h){
        $tmp = array();
        $tmp["klasse"] = $h->klasse->bezeichnung;
        $tmp["stunde"] = $h->stunde;
        $tmp["art"] = $h->art;
        $tmp["fach"] = $h->fach;
        $tmp["raum"] = $h->raum;
        $tmp["text"] = $h->text;
        $tmp["grund"] = $h->grund;
        array_walk(
            $tmp,
            function (&$entry) {
                $entry = iconv('Windows-1250', 'UTF-8', $entry);
            }
        );
        $data["vertretung"][] = $tmp;
    }
    echo json_encode($data, JSON_PRETTY_PRINT);
}
?>