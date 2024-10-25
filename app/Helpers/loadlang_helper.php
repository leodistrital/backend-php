<?php
use App\Models\LabelModel;

function traduccirlabeldb($texto){
    $campos = ['tex_lab_esp as label'];
    if (get_cookie('bamidioma') == "ENG") {
      $campos = ['tex_lab_ing as label'];
    } 
    $labels = new LabelModel();
    $label =$labels->select($campos)->where('nom_lab', $texto)->limit(1)->find();
    if(count($label)>0){
        // echo "si hay algo";
         return $label[0]['label'];
    }else {
        agregarLable($texto);    
        return $texto;
    }
}


function agregarLable($texto){
    $labels = new LabelModel();
    $data = [
			'nom_lab' => $texto
            ,'tex_lab_ing' => $texto
            ,'tex_lab_esp' => $texto
		];

		$id = $labels->insert($data);
}