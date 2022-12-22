<?php

namespace App\Http\Livewire\Motors;

use App\Events\UserLog;
use Livewire\Component;
use App\Models\Motor;

class Create extends Component
{
    public $motor_name, $motor_brand, $price, $color;

    public function addmotor() {
        $this->validate([
            'motor_name'             =>          ['required', 'string', 'max:255'],
            'motor_brand'            =>          ['required', 'string', 'max:255'],
            'price'                =>          ['required', 'string', 'max:255'],
            'color'                =>          ['required', 'string', 'max:255'],
        ]);

        motor::create([
            'motor_name'             =>      $this->motor_name,
            'motor_brand'            =>      $this->motor_brand,
            'price'                =>      $this->price,
            'color'                =>      $this->color,
        ]);

        $log_entry = 'Added motor ' .$this->motor_name;
        event(new UserLog($log_entry));

        return redirect('/motor')->with('motor', 'Added Successfully');
    }

   


    public function render()
    {
        return view('livewire.motors.create');
    }
}
