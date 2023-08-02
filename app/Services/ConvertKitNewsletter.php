<?php

namespace App\Services;

use MailchimpMarketing\ApiClient;

class ConvertKitNewsletter implements Newsletter
{
    /**
     * Subscribe the user with ConvertKit-specific
     * Api request
     */
    public function subscribe(String $email, string $list = null)
    {
        
    }
}