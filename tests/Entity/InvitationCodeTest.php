<?php

namespace App\Tests\Entity;


use DateTime;
use App\Entity\InvitationCode;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class InvitationCodeTest extends KernelTestCase
{
    public function testValidEntity() {
        $code = ( new InvitationCode() );
            $code->setcode('12345');
            $code->setdescription("Ceci est une description valide Wallah");
            $code->setExpireAt(new \DateTime());
        self::bootKernel();
        $container = static::getContainer();
        $errors = $container->get('validator')->validate($code);
        $this->assertCount(0, $errors);
    }
}