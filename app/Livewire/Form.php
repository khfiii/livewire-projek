<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Rule;

class Form extends Component {

    #[ Rule( 'required', message: 'Nama wajib diisi' ) ]
    public ?string $name = null;

    #[ Rule( 'required', message: 'Email wajib diisi' ) ]
    public ?string $email = null;

    #[ Rule( 'required', message: 'Password wajib diisi' ) ]
    public ?string $password = null;

    public ?string $search = null;

    public ?string $notFoundMessage = null;

    public function submit() {
        $data = $this->validate();

        User::create( $data );

    }

    public function render() {

        $users = User::all();

        if ( $this->search !== null ) {
            $users = User::where( 'name', 'like', '%'.$this->search.'%' )->get();
        } elseif ( $users->isEmpty() ) {
            $this->notFoundMessage = 'User not found';
        }

        return view( 'livewire.form', [
            'users' => $users,
        ] );
    }

}
