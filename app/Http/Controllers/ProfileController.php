<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Hash;
  
class ProfileController extends Controller
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
  //   public function store(Request $request)
  // {
  //   $request->validate([
  //       'name' => 'required',
  //       'email' => 'required|email',
  //       'address' => 'nullable|string',
  //       'phone' => 'nullable|string',
  //       'city' => 'nullable|string',
  //       'confirm_password' => 'required_with:password|same:password',
  //       'avatar' => 'image',
  //   ]);

  //   $input = $request->all();
    
  //   if ($request->hasFile('avatar')) {
  //       $avatarName = time().'.'.$request->avatar->getClientOriginalExtension();
  //       $request->avatar->move(public_path('avatars'), $avatarName);

  //       $input['avatar'] = $avatarName;
  //   } else {
  //       unset($input['avatar']);
  //   }

  //   if ($request->filled('password')) {
  //       $input['password'] = Hash::make($input['password']);
  //   } else {
  //       unset($input['password']);
  //   }

  //   auth()->user()->update($input);

  //   return back()->with('success', 'Profile updated successfully.');
  // }

  public function show()
  {
      $user = auth()->user(); // Get the currently authenticated user
      return view('profile.show', compact('user'));
  }

  public function edit()
  {
    $user = auth()->user(); // Get the currently authenticated user
    return view('profile.edit', compact('user'));
  }

  public function update(Request $request)
  {
    // Validate the incoming data
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:users,email,' . auth()->id(),
        'phone' => 'nullable|string|max:15',
        'address' => 'nullable|string|max:255',
        'city' => 'nullable|string|max:100',
        'company' => 'nullable|string|max:100',
        'identification_card' => 'nullable|string|max:255',
        // Validate password only if provided
        'password' => 'nullable|string|min:8|confirmed',
    ]);

       $user = auth()->user();

    // Update the user's other details
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->phone = $validatedData['phone'];
        $user->address = $validatedData['address'];
        $user->city = $validatedData['city'];
        $user->company = $validatedData['company'];
        $user->identification_card = $validatedData['identification_card'];

    // Update password only if a new one is provided
    if ($request->filled('password')) {
        $user->password = Hash::make($validatedData['password']);
    }

    $user->save();

    return redirect()->route('profile.show')->with('success', 'Profile updated successfully!');
  }
}
