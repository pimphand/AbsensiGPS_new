<?php

namespace App\Policies;

use App\Models\Karyawan;
use App\Models\Sdgs;
use Illuminate\Auth\Access\Response;

class SdgsPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(Karyawan $karyawan): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(Karyawan $karyawan, Sdgs $sdgs): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(Karyawan $karyawan): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(Karyawan $karyawan, Sdgs $sdgs): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(Karyawan $karyawan, Sdgs $sdgs): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(Karyawan $karyawan, Sdgs $sdgs): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(Karyawan $karyawan, Sdgs $sdgs): bool
    {
        //
    }
}
