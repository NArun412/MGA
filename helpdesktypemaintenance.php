<?php

/*	This software is the unpublished, confidential, proprietary, intellectual
	property of Kim David Software, LLC and may not be copied, duplicated, retransmitted
	or used in any manner without expressed written consent from Kim David Software, LLC.
	Kim David Software, LLC owns all rights to this work and intends to keep this
	software confidential so as to maintain its value as a trade secret.

	Copyright 2004-Present, Kim David Software, LLC.

	WARNING! This code is part of the Kim David Software's Coreware system.
	Changes made to this source file will be lost when new versions of the
	system are installed.
*/

$GLOBALS['gPageCode'] = "HELPDESKTYPEMAINT";
require_once "shared/startup.inc";

class ThisPage extends Page {
	function massageDataSource() {
		$this->iDataSource->getPrimaryTable()->setSubtables(array("help_desk_type_notifications","help_desk_type_categories"));
		$this->iDataSource->addColumnControl("email_address","help_label","Emails sent to this address will be created as tickets with this type");
        $this->iDataSource->addColumnControl("email_credential_id","help_label","For sending and receiving emails");
        $this->iDataSource->addColumnControl("help_desk_type_id","help_label","Automatically assign tickets of this type to this user group");
	}
}

$pageObject = new ThisPage("help_desk_types");
$pageObject->displayPage();
