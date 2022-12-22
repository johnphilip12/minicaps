<?php

namespace App\Http\Livewire\Motors;

use App\Events\UserLog;
use App\Models\Motor;
use Livewire\Component;

class Edit extends Component
{

    public $motorId;
    public $motor_name, $motor_brand, $price, $color;
    public function mount() {
        $this->motor_name = $this->motor->motor_name;
        $this->motor_brand = $this->motor->motor_brand;
        $this->price = $this->motor->price;
        $this->color = $this->motor->color;

    }

    public function editmotor() {
        $this->validate([
            'motor_name'             =>          ['required', 'string', 'max:255'],
            'motor_brand'            =>          ['required', 'string', 'max:255'],
            'price'                =>          ['required', 'string', 'max:255'],
            'color'                =>          ['required', 'string', 'max:255'],
        ]);

        $this->motor->update([
            'motor_name'             =>      $this->motor_name,
            'motor_brand'            =>      $this->motor_brand,
            'price'                =>      $this->price,
            'color'                =>      $this->color,
        ]);

        $log_entry = 'Update motor: "' .$this->motor->motor_name . '" with and ID: ' . $this->motor->id;
        event(new UserLog($log_entry));

        return redirect('/motor')->with('motor', 'Updated Successfully');
    }

    public function back() {
        return redirect('/motor');
    }
    public function getmotorProperty() {
        return motor::find($this->motorId);
    }

    public function render()
    {
        return view('livewire.motors.edit');
    }
}
