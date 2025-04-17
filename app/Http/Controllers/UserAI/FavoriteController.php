<?php

namespace App\Http\Controllers\UserAI;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserAI\EngineerFavorite;
use App\Models\UserAI\Prompt;
use App\Models\UserAI\PromptFavorite;
use App\Models\UserAI\ToolFavorite;
use App\Models\UserAI\UserFavorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FavoriteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $users = User::all();
        $prompt = Prompt::all();


        return view('auth.userAI.favorites.index', compact('users', 'prompt', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = UserFavorite::where('fav_id', $request->fav_id)->where('user_id', $request->user_id)->get();
        $prompt = PromptFavorite::where('prompt_id', $request->prompt_id)->where('user_id', $request->user_id)->get();
        $tool = ToolFavorite::where('tool_id', $request->tool_id)->where('user_id', $request->user_id)->get();
        $engineer = EngineerFavorite::where('engineer_id', $request->engineer_id)->where('user_id', $request->user_id)->get();

        if ($request->prompt_id) {
            if (count($prompt) == 0) {
                PromptFavorite::create([
                    'prompt_id' => $request->prompt_id,
                    'user_id' => $request->user_id
                ]);
                return redirect()->back();
            } else {
                PromptFavorite::where('prompt_id', $request->prompt_id)->where('user_id', $request->user_id)->delete();
                return redirect()->back();
            }
            return redirect()->back();
        } else if ($request->fav_id) {
            if (count($user) == 0) {
                UserFavorite::create([
                    'fav_id' => $request->fav_id,
                    'user_id' => $request->user_id
                ]);
                return redirect()->back();
            } else {
                UserFavorite::where('fav_id', $request->fav_id)->where('user_id', $request->user_id)->delete();
                return redirect()->back();
            }
        } else if ($request->tool_id) {
            if (count($tool) == 0) {
                ToolFavorite::create(['tool_id' => $request->tool_id, 'user_id' => $request->user_id]);
                return redirect()->back();
            } else {
                ToolFavorite::where('tool_id', $request->tool_id)->where('user_id', $request->user_id)->delete();
                return redirect()->back();
            }
        } else if ($request->engineer_id) {
            if (count($engineer) == 0) {
                EngineerFavorite::create(['engineer_id' => $request->engineer_id, 'user_id' => $request->user_id]);
                return redirect()->back();
            } else {
                EngineerFavorite::where('engineer_id', $request->engineer_id)->where('user_id', $request->user_id)->delete();
                return redirect()->back();
            }
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
 * Remove the specified resource from storage.
 */
    public function destroy($id)
    {
    // Assuming $id is the ID of the favorite to be removed

    $promptFavorite = PromptFavorite::find($id);
    $userFavorite = UserFavorite::find($id);
    $toolFavorite = ToolFavorite::find($id);
    $engineerFavorite = EngineerFavorite::find($id);

    

    if ($promptFavorite) {
        $promptFavorite->delete();
    } elseif ($userFavorite) {
        $userFavorite->delete();
        

    } elseif ($toolFavorite) {
        $toolFavorite->delete();
    } elseif ($engineerFavorite) {
        $engineerFavorite->delete();
    }

    return redirect()->back();
    }


    /**
     * Remove the specified resource from storage.
     */
}
