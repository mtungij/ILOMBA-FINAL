<?php

namespace App\Livewire\Pages;

use App\Models\Customer;
use Livewire\Component;
use Livewire\WithFileUploads;

class Members extends Component
{

    use WithFileUploads;

    public $fname;
    public $lname;
    public $nickname;
    public $address;
    public $phone = '255';
    public $gender;
    public $img;

    protected $rules = [
        'fname' => 'required|string|max:255',
        'lname' => 'required|string|max:255',
        'nickname' => 'required|string|max:255',
        'address' => 'required|string|max:255',
        'phone' => ['required', 'regex:/^255\d{9}$/'],
        'gender' => 'required|string',
        'img' => 'nullable|file|mimes:svg,png,jpg,gif|max:1024',
    ];


protected $messages = [
    'fname.required' => 'Tafadhari Jaza Jina La Kwanza.',
    'lname.required' => 'Tafadhari Jaza Jina La Mwisho.',
    'nickname.required'=> 'Jina maaarufu ni lazima kujazwa',
    'address.required'=> 'Makazi ya anayesajiliwa ni lazima yajazwe',
    'phone.regex' => 'Namba ya simu lazima ianze na "255" na iwe na jumla ya tarakimu 12.',
    'gender.required' => 'Jinsia ya Anayesajiliwa ni ya lazima',
];

    public function save()
    {
        $this->validate();

        $filePath = $this->img ? $this->img->store('uploads', 'public') : 'uploads/default.png';

        Customer::create([
            'fname' => $this->fname,
            'lname' => $this->lname,
            'nickname' => $this->nickname,
            'address' => $this->address,
            'phone' => $this->phone,
            'gender' => $this->gender,
            'file_path' => $filePath,
        ]);

        session()->flash('message', 'Member successfully registered.');

        
        $this->reset();
    }
    public function render()
    {
        return view('livewire.pages.members');
    }
}
