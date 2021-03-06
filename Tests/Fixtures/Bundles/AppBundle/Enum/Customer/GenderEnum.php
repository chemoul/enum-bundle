<?php

namespace AppBundle\Enum\Customer;

use Yokai\EnumBundle\Enum\EnumInterface;

/**
 * @author Yann Eugoné <eugone.yann@gmail.com>
 */
class GenderEnum implements EnumInterface
{
    public function getChoices()
    {
        return ['male' => 'Male', 'female' => 'Female'];
    }

    public function getName()
    {
        return 'gender';
    }
}
