<?php

namespace App\Helpers;

use App\Models\User;
use Illuminate\Support\Facades\DB;

class SearchHelpers
{
    public static function getTagsCount($id)
    {
        $tagsCount = DB::table('tags')->where('user_id', $id)->count();
        return $tagsCount;
    }
    public static function getSpacesCount($id)
    {
        $spacesCount = DB::table('prompt_spaces')->where('user_id', $id)->count();
        return $spacesCount;
    }
    public static function getPromptCount($id)
    {
        $promptCount = DB::table('prompts')->where('user_id', $id)->count();
        return $promptCount;
    }
    public static function getTagsSpacesCount($id)
    {
        $tagsCount = DB::table('prompt_spaces_tag')->where('prompt_spaces_id', $id)->count();
        return $tagsCount;
    }

    public static function getPromptSpacesUserCount($id)
    {
        $promptsCount = DB::table('prompt_spaces_users')->where('prompt_space_id', $id)->count();
        return $promptsCount;
    }

    public static function getPromptSpacesCount($id)
    {
        $promptsCount = DB::table('prompt_spaces_prompt')->where('prompt_spaces_id', $id)->count();
        return $promptsCount;
    }

    public static function getPromptTagsCount($id)
    {
        $promptTagsCount = DB::table('prompt_tag')->get();
        $tagSpace = DB::table('prompt_spaces_tag')->get();
        $count = [];

        foreach($promptTagsCount as $prompt){
            foreach($tagSpace as $tag){
                if($prompt->tag_id == $tag->tag_id && $tag->prompt_spaces_id == $id){
                    array_push($count, $prompt);
                }
            }
        }
        return count($count);
    }
}
