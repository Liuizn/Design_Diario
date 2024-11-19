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
    public $fullWidth = "false";

    /**
     * Create a new component instance.
     */
    public function __construct($postImageCover, $postTitle, $authorName, $authorProfilePic, $postUrl, $fullWidth)
    {
        $this->postImageCover = $postImageCover;
        $this->postTitle = $postTitle;
        $this->authorName = $authorName;
        $this->authorProfilePic = $authorProfilePic;
        $this->postUrl = $postUrl;
        $this->fullWidth = $fullWidth;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.post-card');
    }
}
