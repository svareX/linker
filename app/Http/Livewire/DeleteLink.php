<?php

namespace App\Http\Livewire;

use App\Models\Link;
use LivewireUI\Modal\ModalComponent;

class DeleteLink extends ModalComponent
{
    public Link $link;

    public function render()
    {
        return view('livewire.delete-link');
    }
}
