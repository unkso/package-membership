<?php namespace wcf\page;

use wcf\data\membership\userhistory\UserHistoryFactory;
use wcf\data\award\AwardCache;
use wcf\system\WCF;

class PersonnelOverviewPage extends AbstractPage
{
  public $activeMenuItem = 'wcf.page.personnel.overview';

  public $templateName = 'memberOverview';

  public function assignVariables() {
    parent::assignVariables();

    $history = UserHistoryFactory::makeHistory(1);
    $description = 'No Membership and User History example set';
    if (!is_null($history)) {
      $description = $history->getDescription();
    }
    
    WCF::getTPL()->assign(array(
      'historyExample' => $description,
    ));
  }
}