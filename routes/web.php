/*
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/profile', function () {
    return view('profile');
});

Route::post('/profile', function (Request $request) {
    $name = $request->input('name');
    $email = $request->input('email');
    $phone = $request->input('phone');
    $bio = $request->input('bio');

    if ($request->hasFile('avatar')) {
        $path = $request->file('avatar')->store('public/avatars');
    }

    return;
});

*/
/*
use App\Http\Controllers\StarWarsController;

Route::get('/starwars', [StarWarsController::class, 'index']);

*/


use App\Http\Controllers\LoginController;

Route::post('/login/api', [LoginController::class, 'login']);