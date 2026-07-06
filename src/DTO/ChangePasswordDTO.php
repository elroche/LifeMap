<?php

namespace App\DTO;

class ChangePasswordDTO
{
    public ?string $plainPassword = null;

    //#[Assert\NotBlank]
    public ?string $currentPassword = null;
}