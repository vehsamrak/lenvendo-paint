<?php

namespace Lenvendo\Canvas\Controller;

use yii\web\Controller;

abstract class AbstractController extends Controller
{

    protected function respondJson($data): string
    {
        return json_encode($data);
    }
}
