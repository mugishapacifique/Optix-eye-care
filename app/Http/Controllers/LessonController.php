<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Lesson;
use Omnipay\Omnipay;

class LessonController extends Controller
{
    private $gateway;

    public function __construct()
    {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET'));
        $this->gateway->setTestMode(true);
    }

    public function create()
    {
        return view('lessons.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'instructor' => 'required',
            'price' => 'required|numeric',
            'image_url' => 'nullable|url',
            'documents' => 'nullable|file',
            'video_url' => 'nullable|url',
            'description' => 'nullable|string',
        ]);

        $lesson = new Lesson([
            'title' => $request->input('title'),
            'instructor' => $request->input('instructor'),
            'price' => $request->input('price'),
            'image_url' => $request->input('image_url'), 
            'documents' => $request->hasFile('documents') ? $request->file('documents')->store('lesson_documents', 'public') : null,
            'video_url' => $request->input('video_url'),
            'description' => $request->input('description'),
        ]);
        
        $lesson->save();

        return redirect()->route('home');
    }

    public function show($id)
    {
        $lesson = Lesson::findOrFail($id);
        return view('lessons.show', compact('lesson'));
    }
}
