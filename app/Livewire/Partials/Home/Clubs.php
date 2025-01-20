<?php

namespace App\Livewire\Partials\Home;

use Livewire\Component;

class Clubs extends Component
{
    public $clubs = [];

    public function mount(){
        $this->clubs = [
            [
                'logo' => asset('images/club/ric.jpg'),
                'short_name' => 'RIC',
                'full_name' => 'Research and Innovation Center',
                'description' => 'At RIC FEC, we cultivate a culture of innovation, motivation, and leadership among engineers and aspiring researchers.',
                'url' => route('single-club', ['name' => 'ric']),
            ],
            [
                'logo' => asset('images/BytesBinary.png'),
                'short_name' => 'FECCPC',
                'full_name' => 'FEC Cyber Protector Club',
                'description' => 'This is a honourable club of Faridpur Engineering College. Please explore it by clicking the explore button.',
                'url' => route('single-club', ['name' => 'feccpc']),
            ],
            [
                'logo' => asset('images/club/fecsa.jpg'),
                'short_name' => 'FECSA',
                'full_name' => 'FEC Sports Association',
                'description' => 'This is a honourable club of Faridpur Engineering College. Please explore it by clicking the explore button.',
                'url' => route('single-club', ['name' => 'fecsa']),
            ],
            [
                'logo' => asset('images/club/photography.jpg'),
                'short_name' => 'FECPC',
                'full_name' => 'FEC Photographic Club',
                'description' => 'This is a honourable club of Faridpur Engineering College. Please explore it by clicking the explore button.',
                'url' => route('single-club', ['name' => 'feccpc']),
            ],
            [
                'logo' => asset('images/club/programming.jpg'),
                'short_name' => 'FECPC',
                'full_name' => 'FEC Programming Club',
                'description' => 'This is a honourable club of Faridpur Engineering College. Please explore it by clicking the explore button.',
                'url' => route('single-club', ['name' => 'fecpc2']),
            ],
            [
                'logo' => asset('images/BytesBinary.png'),
                'short_name' => 'FECSDC',
                'full_name' => 'FEC Software Development Club',
                'description' => 'This is a honourable club of Faridpur Engineering College. Please explore it by clicking the explore button.',
                'url' => '#',
            ],
            [
                'logo' => asset('images/club/fecrdc.jpg'),
                'short_name' => 'FECIDRC',
                'full_name' => 'FEC Islamic Dawah and Research Center',
                'description' => 'This is a honourable club of Faridpur Engineering College. Please explore it by clicking the explore button.',
                'url' => route('single-club', ['name' => 'islamic-dawah']),
            ],
            [
                'logo' => asset('images/club/professionals.jpg'),
                'short_name' => 'FECCP',
                'full_name' => 'FEC Club of Professionals',
                'description' => 'This is a honourable club of Faridpur Engineering College. Please explore it by clicking the explore button.',
                'url' => route('single-club', ['name' => 'professionals']),
            ],
            [
                'logo' => asset('images/BytesBinary.png'),
                'short_name' => 'FECBAC',
                'full_name' => 'FEC Bani Archana Committee',
                'description' => 'This is a honourable club of Faridpur Engineering College. Please explore it by clicking the explore button.',
                'url' => route('single-club', ['name' => 'bani-archana']),
            ],
            [
                'logo' => asset('images/BytesBinary.png'),
                'short_name' => 'FECRSG',
                'full_name' => 'FEC Rover Scout Group',
                'description' => 'This is a honourable club of Faridpur Engineering College. Please explore it by clicking the explore button.',
                'url' => route('single-club', ['name' => 'fecrsg']),
            ],
        ];

    }
    public function render()
    {
        return view('livewire.partials.home.clubs');
    }
}
