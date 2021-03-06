<?php

namespace cmsadmin\controllers;

use cmsadmin\models\Log;

class DefaultController extends \admin\base\Controller
{
    public function actionIndex()
    {
        $data = Log::find()->where(['!=', 'user_id', 0])->orderBy(['timestamp' => SORT_DESC])->limit(40)->all();
        $groups = [];
        foreach ($data as $item) {
            $groups[strtotime('today', $item->timestamp)][] = $item;
        }
        return $this->renderPartial('index', [
            'groups' => $groups,
        ]);
    }
}
