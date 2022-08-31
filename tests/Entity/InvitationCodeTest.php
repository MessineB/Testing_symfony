<?php

namespace App\Tests\Entity;


use DateTime;
use App\Entity\InvitationCode;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class InvitationCodeTest extends KernelTestCase
{
    public function testValidEntity() {
        $code = ( new InvitationCode() );
            $code->setcode('12345');
            $code->setdescription('Ceci est une description valide Wallah');
            $code->setExpireAt(new \DateTime());
        self::bootKernel();
        $error = self::$container->get('validator')->validate($code);
        $this->asserCount(0, $error);
    }
}