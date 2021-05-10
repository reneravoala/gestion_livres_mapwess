<?php

namespace App\Model;
 
use Symfony\Component\Security\Core\Validator\Constraints as SecurityAssert;
use Symfony\Component\Validator\Constraints as Assert;
 
class ChangePassword
{
    /**
     * @SecurityAssert\UserPassword(
     *     message = "Mot de passe incorrect"
     * )
     */
    protected $oldPassword;
     
    /**
     * @Assert\Length(min=8, minMessage="Veillez saisir plus de 8 caractères")
     */
    protected $password;
             
     
    function getOldPassword() {
        return $this->oldPassword;
    }
 
    function getPassword() {
        return $this->password;
    }
 
    function setOldPassword($oldPassword) {
        $this->oldPassword = $oldPassword;
        return $this;
    }
 
    function setPassword($password) {
        $this->password = $password;
        return $this;
    }
}