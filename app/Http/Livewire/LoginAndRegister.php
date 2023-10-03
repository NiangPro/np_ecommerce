<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LoginAndRegister extends Component
{
    public $form = [
        "email",
        "password",
        "password_confirmation",
        "prenom",
        "nom",
        "tel",
        "adresse",
        "role",
    ];

    protected $messages = [
        "form.email.required" => "L'email est requis",
        "form.email.unique" => "L'email existe déjà",
        "form.password.required" => "Le mot de passe est requis",
        "form.password_confirmation.required" => "Le mot de passe de confirmation est requis",
        "form.password.confirmed" => "Les deux mots de passe sont différents",
        "form.prenom.required" => "Le prenom est requis",
        "form.nom.required" => "Le nom est requis",
        "form.tel.required" => "Le numero de telephone est requis",
        "form.tel.regex" => "Le numero de telephone est invalide",
        "form.adresse.required" => "L'adresse est requise",
    ];

    public function login()
    {
        $this->validate([
            "form.email" => "required",
            "form.password" => "required",
        ]);

        if (Auth::attempt(["email" => $this->form["email"],"password" =>$this->form["password"]])) {
            return redirect(route("dashboard"));
        }else {
            $this->dispatchBrowserEvent("badConnection");
        }
    }

    public function register()
    {
        $this->validate([
            'form.prenom' => 'required|string',
            'form.nom' => 'required|string',
            'form.adresse' => 'required|string',
            'form.current_password' => 'required',
            'form.tel' => ['required', 'min:9', 'max:9', 'regex:/^[33|70|75|76|77|78]+[0-9]{7}$/'],
            'form.email' => ['required', 'email', 'unique:users,email'],
            'form.password' => 'required|string|min:6|confirmed',
            'form.password_confirmation' => 'required',
        ]);
    }

    public function render()
    {
        return view('livewire.frontend.login-and-register')->layout("layouts.app");
    }
}
