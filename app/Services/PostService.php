<?php
namespace App\Services;

use App\Traits\ConsumeExternalService;

class PostService {
    
    use ConsumeExternalService;

    public $baseUrl;

    public $secret;

    public function __construct()
    {
        $this->baseUrl = config('services.post.base_url');
        $this->secret = config('services.post.secret');
    }

    public function obtainPosts() {
        return $this->performRequest('GET', 'posts');
    }
}