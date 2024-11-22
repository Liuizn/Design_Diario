<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CategoryCard extends Component
{

    public $categoryName;
    public $categoryImage;

    public function __construct($categoryName, $categoryImage)
    {
        $this->categoryName = $categoryName;
        $this->categoryImage = $categoryImage;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.category-card');
    }
}
