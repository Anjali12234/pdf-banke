<?php

namespace App\Http\Livewire;

use App\Models\OfficeHeader;
use Livewire\Component;

class OfficeHeaderLivewire extends Component
{
    public $officeHeaders = [[]];

    public function mount()
    {
    }

    protected  $rules =    [
        "officeHeaders" => ["required", "array"],
        "officeHeaders.*.title" => ["required", 'string', "max:255"],
        "officeHeaders.*.english_title" => ["required", 'string', "max:255"],
        "officeHeaders.*.font_size" => ["required"],
        "officeHeaders.*.font-family" => ["required"],
        "officeHeaders.*.font-color" => ["required"],
        "officeHeaders.*.position" => ["required"],
    ];



    public function addOfficeHeader()
    {
        $this->officeHeaders[] = [];
    }

    public function removeOfficeHeader($index)
    {
        unset($this->officeHeaders[$index]);
        $this->officeHeaders = array_values($this->officeHeaders);
    }


    public function save()
    {
        $this->validate();
    
        // dd($this->officeHeaders);
    }


    public function render()
    {
        return view('livewire.office-header-livewire');
    }
}
