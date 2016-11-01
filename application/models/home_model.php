<?php
class Home_model extends CI_Model 
{
	public function getNames()
	{
		$name=array(
			  array('en'=> 'Liisa','sn'=>'Joki'),
			  array('en'=> 'Martti','sn'=>'Kola'),
			  array('en'=> 'Simo','sn'=>'Davidson')
			  );

		return $name;
	}
}