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

    public ?string $message = null;

    public function submit() {
        $data = $this->validate();

        User::create( $data );

    }

    public function render() {
        return view( 'livewire.form', [
            'users' => User::all()
        ] );
    }

}
