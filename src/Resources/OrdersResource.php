<?php
/**
 * Created by PHPStorm.
 * User: Serhii Kondratovec
 * Email: sergey@spheremall.com
 * Date: 13.10.2017
 * Time: 19:10
 */

namespace SphereMall\MS\Resources;

class OrdersResource extends Resource
{
    #region [Override methods]
    public function getURI()
    {
        return "orders";
    }
    #endregion

}