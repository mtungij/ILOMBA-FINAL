<?php

namespace App\Livewire\Pages;

use App\Models\Customer;

use Livewire\Attributes\Rule;
use Livewire\Component;


class Members extends Component
{

    

    #[Rule("required")]
    public $fname;
    #[Rule("required")]
    public $lname;
    #[Rule("required")]
    public $nickname;
    #[Rule("required")]
    public $address;

    #[Rule("required","regex:/^255\d{9}$/")]

    public $phone = '255';
    #[Rule('required')]
    public $gender;

    public function save()
    {
        $validated=$this->validate();

        $existedmember =Customer ::where('fname',$validated['fname'])
                                 ->where('lname',$validated['lname'])
                                  ->first();

                                  if($existedmember){
    
                                    $this->alert(
                                        'success',
                                        'Example of notification.',
                                        );
                                        
        return;

                                  }

       

        Customer::create($validated);

      
            

        
        // $this->reset();
    }
    public function render()
    {
        return view('livewire.pages.members');
    }
}
