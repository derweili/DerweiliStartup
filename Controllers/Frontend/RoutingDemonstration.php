<?php

class Shopware_Controllers_Frontend_RoutingDemonstration extends Enlight_Controller_Action
{
    public function preDispatch()
    {
        if($this->Request()->getActionName() == 'index' && !$this->get('session')->get('sUserId')){
            $this->redirect([
               'controller' => 'account',
               'action' => 'login',
               'sTarget' => 'RoutingDemonstration',
               'sTargetAction' => $this->Request()->getActionName()
            ]);
        }
    }

    public function indexAction() {
        $this->view->assign('nextAction', 'foo');
    }

    public function fooAction(){
        $this->view->assign('nextAction', 'index');
    }

    public function postDispatch()
    {
        $currentAction = $this->Request()->getActionName();
        $this->view->assign('currentAction', $currentAction);
    }

}