<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;

class PostPolicy
{
    public function view(User $user, Post $post): bool
    {
        //return true if the post belongs to this user same also to $post->user_id === $user->id
        return $post->user->is($user);
    }

    public function edit(User $user, Post $post): bool
    {
        return $post->user->is($user);
    }

    public function destroy(User $user, Post $post): bool
    {
        return $post->user->is($user);
    }
}
