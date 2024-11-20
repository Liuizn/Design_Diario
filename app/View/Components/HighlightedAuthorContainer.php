<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HighlightedAuthorContainer extends Component
{

    public $authorName;
    public $authorDescription;
    public $authorProfileLink;
    public $authorProfilePic;
    public $authorFollowersData;
    public $authorVerifiedArticlesData;

    /**
     * Create a new component instance.
     */
    public function __construct($authorName, $authorDescription, $authorProfileLink, $authorProfilePic, $authorFollowersData, $authorVerifiedArticlesData)
    {
        $this->authorName = $authorName;
        $this->authorDescription = $authorDescription;
        $this->authorProfileLink = $authorProfileLink;
        $this->authorProfilePic = $authorProfilePic;
        $this->authorFollowersData = $authorFollowersData;
        $this->authorVerifiedArticlesData = $authorVerifiedArticlesData;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.highlighted-author-container');
    }
}
