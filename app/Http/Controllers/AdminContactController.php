<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminContactController extends CBController {


    public function cbInit()
    {
        $this->setTable("contact");
        $this->setPermalink("contact");
        $this->setPageTitle("Contact");

        $this->addDatetime("Created At","created_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addDatetime("Updated At","updated_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addText("Message","message")->strLimit(150)->maxLength(255);
		$this->addText("Name","name")->strLimit(150)->maxLength(255);
		$this->addEmail("Address","address");
		$this->addText("Subject","subject")->strLimit(150)->maxLength(255);
		

    }
}
