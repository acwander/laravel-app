@extends('layouts.app')

@section('content')
<div class='container'>
  <form action='/scorecard' enctype='multipart/form-data' method='post'>
    @csrf
    <div class='row'>
      <div class='col-8 offset-2'>
        <div>
          <h1 class='text-center pb-3'>New Scorecard</h1>
        </div>
        <div class="form-group row">
          <label for="course" class="col-md-4 col-form-label text-md-right">Course Name</label>
          <div class="col-md-6">
              <input id="course" type="text" class="form-control @error('course') is-invalid @enderror" name="course" value="{{ old('course') }}" autocomplete="course" autofocus>
              @error('course')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="date" class="col-md-4 col-form-label text-md-right">Date Played</label>
          <div class="col-md-6">
              <input id="date" type="text" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date') }}" autocomplete="date" autofocus>
              @error('date')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="distance1" class="col-md-4 col-form-label text-md-right">Hole 1 Distance</label>
          <div class="col-md-6">
              <input id="distance1" type="text" class="form-control @error('distance1') is-invalid @enderror" name="distance1" value="{{ old('distance1') }}" autocomplete="distance1" autofocus>
              @error('distance1')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="par1" class="col-md-4 col-form-label text-md-right">Hole 1 Par</label>
          <div class="col-md-6">
              <input id="par1" type="text" class="form-control @error('par1') is-invalid @enderror" name="par1" value="{{ old('par1') }}" autocomplete="par1" autofocus>
              @error('par1')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="distance2" class="col-md-4 col-form-label text-md-right">Hole 2 Distance</label>
          <div class="col-md-6">
              <input id="distance2" type="text" class="form-control @error('distance2') is-invalid @enderror" name="distance2" value="{{ old('distance2') }}" autocomplete="distance2" autofocus>
              @error('distance2')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="par2" class="col-md-4 col-form-label text-md-right">Hole 2 Par</label>
          <div class="col-md-6">
              <input id="par2" type="text" class="form-control @error('par2') is-invalid @enderror" name="par2" value="{{ old('par2') }}" autocomplete="par2" autofocus>
              @error('par2')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="distance3" class="col-md-4 col-form-label text-md-right">Hole 3 Distance</label>
          <div class="col-md-6">
              <input id="distance3" type="text" class="form-control @error('distance3') is-invalid @enderror" name="distance3" value="{{ old('distance3') }}" autocomplete="distance3" autofocus>
              @error('distance3')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="par3" class="col-md-4 col-form-label text-md-right">Hole 3 Par</label>
          <div class="col-md-6">
              <input id="par3" type="text" class="form-control @error('par3') is-invalid @enderror" name="par3" value="{{ old('par3') }}" autocomplete="par3" autofocus>
              @error('par3')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="distance4" class="col-md-4 col-form-label text-md-right">Hole 4 Distance</label>
          <div class="col-md-6">
              <input id="distance4" type="text" class="form-control @error('distance4') is-invalid @enderror" name="distance4" value="{{ old('distance4') }}" autocomplete="distance4" autofocus>
              @error('distance4')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="par4" class="col-md-4 col-form-label text-md-right">Hole 4 Par</label>
          <div class="col-md-6">
              <input id="par4" type="text" class="form-control @error('par4') is-invalid @enderror" name="par4" value="{{ old('par4') }}" autocomplete="par4" autofocus>
              @error('par4')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="distance5" class="col-md-4 col-form-label text-md-right">Hole 5 Distance</label>
          <div class="col-md-6">
              <input id="distance5" type="text" class="form-control @error('distance5') is-invalid @enderror" name="distance5" value="{{ old('distance5') }}" autocomplete="distance5" autofocus>
              @error('distance5')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="par5" class="col-md-4 col-form-label text-md-right">Hole 5 Par</label>
          <div class="col-md-6">
              <input id="par5" type="text" class="form-control @error('par5') is-invalid @enderror" name="par5" value="{{ old('par5') }}" autocomplete="par5" autofocus>
              @error('par5')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="distance6" class="col-md-4 col-form-label text-md-right">Hole 6 Distance</label>
          <div class="col-md-6">
              <input id="distance6" type="text" class="form-control @error('distance6') is-invalid @enderror" name="distance6" value="{{ old('distance6') }}" autocomplete="distance6" autofocus>
              @error('distance6')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="par6" class="col-md-4 col-form-label text-md-right">Hole 6 Par</label>
          <div class="col-md-6">
              <input id="par6" type="text" class="form-control @error('par6') is-invalid @enderror" name="par6" value="{{ old('par6') }}" autocomplete="par6" autofocus>
              @error('par6')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="distance7" class="col-md-4 col-form-label text-md-right">Hole 7 Distance</label>
          <div class="col-md-6">
              <input id="distance7" type="text" class="form-control @error('distance7') is-invalid @enderror" name="distance7" value="{{ old('distance7') }}" autocomplete="distance7" autofocus>
              @error('distance7')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="par7" class="col-md-4 col-form-label text-md-right">Hole 7 Par</label>
          <div class="col-md-6">
              <input id="par7" type="text" class="form-control @error('par7') is-invalid @enderror" name="par7" value="{{ old('par7') }}" autocomplete="par7" autofocus>
              @error('par7')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="distance8" class="col-md-4 col-form-label text-md-right">Hole 8 Distance</label>
          <div class="col-md-6">
              <input id="distance8" type="text" class="form-control @error('distance8') is-invalid @enderror" name="distance8" value="{{ old('distance8') }}" autocomplete="distance8" autofocus>
              @error('distance8')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="par8" class="col-md-4 col-form-label text-md-right">Hole 8 Par</label>
          <div class="col-md-6">
              <input id="par8" type="text" class="form-control @error('par8') is-invalid @enderror" name="par8" value="{{ old('par8') }}" autocomplete="par8" autofocus>
              @error('par8')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="distance9" class="col-md-4 col-form-label text-md-right">Hole 9 Distance</label>
          <div class="col-md-6">
              <input id="distance9" type="text" class="form-control @error('distance9') is-invalid @enderror" name="distance9" value="{{ old('distance9') }}" autocomplete="distance9" autofocus>
              @error('distance9')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="par9" class="col-md-4 col-form-label text-md-right">Hole 9 Par</label>
          <div class="col-md-6">
              <input id="par9" type="text" class="form-control @error('par9') is-invalid @enderror" name="par9" value="{{ old('par9') }}" autocomplete="par9" autofocus>
              @error('par9')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="distance10" class="col-md-4 col-form-label text-md-right">Hole 10 Distance</label>
          <div class="col-md-6">
              <input id="distance10" type="text" class="form-control @error('distance10') is-invalid @enderror" name="distance10" value="{{ old('distance10') }}" autocomplete="distance10" autofocus>
              @error('distance10')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="par10" class="col-md-4 col-form-label text-md-right">Hole 10 Par</label>
          <div class="col-md-6">
              <input id="par10" type="text" class="form-control @error('par10') is-invalid @enderror" name="par10" value="{{ old('par10') }}" autocomplete="par10" autofocus>
              @error('par10')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="distance11" class="col-md-4 col-form-label text-md-right">Hole 11 Distance</label>
          <div class="col-md-6">
              <input id="distance11" type="text" class="form-control @error('distance11') is-invalid @enderror" name="distance11" value="{{ old('distance11') }}" autocomplete="distance11" autofocus>
              @error('distance11')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="par11" class="col-md-4 col-form-label text-md-right">Hole 11 Par</label>
          <div class="col-md-6">
              <input id="par11" type="text" class="form-control @error('par11') is-invalid @enderror" name="par11" value="{{ old('par11') }}" autocomplete="par11" autofocus>
              @error('par11')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="distance12" class="col-md-4 col-form-label text-md-right">Hole 12 Distance</label>
          <div class="col-md-6">
              <input id="distance12" type="text" class="form-control @error('distance12') is-invalid @enderror" name="distance12" value="{{ old('distance12') }}" autocomplete="distance12" autofocus>
              @error('distance12')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="par12" class="col-md-4 col-form-label text-md-right">Hole 12 Par</label>
          <div class="col-md-6">
              <input id="par12" type="text" class="form-control @error('par12') is-invalid @enderror" name="par12" value="{{ old('par12') }}" autocomplete="par12" autofocus>
              @error('par12')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="distance13" class="col-md-4 col-form-label text-md-right">Hole 13 Distance</label>
          <div class="col-md-6">
              <input id="distance13" type="text" class="form-control @error('distance13') is-invalid @enderror" name="distance13" value="{{ old('distance13') }}" autocomplete="distance13" autofocus>
              @error('distance13')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="par13" class="col-md-4 col-form-label text-md-right">Hole 13 Par</label>
          <div class="col-md-6">
              <input id="par13" type="text" class="form-control @error('par13') is-invalid @enderror" name="par13" value="{{ old('par13') }}" autocomplete="par13" autofocus>
              @error('par13')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="distance14" class="col-md-4 col-form-label text-md-right">Hole 14 Distance</label>
          <div class="col-md-6">
              <input id="distance14" type="text" class="form-control @error('distance14') is-invalid @enderror" name="distance14" value="{{ old('distance14') }}" autocomplete="distance14" autofocus>
              @error('distance14')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="par14" class="col-md-4 col-form-label text-md-right">Hole 14 Par</label>
          <div class="col-md-6">
              <input id="par14" type="text" class="form-control @error('par14') is-invalid @enderror" name="par14" value="{{ old('par14') }}" autocomplete="par14" autofocus>
              @error('par14')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="distance15" class="col-md-4 col-form-label text-md-right">Hole 15 Distance</label>
          <div class="col-md-6">
              <input id="distance15" type="text" class="form-control @error('distance15') is-invalid @enderror" name="distance15" value="{{ old('distance15') }}" autocomplete="distance15" autofocus>
              @error('distance15')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="par15" class="col-md-4 col-form-label text-md-right">Hole 15 Par</label>
          <div class="col-md-6">
              <input id="par15" type="text" class="form-control @error('par15') is-invalid @enderror" name="par15" value="{{ old('par15') }}" autocomplete="par15" autofocus>
              @error('par15')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="distance16" class="col-md-4 col-form-label text-md-right">Hole 16 Distance</label>
          <div class="col-md-6">
              <input id="distance16" type="text" class="form-control @error('distance16') is-invalid @enderror" name="distance16" value="{{ old('distance16') }}" autocomplete="distance16" autofocus>
              @error('distance16')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="par16" class="col-md-4 col-form-label text-md-right">Hole 16 Par</label>
          <div class="col-md-6">
              <input id="par16" type="text" class="form-control @error('par16') is-invalid @enderror" name="par16" value="{{ old('par16') }}" autocomplete="par16" autofocus>
              @error('par16')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="distance17" class="col-md-4 col-form-label text-md-right">Hole 17 Distance</label>
          <div class="col-md-6">
              <input id="distance17" type="text" class="form-control @error('distance17') is-invalid @enderror" name="distance17" value="{{ old('distance17') }}" autocomplete="distance17" autofocus>
              @error('distance17')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="par17" class="col-md-4 col-form-label text-md-right">Hole 17 Par</label>
          <div class="col-md-6">
              <input id="par17" type="text" class="form-control @error('par17') is-invalid @enderror" name="par17" value="{{ old('par17') }}" autocomplete="par17" autofocus>
              @error('par17')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="distance18" class="col-md-4 col-form-label text-md-right">Hole 18 Distance</label>
          <div class="col-md-6">
              <input id="distance18" type="text" class="form-control @error('distance18') is-invalid @enderror" name="distance18" value="{{ old('distance18') }}" autocomplete="distance18" autofocus>
              @error('distance18')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="par18" class="col-md-4 col-form-label text-md-right">Hole 18 Par</label>
          <div class="col-md-6">
              <input id="par18" type="text" class="form-control @error('par18') is-invalid @enderror" name="par18" value="{{ old('par18') }}" autocomplete="par18" autofocus>
              @error('par18')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="player1" class="col-md-4 col-form-label text-md-right">Player 1 Name</label>
          <div class="col-md-6">
              <input id="player1" type="text" class="form-control @error('player1') is-invalid @enderror" name="player1" value="{{ old('player1') }}" autocomplete="player1" autofocus>
              @error('player1')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="player1hole1" class="col-md-4 col-form-label text-md-right">Player 1 - Hole 1 Score</label>
          <div class="col-md-6">
              <input id="player1hole1" type="text" class="form-control @error('player1hole1') is-invalid @enderror" name="player1hole1" value="{{ old('player1hole1') }}" autocomplete="player1hole1" autofocus>
              @error('player1hole1')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="player1hole2" class="col-md-4 col-form-label text-md-right">Player 1 - Hole 2 Score</label>
          <div class="col-md-6">
              <input id="player1hole2" type="text" class="form-control @error('player1hole2') is-invalid @enderror" name="player1hole2" value="{{ old('player1hole2') }}" autocomplete="player1hole2" autofocus>
              @error('player1hole2')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="player1hole3" class="col-md-4 col-form-label text-md-right">Player 1 - Hole 3 Score</label>
          <div class="col-md-6">
              <input id="player1hole3" type="text" class="form-control @error('player1hole3') is-invalid @enderror" name="player1hole3" value="{{ old('player1hole3') }}" autocomplete="player1hole3" autofocus>
              @error('player1hole3')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="player1hole4" class="col-md-4 col-form-label text-md-right">Player 1 - Hole 4 Score</label>
          <div class="col-md-6">
              <input id="player1hole4" type="text" class="form-control @error('player1hole4') is-invalid @enderror" name="player1hole4" value="{{ old('player1hole4') }}" autocomplete="player1hole4" autofocus>
              @error('player1hole4')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="player1hole5" class="col-md-4 col-form-label text-md-right">Player 1 - Hole 5 Score</label>
          <div class="col-md-6">
              <input id="player1hole5" type="text" class="form-control @error('player1hole5') is-invalid @enderror" name="player1hole5" value="{{ old('player1hole5') }}" autocomplete="player1hole5" autofocus>
              @error('player1hole5')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="player1hole6" class="col-md-4 col-form-label text-md-right">Player 1 - Hole 6 Score</label>
          <div class="col-md-6">
              <input id="player1hole6" type="text" class="form-control @error('player1hole6') is-invalid @enderror" name="player1hole6" value="{{ old('player1hole6') }}" autocomplete="player1hole6" autofocus>
              @error('player1hole6')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="player1hole7" class="col-md-4 col-form-label text-md-right">Player 1 - Hole 7 Score</label>
          <div class="col-md-6">
              <input id="player1hole7" type="text" class="form-control @error('player1hole7') is-invalid @enderror" name="player1hole7" value="{{ old('player1hole7') }}" autocomplete="player1hole7" autofocus>
              @error('player1hole7')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="player1hole8" class="col-md-4 col-form-label text-md-right">Player 1 - Hole 8 Score</label>
          <div class="col-md-6">
              <input id="player1hole8" type="text" class="form-control @error('player1hole8') is-invalid @enderror" name="player1hole8" value="{{ old('player1hole8') }}" autocomplete="player1hole8" autofocus>
              @error('player1hole8')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="player1hole9" class="col-md-4 col-form-label text-md-right">Player 1 - Hole 9 Score</label>
          <div class="col-md-6">
              <input id="player1hole9" type="text" class="form-control @error('player1hole9') is-invalid @enderror" name="player1hole9" value="{{ old('player1hole9') }}" autocomplete="player1hole9" autofocus>
              @error('player1hole9')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="player1hole10" class="col-md-4 col-form-label text-md-right">Player 1 - Hole 10 Score</label>
          <div class="col-md-6">
              <input id="player1hole10" type="text" class="form-control @error('player1hole10') is-invalid @enderror" name="player1hole10" value="{{ old('player1hole10') }}" autocomplete="player1hole10" autofocus>
              @error('player1hole10')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="player1hole11" class="col-md-4 col-form-label text-md-right">Player 1 - Hole 11 Score</label>
          <div class="col-md-6">
              <input id="player1hole11" type="text" class="form-control @error('player1hole11') is-invalid @enderror" name="player1hole11" value="{{ old('player1hole11') }}" autocomplete="player1hole11" autofocus>
              @error('player1hole11')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="player1hole12" class="col-md-4 col-form-label text-md-right">Player 1 - Hole 12 Score</label>
          <div class="col-md-6">
              <input id="player1hole12" type="text" class="form-control @error('player1hole12') is-invalid @enderror" name="player1hole12" value="{{ old('player1hole12') }}" autocomplete="player1hole12" autofocus>
              @error('player1hole12')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="player1hole13" class="col-md-4 col-form-label text-md-right">Player 1 - Hole 13 Score</label>
          <div class="col-md-6">
              <input id="player1hole13" type="text" class="form-control @error('player1hole13') is-invalid @enderror" name="player1hole13" value="{{ old('player1hole13') }}" autocomplete="player1hole13" autofocus>
              @error('player1hole13')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="player1hole14" class="col-md-4 col-form-label text-md-right">Player 1 - Hole 14 Score</label>
          <div class="col-md-6">
              <input id="player1hole14" type="text" class="form-control @error('player1hole14') is-invalid @enderror" name="player1hole14" value="{{ old('player1hole14') }}" autocomplete="player1hole14" autofocus>
              @error('player1hole14')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="player1hole15" class="col-md-4 col-form-label text-md-right">Player 1 - Hole 15 Score</label>
          <div class="col-md-6">
              <input id="player1hole15" type="text" class="form-control @error('player1hole15') is-invalid @enderror" name="player1hole15" value="{{ old('player1hole15') }}" autocomplete="player1hole15" autofocus>
              @error('player1hole15')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="player1hole16" class="col-md-4 col-form-label text-md-right">Player 1 - Hole 16 Score</label>
          <div class="col-md-6">
              <input id="player1hole16" type="text" class="form-control @error('player1hole16') is-invalid @enderror" name="player1hole16" value="{{ old('player1hole16') }}" autocomplete="player1hole16" autofocus>
              @error('player1hole16')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="player1hole17" class="col-md-4 col-form-label text-md-right">Player 1 - Hole 17 Score</label>
          <div class="col-md-6">
              <input id="player1hole17" type="text" class="form-control @error('player1hole17') is-invalid @enderror" name="player1hole17" value="{{ old('player1hole17') }}" autocomplete="player1hole17" autofocus>
              @error('player1hole17')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="player1hole18" class="col-md-4 col-form-label text-md-right">Player 1 - Hole 18 Score</label>
          <div class="col-md-6">
              <input id="player1hole18" type="text" class="form-control @error('player1hole18') is-invalid @enderror" name="player1hole18" value="{{ old('player1hole18') }}" autocomplete="player1hole18" autofocus>
              @error('player1hole18')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="player2" class="col-md-4 col-form-label text-md-right">Player 2 Name</label>
          <div class="col-md-6">
              <input id="player2" type="text" class="form-control @error('player2') is-invalid @enderror" name="player2" value="{{ old('player2') }}" autocomplete="player2" autofocus>
              @error('player2')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="player3" class="col-md-4 col-form-label text-md-right">Player 3 Name</label>
          <div class="col-md-6">
              <input id="player3" type="text" class="form-control @error('player3') is-invalid @enderror" name="player3" value="{{ old('player3') }}" autocomplete="player3" autofocus>
              @error('player3')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="player4" class="col-md-4 col-form-label text-md-right">Player 4 Name</label>
          <div class="col-md-6">
              <input id="player4" type="text" class="form-control @error('player4') is-invalid @enderror" name="player4" value="{{ old('player4') }}" autocomplete="player4" autofocus>
              @error('player4')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>
        <div class='row'>
          <button class='btn btn-primary'>Submit New Scorecard</button>
        </div>
      </div>
      
    </div>
  </form>
</div>
@endsection
