<?php

namespace App\Http\ViewComposers;

use App\Http\Controllers\ConfigController;
use Illuminate\View\View;

class ConfigComposer
{

    /**
     * Create a movie composer.
     *
     * @return void
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $data = $this->data;
    }
}