<?php

namespace App\Helpers;

use App\Models\User;
use App\Models\UserAI\Prompt;
use App\Models\UserAI\PromptSpace;
use App\Models\UserAI\Tag;
use Illuminate\Support\Facades\DB;

class Functions
{
    public static function getPromptUser($id)
    {
        $promptUser = User::where('id', $id)->first();
        return $promptUser;
    }

    public static function getPromptSpace($id)
    {
        $promptSpace = User::findOrFail($id);
        $ids = $promptSpace->promptUsers->pluck('prompt_space_id');
        $spaces = [];
        foreach ($ids as $id) {
            array_push($spaces, PromptSpace::where('id', $id)->get(['name'])->pluck('name'));
        }
        return $spaces;
    }

    public static function getUsers()
    {
        $usersIds = [];
        $tagsIds = DB::table('tags_users')->distinct()->get(['user_id'])->pluck('user_id');
        $promptsIds = DB::table('prompts_users')->distinct()->get(['user_id'])->pluck('user_id');
        $promptSpacesIds = DB::table('prompt_spaces_users')->distinct()->get(['user_id'])->pluck('user_id');

        if (!in_array($tagsIds, $usersIds)) {
            array_push($usersIds, $tagsIds);
        }

        if (!in_array($promptsIds, $usersIds)) {
            array_push($usersIds, $promptsIds);
        }

        if (!in_array($promptSpacesIds, $usersIds)) {
            array_push($usersIds, $promptSpacesIds);
        }

        if (count($usersIds[0]) > 0) {
            $users = User::whereIn('id', $usersIds)->get();
            return $users;
        }
    }

    public static function getPromptSpaceTag($id)
    {
        $result = [];

        array_push($result, Tag::all()->whereIn('id', DB::table('tags_users')->where('user_id', $id)->pluck('tag_id')));
        array_push($result, Prompt::all()->whereIn('id', DB::table('prompts_users')->where('user_id', $id)->pluck('prompt_id')));
        array_push($result, PromptSpace::all()->whereIn('id', DB::table('prompt_spaces_users')->where('user_id', $id)->pluck('prompt_space_id')));

        return $result;
    }
}
