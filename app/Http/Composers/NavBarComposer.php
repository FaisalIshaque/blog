<?php

namespace App\Http\Composers;

use Illuminate\Contracts\View\View;

use App\article;

class NavBarComposer
{
    public function compose(View $view)
    {
        $view->with('latest', article::latest('published_at')->published()->first());
    }

    
}
