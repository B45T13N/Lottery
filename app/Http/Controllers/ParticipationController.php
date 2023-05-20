<?php

namespace App\Http\Controllers;

use App\Models\Enum\PrizeEnum;
use App\Models\Participation;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ParticipationController extends Controller
{
    public function store(Request $request)
    {
        try
        {
            $request->validate([
                'email' => [
                    'required',
                    'email',
                    Rule::unique('participations', 'email')->whereNull('prize'),
                ],
            ], [
                'email.unique' => 'Cette adresse e-mail a déjà été utilisée pour participer.',
            ]);

            $email = $request->input('email');

            $lot = PrizeEnum::selectLot();

            $participation = new Participation();
            $participation->email = $email;
            $participation->prize = $lot;
            $participation->save();

            return redirect()->route('confirmation')->with('success', 'Félicitations, vous avez gagné : '.$lot);
        }
        catch (QueryException $e)
        {
            if ($e->getCode() === '23000')
            {
                return redirect()->back()->withInput()->withErrors(['email' => 'Cette adresse e-mail a déjà été utilisée pour participer.']);
            } else
            {
                return redirect()->back()->withInput()->withErrors(['error' => 'Une erreur est survenue lors de la participation. Veuillez réessayer.']);
            }
        }
    }
}
