<?php

namespace App\Http\Livewire;

use LivewireUI\Modal\ModalComponent;

class CreateLink extends ModalComponent
{
    public function render()
    {
        return view('livewire.create-link');
    }
}
