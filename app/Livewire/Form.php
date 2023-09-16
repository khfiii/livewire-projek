<?php

namespace App\Livewire;

use Livewire\Component;

class Form extends Component {

    public $name;
    public $email;
    public $password;

    public $message;

    public function submit() {
        $validatedData = $this->validate( [
            'name' => 'min:6',
            'email' => 'required|email',
            'password' => 'required'
        ] );

    }

    public function updated( $propertyName ) {
        $this->validateOnly( $propertyName, [
            'name' => 'min:6',
            'email' => 'required|email',
            'password' => 'required'
        ] );
    }

}
