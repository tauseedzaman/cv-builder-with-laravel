<?php

namespace App\Http\Livewire\LeftSideBar;

use Livewire\Component;
use Intervention\Image\ImageManagerStatic;
use Livewire\WithFileUploads;
use App\Models\photo as photoModel;
use Illuminate\Support\Facades\Storage;

class Photo extends Component
{
    use WithFileUploads;

    public $photo;

    public function save_profile_photo()
    {
        $this->validate([
            'photo' => 'required|image|mimetypes:png,jpg,jpeg',
            ]);

        photo::create([
            "photo" => $this->storePhoto($this->photo),
            "user_id" => auth()->id()
        ]);

        unset($this->photo);

    }

    public function storeImage($image)
    {
        if (!$image) {
            return null;
        }
        $imag   = ImageManagerStatic::make($image)->encode('png');
        $name  = Str::random() . '.png';
        Storage::disk('public')->put($name, $imag);
        return $name;
    }


    public function render()
    {
        return view('livewire.left-side-bar.photo');
    }
}
