<?php

class m140819_062044_insert_settings extends CDbMigration
{
	public function safeUp()
	{
        $this->insert('settings',array(
            'name'=>'title',
            'value'=>'English'
        ));
        $this->insert('settings',array(
            'name'=>'under_title',
            'value'=>'To learn English is the best Way to know the world'
        ));
        $this->insert('settings',array(
            'name'=>'phone',
            'value'=>'8-044-716-10-11'
        ));
        $this->insert('settings',array(
            'name'=>'email',
            'value'=>'vicusha7@rambler.ru'
        ));
	}

	public function safeDown()
	{
		$this->delete('settings',
            "name=:name",
            array(':name'=>'title')
        );
        $this->delete('settings',
            "name=:name",
            array(':name'=>'under_title')
        );
        $this->delete('settings',
            "name=:name",
            array(':name'=>'phone')
        );
        $this->delete('settings',
            "name=:name",
            array(':name'=>'email')
        );
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}