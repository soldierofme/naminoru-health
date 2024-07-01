<?php
public function dashboard()
{
    $user = Auth::user();
    $points = $user ? $user->points : 0;
    $stage = $this->calculateStage($points);

    return view('dashboard', compact('points', 'stage'));
}
?>