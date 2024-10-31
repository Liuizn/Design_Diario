<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PostCard extends Component
{

    public $postImageCover;
    public $postTitle;
    public $authorName;
    public $authorProfilePic;
    public $postUrl;

    /**
     * Create a new component instance.
     */
    public function __construct($postImageCover, $postTitle, $authorName, $authorProfilePic, $postUrl)
    {
        $this->postImageCover = $postImageCover;
        $this->postTitle = $postTitle;
        $this->authorName = $authorName;
        $this->authorProfilePic = $authorProfilePic;
        $this->postUrl = $postUrl;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.post-card');
    }
}
