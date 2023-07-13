<?php

namespace App\Http\Livewire;

use App\Models\Link;
use LivewireUI\Modal\ModalComponent;

class EditLink extends ModalComponent
{
    public Link $link;

    public function render()
    {
        return view('livewire.edit-link');
    }
}
