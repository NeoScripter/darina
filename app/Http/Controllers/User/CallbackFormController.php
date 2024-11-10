<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Mail\CallbackRequestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CallbackFormController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'weekday' => 'nullable|string',
            'time' => 'nullable|string',
        ]);

        // Prepare the data for the email
        $emailData = [
            'name' => $validated['name'],
            'phone' => $validated['phone'],
            'weekday' => $validated['weekday'] ?? null,
            'time' => $validated['time'] ?? null,
        ];

        // Send the email
        Mail::to('your-email@example.com')->send(new CallbackRequestMail($emailData));

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Запрос успешно отправлен!');
    }
}
