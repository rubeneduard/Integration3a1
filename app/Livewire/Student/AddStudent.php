<?php

namespace App\Livewire\Student;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use App\Models\Students;
use Str;
class AddStudent extends Component
{
    use LivewireAlert;
    public $FirstName;
    public $MiddleName;
    public $LastName;
    public $Suffix;
    public $DateofBirth;
    public $Address;


    public function render()
    {
        return view('livewire.student.add-student');
    }

    public function saveStudent() {
        $this->validate([
            'FirstName' =>'required',
            'LastName' =>'required',
            'DateofBirth' =>'required',
            'Address' =>'required',
        ],[
            'FirstName.required' => 'First Name is required',
            'LastName.required' => 'Last Name is required',
            'DateofBirth.required' => 'Date of Birth is required',
            'Address.required' => 'Address is required',
        ]);
        $count = Students::count();

        $checkIfExist = Students::where('FirstName', $this->FirstName)
            ->where('LastName', $this->LastName) 
            ->where('MiddleName', $this->MiddleName)
            ->exists(); 


        if(!$checkIfExist){
            $b = new Students();
            $b->StudentID = date('Y').'-000'.$count + 1;
            $b->FirstName = $this->FirstName;
            $b->MiddleName = $this->MiddleName;
            $b->LastName = $this->LastName;
            $b->Suffix = $this->Suffix;
            $b->DateofBirth = $this->DateofBirth;
            $b->Address = $this->Address;
            $b->save();
            
        if($b){
                $this->alert('success', $this->FirstName.''.$this->LastName . ' is successfully saved ', ['position' => 'center', 'toast' => false]);        
            }
        }else{
                $this->alert('error', $this->FirstName.''.$this->LastName . ' is already exist! ', ['position' => 'center', 'toast' => false]);
        }



    }
}

