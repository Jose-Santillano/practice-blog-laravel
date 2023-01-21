<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Post;

class LatestPosts extends Component
{
    //Toda variable publica puede usarse en el view.
    public $posts;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($number)
    {
        //Obtenemos la información de la base de datos
        $this->posts= Post::orderBy('created_at', 'DESC')
            ->take($number)
            ->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.latest-posts');
    }
}
