<?php 

namespace Helpers\Traits;

trait ModelResultLimits
{
    private $limit;
    private $offset;
    
    public function setLimit($limit)
    {
        $this->limit = $limit;
    }
    
    public function getLimit()
    {
        return $this->limit;
    }
    
    public function setOffset($offset)
    {
        $this->offset = $offset;
    }
    
    public function getOffset()
    {
        return $this->offset;
    }
    
    private function getQueryLimitByReusltLimit()
    {
        return \Helpers\Db::getLimitQuery($this->getLimit(), $this->getOffset());
    }
}