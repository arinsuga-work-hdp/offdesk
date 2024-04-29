<?php
namespace Arins\Helpers\Roles;

interface RolesInterface
{

    function fullControl();
    function only($allowRoles);
    
}
