<?php

namespace Arins\Helpers\Roles;

use Arins\Helpers\Roles\RolesInterface;

class Roles implements RolesInterface
{
    protected $result;
    protected $user;
    protected $userRoles;

    /**
     * Comment template.
     *
     * @param  boolean     $par1
     * @param  int         $par2
     * @param  string      $par3
     * @param  string|null $par4
     * @param  mixed|null  $par5
     * @return array|string|int|boolean
     */


    public function __construct($user, $userRoles)
    {
        $this->user = $user;
        $this->userRoles = $userRoles;
    }

    function fullControl()
    {

        if ($this->user->fullcontrol)
        {
            return true;
        }

        return false;
    }

    function only($allowRoles)
    {
        foreach ($allowRoles as $role) {
            
            foreach ($this->userRoles as $item) {
                
                if ($role == $item->code) {

                    return true;

                } //end ifs

            } //end loop

        } //end loop

        return false;
    }


}
