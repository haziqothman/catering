<?php
  
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Hash;
  
class AdminProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('profile');
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
  

  public function show()
  {
      $user = auth()->user(); 
      return view('adminProfile.show', compact('user'));
  }

  public function edit()
  {
    $user = auth()->user(); 
    return view('adminProfile.edit', compact('user'));
  }

  public function update(Request $request)
  {
    // Validate the incoming data
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:users,email,' . auth()->id(),
        'phone' => 'nullable|string|max:15',
        'address' => 'nullable|string|max:255',
        'postcode' => 'required|numeric|min:10000|max:99999',
        'city' => 'nullable|string|max:100',
        'identification_card' => 'nullable|string|max:255',
        'password' => 'nullable|string|min:8|confirmed',
    ]);

       $user = auth()->user();

    // Update the user's other details
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->phone = $validatedData['phone'];
        $user->address = $validatedData['address'];
        $user->city = $validatedData['city'];
        $user->postcode = $validatedData['postcode'];
        $user->identification_card = $validatedData['identification_card'];

    // Update password only if a new one is provided
    if ($request->filled('password')) {
        $user->password = Hash::make($validatedData['password']);
    }

    $user->save();

    return redirect()->route('adminProfile.show')->with('success', 'Profile updated successfully!');
  }

  public function showProfile()
  {
      $user = auth()->user(); 
      return view('adminProfile.show', compact('user'));
  }

  // AdminProfileController.php
  public function listUsers()
  {
      $users = User::all();  // Fetch the users, adjust based on your logic
      return view('adminProfile.users.index', compact('users'));  // Pass users to the view
  }

  public function deleteUser(User $user)
  {
      // Delete the user
      $user->delete();

      // Redirect back with a success message
      return redirect()->route('adminProfile.users')->with('success', 'User deleted successfully!');
  }

  public function create()
    {
        return view('adminProfile.create'); // Return a view for creating an admin
    }

    // Method to handle storing the new admin
   // app/Http/Controllers/AdminProfileController.php

   public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:8|confirmed',
    ]);

    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'type' => 1,
    ]);

    return redirect()->route('adminProfile.users')->with('success', 'Admin created successfully!');
}
}
