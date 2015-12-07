<?php 

namespace Helpers\Traits;

trait ControllerResultLimits
{
    public function setResponseLimitsToModel($model)
    {
        $model->setLimit($this->getRequestLimit());
        $model->setOffset($this->getRequestOffset());
    }
}