<?php
class CSV{
	
	static function export($datas,$filename){
			header('Content-Type: text/csv');
			header('Content-Disposition: attachement; filename="'.$filename.'.xls"');
			$i=0;
			foreach($datas as $v){
					
					if($i==0){
						echo '"'.implode('";"',array_keys($v)).'"'."\n";
					}
					echo '"'.implode('";"',$v).'"'."\n";
					$i++;
				
			}
		
	}
	
}
?>