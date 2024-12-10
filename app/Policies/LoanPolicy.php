<?php

namespace App\Policies;

use App\Models\Loan;
use App\Models\User;

class LoanPolicy
{
    /**
     * Determine if the given loan can be updated by the user.
     */
    public function update(User $user, Loan $loan)
    {
        // Hanya pemilik peminjaman yang dapat mengakses
        return $user->id === $loan->user_id;
    }
}
