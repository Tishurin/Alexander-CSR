<?php

//******************************************************************************
class PageFile extends DActiveRecord
//******************************************************************************
{
	//----------------------------------------------------------------------------
	public function attributeLabels()
	//----------------------------------------------------------------------------  
	{
		return array();
	}

	//----------------------------------------------------------------------------
	public function rules()
	//----------------------------------------------------------------------------	
	{
		return array(
				array('id_file, id_page', 'length', 'max'=>10),
			);
	}

	//----------------------------------------------------------------------------
	public function relations()
	//----------------------------------------------------------------------------
	{
		// ВНИМАНИЕ: уточните имя связи
		return array(
		);
	}

	public static function model($className=__CLASS__) {return parent::model($className);}
	public function tableName() {return 'tbl_pages_files';}
}