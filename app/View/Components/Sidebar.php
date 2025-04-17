<?php

namespace App\View\Components;

 
use App\Models\UserAI\PromptSpace;
use App\Models\UserAI\Tag;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Sidebar extends Component
{
    public $promptSpace;
    public $spaces;
    public $sidebar;
    public $tag_name;
    public $sideTag;
    public $tags;
     
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $user = Auth::User();

        $tags = Tag::where('user_id', $user->id)->get();

        $this->tags = Tag::where('user_id', $user->id)->get();
         
        $this->tag_name = $tags->pluck('name')->toArray();

        $this->promptSpace = PromptSpace::where('user_id', $user->id)->get();
        $this->sidebar = PromptSpace::where('user_id', $user->id)->get();

        $this->sideTag = DB::table('prompt_spaces_tag')->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sidebar');
    }
}
