<?php

namespace App\Services;

use MailchimpMarketing\ApiClient;

interface Newsletter 
{
    public function subscribe(String $email, string $list = null);
}