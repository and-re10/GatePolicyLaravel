<?php

namespace App\Policies;

use App\User;
use Auth;

use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\user  $model
     * @return mixed
     */
    public function view(User $user, user $model)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\user  $model
     * @return mixed
     */
    public function update(User $user, $users)
    {
        //La meme chose que pour les gates, je compare l'id de l'utilisateur connecté avec l'id de l'utilisateur affiché 
        //Rajout de la condition que su le role de l'utilisateur connecté est egal a admin, il a le pouvoir de voir les boutons edit et delete
        return $user->id === $users->id || $user->role === "admin";
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\user  $model
     * @return mixed
     */
    public function delete(User $user, $users)
    {
        //La meme chose que pour les gates, je compare l'id de l'utilisateur connecté avec l'id de l'utilisateur affiché 
        return $user->id === $users->id || $user->role === "admin";
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\user  $model
     * @return mixed
     */
    public function restore(User $user, user $model)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\user  $model
     * @return mixed
     */
    public function forceDelete(User $user, user $model)
    {
        //
    }
}
