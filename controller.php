$users = User::all();

$users->transform(function($user,$index) {
  $user->id = encrypt($user->id);
  return $user->getAttributes();
});

retrun response()->json($users);
