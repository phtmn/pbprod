<?php

use App\Models\User;
use App\Models\UserAI\Prompt;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

if (!function_exists('getCount')) {
    function getCount($parametro) {
       return DB::table("$parametro")->count();
    }
}

if (!function_exists('getPrompt')) {
    function getPrompt() {
       return DB::table('prompts')->get();
    }
}

if (!function_exists('getPromptTag')) {
    function getPromptTag() {
        return DB::table('prompt_tag')->get();
    }
}

if (!function_exists('getTag')) {
    function getTag() {
        return DB::table('tags')->get();
    }
}

if (!function_exists('getFavorite')) {
    function getFavorite($id){
        $user = Auth::User();
        $prompt = Prompt::find($id);
        $prompt->hasFavorite;
        foreach($prompt->hasFavorite as $favorite){
            if($favorite->prompt_id == $prompt->id && $favorite->user_id == $user->id) return true;
        }
    }
}

if (!function_exists('getUserFavorite')) {
    function getUserFavorite($id){
        $user = Auth::User();
        $fav = User::find($id);
        $user->hasFavorite;
        foreach($user->hasFavorite as $favorite){
            if($favorite->fav_id == $fav->id && $favorite->user_id == $user->id) return true;
        }
    }
}
