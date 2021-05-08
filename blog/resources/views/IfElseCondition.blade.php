<h1>If Else Condition</h1>
@if($LoginStatusKey == true)
    <h1>You are Logged in</h1>
@elseif($LoginStatusKey == false)
    <h1>You are not logged in</h1>
@else
    <h1>Login Status Not Found</h1>
@endif
