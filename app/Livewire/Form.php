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


    public function submit() {
        $data = $this->validate();

        User::create( $data );

    }

    public function delete($id){
        $user = User::findOrFail($id);

        // $this->authorize('delete', $user);

        $user->delete();
    }

    public function update($id)
    {


        $user = User::findOrFail($id);
    }

    public function select($id)
    {


        $user = User::findOrFail($id);

        $this->name = $user->name;
        $this->email = $user->email;
        $this->password = $user->password;

    }






}
