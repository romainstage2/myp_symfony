<?php

namespace App\Controller\Admin;

use App\Entity\User;

use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;

class UsersCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('last_name'),
            TextField::new('first_name'),
            TextField::new('email'),
            TextField::new('password'),
            IntegerField::new('phone'),
            TextField::new('linkedin'),
            TextField::new('github'),
            TextField::new('avatar'),
        ];
    }
}
